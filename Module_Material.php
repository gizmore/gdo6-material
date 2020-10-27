<?php
namespace GDO\Material;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\UI\GDT_Icon;
use GDO\Core\Website;
use GDO\Core\Application;

/**
 * Angular Material Design Theme
 * 
 * @author gizmore
 * @since 5.00
 * @version 6.06
 */
final class Module_Material extends GDO_Module
{
	public $module_priority = 20;
	
	public function getDependencies() { return ['Angular']; }
	
	public function getThemes() { return ['material']; }
	
	public function onInit()
	{
		GDT_Icon::$iconProvider = ['GDO\\Material\\GDT_MaterialIcon', 'iconS'];
	}

	public function onIncludeScripts()
	{
        $min = Module_Core::instance()->cfgMinifyJS() !== 'no' ? '.min' : '';
		
		# Material
		$this->addBowerJavascript("angular-animate/angular-animate$min.js");
		$this->addBowerJavascript("angular-aria/angular-aria$min.js");
		$this->addBowerJavascript("angular-messages/angular-messages$min.js");
		$this->addBowerJavascript("angular-material/angular-material$min.js");
		$this->addBowerCSS("angular-material/angular-material$min.css");
		# Icons
// 		$this->addBowerJavascript("angular-material-icons/angular-material-icons$min.js");
// 		$this->addBowerCSS("angular-material-icons/angular-material-icons.css");
		Website::addCSS("https://fonts.googleapis.com/icon?family=Material+Icons");
		# MD File
		$this->addBowerJavascript("lf-ng-md-file-input/dist/lf-ng-md-file-input$min.js");
		$this->addBowerCSS("lf-ng-md-file-input/dist/lf-ng-md-file-input$min.css");
		# Datetime
		$this->addBowerJavascript("moment/min/moment-with-locales.min.js");
		$this->addBowerJavascript("ng-material-datetimepicker/dist/angular-material-datetimepicker.min.js");
		$this->addBowerCSS("ng-material-datetimepicker/dist/material-datetimepicker.min.css");
		
		$this->onIncludeGDOScripts();
	}
	
	private function onIncludeGDOScripts()
	{
	    if (in_array('material', Application::instance()->getThemes(), true))
	    {
    		$this->addCSS("css/gdo6-material.css");
    		
    		$this->addJavascript('js/gdo-module.js');
    		
    		$this->addJavascript('js/gwf-app-ctrl.js');
    		$this->addJavascript('js/gwf-error-srvc.js');
    		$this->addJavascript('js/gwf-request-interceptor.js');
	    }
	}
}
