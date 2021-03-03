<?php
namespace GDO\JQueryMobile;

use GDO\Core\GDO_Module;
use GDO\Core\GDT_Array;
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
    public $module_priority = 25;
    
    public function getTheme() { return 'jqmobile'; }
    
    public function getDependencies() { return ['JQuery']; }
    
    public function thirdPartyFolders() { return ['/jQuery-']; }

    /**
     * Block JQueryAutocomplete if we use ours.
     */
    public function getBlockedModules()
    {
        if ($this->cfgUseTheme() && $this->cfgUseAutocomplete() && Application::instance()->hasTheme('jqmobile'))
        {
            return ['JQueryAutocomplete'];
        }
    }
    
    public function onLoadLanguage() { return $this->loadLanguage('lang/jqm'); }
    
    public function getConfig()
    {
        return array(
            GDT_Enum::make('use_icons')->enumValues('jqm_icons_always', 'jqm_icons_on_theme', 'jqm_icons_never')->initial('jqm_icons_on_theme'),
            GDT_Checkbox::make('use_theme')->initial('1'),
            GDT_Checkbox::make('use_autocomplete')->initial('1'),
            GDT_Enum::make('jqm_theme')->enumValues('a', 'b')->initial('a'),
        );
    }
    public function cfgUseIcons() { return $this->getConfigVar('use_icons'); }
    public function cfgUseTheme() { return $this->getConfigValue('use_theme'); }
    public function cfgUseAutocomplete() { return $this->getConfigValue('use_autocomplete'); }
    public function cfgJQMTheme() { return $this->getConfigVar('jqm_theme'); }
    
    public function onIncludeScripts()
    {
        $min = Module_Core::instance()->cfgMinifyJS() === 'no' ? '' : '.min';
        if ($this->cfgUseTheme() && Application::instance()->hasTheme('jqmobile'))
        {
            $this->jqmIncluded = true;
            $this->addBowerJavascript("jquery-mobile/dist/jquery.mobile{$min}.js");
            $this->addBowerCSS("jquery-mobile/dist/jquery.mobile{$min}.css");
            $this->addJavascript('js/gdo6-jqm.js');
            $this->addCSS('css/jqm.css');
            if ($this->cfgUseAutocomplete())
            {
                $this->addJavascript('js/gdo6-jqm-autocomplete.js');
            }
            if ($this->cfgUseIcons() === 'jqm_icons_on_theme')
            {
                $this->addCSS('jQuery-Mobile-Icon-Pack/dist/jqm-icon-pack-fa.css');
                GDT_Icon::$iconProvider = ["GDO\JQueryMobile\GDT_IconJQM", 'iconS'];
            }
        }
        elseif ($this->cfgUseIcons() === 'jqm_icons_always')
        {
            $this->addBowerCSS("jquery-mobile/dist/jquery.mobile.icons{$min}.css");
            $this->addCSS('jQuery-Mobile-Icon-Pack/dist/jqm-icon-pack-fa.css');
            GDT_Icon::$iconProvider = ["GDO\JQueryMobile\GDT_IconJQM", 'iconS'];
        }
    }
    
    public function hookIgnoreDocsFiles(GDT_Array $ignore)
    {
        $ignore->data[] = 'GDO/JQueryMobile/jQuery-Mobile-Icon-Pack/**/*';
    }
    
}
