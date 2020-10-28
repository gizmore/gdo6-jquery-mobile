<?php
namespace GDO\JQueryMobile;

use GDO\Core\GDO_Module;

final class Module_JQueryMobile extends GDO_Module
{
    public $module_priority = 65;
    
    public function getThemes() { return ['jqmobile']; }
    
    public function onIncludeScripts()
    {
        
    }
    
}
