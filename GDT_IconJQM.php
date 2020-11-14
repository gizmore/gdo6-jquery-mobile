<?php
namespace GDO\JQueryMobile;

use GDO\UI\GDT_IconUTF8;

/**
 * JQueryMobile Icon Provider.
 * This icon set is a good start as it holds almost all used icons from UTF8.
 * Cleanup will be done via this set.
 * Also tpl from this module is a good start by now.
 * 
 * @author gizmore
 * @version 6.10
 * @since 6.10
 */
final class GDT_IconJQM
{
    private static $MAP = [
        'account' => 'ui-icon-shield',
        'arrow_down' => 'ui-icon-caret-d',
        'arrow_up' => 'ui-icon-caret-u',
        'add' => 'ui-icon-plus',
        'bars' => 'ui-icon-bars',
        'birthday' => 'ui-icon-gift',
        'captcha' => 'ui-icon-spinner',
        'check' => 'ui-icon-check',
        'create' => 'ui-icon-plus-circle',
        'delete' => 'ui-icon-delete',
        'download' => 'ui-icon-download',
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
        'message' => 'ui-icon-comment',
        'money' => 'ui-icon-usd',
        'quote' => 'ui-icon-quote-right',
        'search' => 'ui-icon-search',
        'settings' => 'ui-icon-gear',
        'table' => 'ui-icon-table',
        'thumbs_down' => 'ui-icon-thumbs-thumb',
        'thumbs_none' => 'ui-icon-hand-o-right',
        'thumbs_up' => 'ui-icon-thumbs-up',
        'time' => 'ui-icon-clock',
        'title' => 'ui-icon-text-width',
        'upload' => 'ui-icon-upload',
        'url' => 'ui-icon-link',
        'view' => 'ui-icon-eye',
    ];
    
    public static function iconS($icon, $iconText, $style)
    {
        if (!isset(self::$MAP[$icon]))
        {
            return GDT_IconUTF8::iconS($icon, $iconText, $style);
        }
        $style = $style ? ' style="'.$style.'"' : '';
        $title = $iconText ? ' title="'.html($iconText).'"' : '';
        $class = "gdo-icon ui-corner-all ui-icon ui-nodisc-icon ui-alt-icon";
        return sprintf('<span class="%s %s"%s%s></span>', self::$MAP[$icon], $class, $title, $style);
    }
    
}
