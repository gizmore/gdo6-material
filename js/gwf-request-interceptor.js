'use strict';
angular.module('gdo6-material').
factory('RequestInterceptor', function($q, $injector) {
	var ErrorSrvc;
	return {
		'request': function(config) {
			  return config;
		},
		'requestError': function(rejection) {
	        if (!ErrorSrvc) { ErrorSrvc = $injector.get('GDOErrorSrvc'); }
			ErrorSrvc.showNetworkError(rejection);
			return $q.reject(rejection);
		},
		'response': function(response) {
			return response;
		},
		'responseError': function(rejection) {
			console.log("RequestInterceptor::responseError()", rejection);
	        if (!ErrorSrvc) { ErrorSrvc = $injector.get('GDOErrorSrvc'); }
			var code = rejection.status;
			if ((code == 403)) {
			}
			else if (code == 404) {
				ErrorSrvc.show404Error(rejection);
			}
			else {
				var message = 'Unknown Error';
				if (rejection.data) {
					if (rejection.data.error) {
						message = rejection.data.error;
					}
					else if (rejection.data) {
						message = rejection.data;
					}
				}
				ErrorSrvc.showServerError(message);
			}
			return $q.reject(rejection);
		}
	};
}).
config(function($httpProvider) {  
	$httpProvider.interceptors.push('RequestInterceptor');
});
