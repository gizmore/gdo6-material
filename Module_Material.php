<?php
namespace GDO\Material;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\UI\GDT_Icon;
use GDO\Core\Website;
use GDO\Core\Application;
use GDO\DB\GDT_Checkbox;
use GDO\Angular\Module_Angular;
use GDO\Javascript\Module_Javascript;

/**
 * Angular Material Design Theme
 * 
 * @author gizmore
 * @version 6.10
 * @since 5.00
 */
final class Module_Material extends GDO_Module
{
	public $module_priority = 20;
	
	public function getDependencies() { return ['Angular']; }
	
	public function getTheme() { return 'material'; }
	
	public function onLoadLanguage() { return $this->loadLanguage('lang/material'); }
	
	public function getConfig()
	{
	    return [
	        GDT_Checkbox::make('use_icons')->initial('1'),
	    ];
	}
	public function cfgUseIcons() { return $this->getConfigValue('use_icons'); }
	
	public function onIncludeScripts()
	{
	    if (Application::instance()->hasTheme('material'))
	    {
	        if (!Module_Angular::instance()->cfgIncludeScripts())
	        {
	            Module_Angular::instance()->onIncludeAngularScripts();
	        }
	        
	        $min = Module_Javascript::instance()->cfgMinAppend();
	        
	        # Material
	        $this->addBowerJS("angular-animate/angular-animate$min.js");
	        $this->addBowerJS("angular-aria/angular-aria$min.js");
	        $this->addBowerJS("angular-messages/angular-messages$min.js");
	        $this->addBowerJS("angular-material/angular-material$min.js");
	        $this->addBowerCSS("angular-material/angular-material$min.css");
	        # Icons
//          $this->addBowerJS("angular-material-icons/angular-material-icons$min.js");
//          $this->addBowerCSS("angular-material-icons/angular-material-icons.css");
	        Website::addCSS("https://fonts.googleapis.com/icon?family=Material+Icons");
	        # MD File
	        $this->addBowerJS("lf-ng-md-file-input/dist/lf-ng-md-file-input$min.js");
	        $this->addBowerCSS("lf-ng-md-file-input/dist/lf-ng-md-file-input$min.css");
	        # Datetime
	        $this->addBowerJS("moment/min/moment-with-locales.min.js");
	        $this->addBowerJS("ng-material-datetimepicker/dist/angular-material-datetimepicker.min.js");
	        $this->addBowerCSS("ng-material-datetimepicker/dist/material-datetimepicker.min.css");
	        
	        $this->onIncludeGDOScripts();
	        
	        if ($this->cfgUseIcons())
	        {
	            GDT_Icon::$iconProvider = ['GDO\\Material\\GDT_MaterialIcon', 'iconS'];
	        }
	    }
	}
	
	private function onIncludeGDOScripts()
	{
	    if (Application::instance()->hasTheme('material'))
	    {
    		$this->addCSS("css/gdo6-material.css");
    		
    		$this->addJS('js/gdo-module.js');
    		
    		$this->addJS('js/gwf-app-ctrl.js');
    		$this->addJS('js/gwf-error-srvc.js');
    		$this->addJS('js/gwf-request-interceptor.js');
	    }
	}
}
