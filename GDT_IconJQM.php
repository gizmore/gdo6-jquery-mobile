<?php
namespace GDO\JQueryMobile;

use GDO\UI\GDT_IconUTF8;

/**
 * JQueryMobile Icon Provider.
 * 
 * @author gizmore
 * @version 6.10
 * @since 6.10
 */
final class GDT_IconJQM
{
    private static $MAP = [
        'account' => 'ui-icon-shield',
        'add' => 'ui-icon-plus',
        'bars' => 'ui-icon-bars',
        'birthday' => 'ui-icon-gift',
        'captcha' => 'ui-icon-spinner',
        'check' => 'ui-icon-check',
        'create' => 'ui-icon-plus-circle',
        'delete' => 'ui-icon-delete',
        'edit' => 'ui-icon-pencil',
        'email' => 'ui-icon-mail',
        'error' => 'ui-icon-exclamation-triangle',
        'face' => 'ui-icon-user',
        'file' => 'ui-icon-file',
        'flag' => 'ui-icon-flag',
        'gender' => 'ui-icon-user-md',
        'image' => 'ui-icon-picture-o',
        'language' => 'ui-icon-flag',
        'level' => 'ui-icon-external-link3',
        'lock' => 'ui-icon-lock',
        'message' => 'ui-icon-pencil',
        'settings' => 'ui-icon-gear',
        'table' => 'ui-icon-table',
        'thumbs_down' => 'ui-icon-thumbs-thumb',
        'thumbs_none' => 'ui-icon-hand-o-right',
        'thumbs_up' => 'ui-icon-thumbs-up',
        'time' => 'ui-icon-clock',
        'title' => 'ui-icon-text-width',
        'upload' => 'ui-icon-upload',
        'view' => 'ui-icon-eye',
    ];
    
    public static function iconS($icon, $iconText, $style)
    {
        if (!isset(self::$MAP[$icon]))
        {
            return GDT_IconUTF8::iconS($icon, $iconText, $style);
        }
        
//         $htmlStyle = $style ? ' style="'.$style.'"' : '';
//         $noText = $iconText ? '' : ' data-show-label="false"';
        $class = "gdo-icon ui-corner-all ui-btn-inline ui-btn";
        return sprintf('<button data-show-label="false" data-icon="%s" class="%s"></button>', self::$MAP[$icon], $class);
    }
    
}
