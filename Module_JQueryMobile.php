<?php
namespace GDO\JQueryMobile;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\DB\GDT_Checkbox;
use GDO\UI\GDT_Icon;
use GDO\Core\Application;
use GDO\DB\GDT_Enum;

/**
 * JQueryMobile bindings and theme.
 * 
 * @author gizmore
 * @version 6.10
 * @since 6.10
 */
final class Module_JQueryMobile extends GDO_Module
{
    public $module_priority = 10;
    
    public function getThemes() { return ['jqmobile']; }
    
    public function getDependencies() { return ['JQuery']; }
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/jqm'); }
    
    public function getConfig()
    {
        return array(
            GDT_Checkbox::make('use_icons')->initial('1'),
            GDT_Checkbox::make('use_theme')->initial('1'),
            GDT_Enum::make('jqm_theme')->enumValues('a', 'b', 'c', 'd')->initial('a'),
        );
    }
    public function cfgUseIcons() { return $this->getConfigValue('use_icons'); }
    public function cfgUseTheme() { return $this->getConfigValue('use_theme'); }
    public function cfgJQMTheme() { return $this->getConfigVar('jqm_theme'); }
    
    public function onIncludeScripts()
    {
        $min = Module_Core::instance()->cfgMinifyJS() === 'no' ? '' : '.min';
        if ($this->cfgUseTheme())
        {
            if (Application::instance()->hasTheme('jqmobile'))
            {
                $this->addBowerJavascript("jquery-mobile/dist/jquery.mobile{$min}.js");
                $this->addBowerCSS("jquery-mobile/dist/jquery.mobile{$min}.css");
                $this->addCSS('css/jqm.css');
                $this->addJavascript('js/gdo6-jqm.js');
            }
        }
        if ($this->cfgUseIcons())
        {
            $this->addCSS('jQuery-Mobile-Icon-Pack/dist/jqm-icon-pack-fa.css');
        }
    }
    
    public function onInit()
    {
        if ($this->cfgUseIcons())
        {
            # Set icon provider.
            $method = ["GDO\JQueryMobile\GDT_IconJQM", 'iconS'];
            GDT_Icon::$iconProvider = $method;
        }
    }
    
}
