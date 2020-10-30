<?php
namespace GDO\JQueryMobile;

use GDO\Core\GDO_Module;
use GDO\Core\Module_Core;
use GDO\DB\GDT_Checkbox;

/**
 * JQueryMobile bindings.
 * 
 * @author gizmore
 * @version 6.10
 * @since 6.10
 */
final class Module_JQueryMobile extends GDO_Module
{
    public $module_priority = 65;
    
    public function getThemes() { return ['jqmobile']; }
    
    public function getConfig()
    {
        return array(
            GDT_Checkbox::make('use_icons')->initial('1'),
            GDT_Checkbox::make('use_theme')->initial('1'),
        );
    }
    public function cfgUseIcons() { return $this->getConfigValue('use_icons'); }
    public function cfgUseTheme() { return $this->getConfigValue('use_theme'); }
    
    public function onIncludeScripts()
    {
        $min = Module_Core::instance()->cfgMinifyJS() === 'no' ? '' : '.min';
        
    }
    
}
