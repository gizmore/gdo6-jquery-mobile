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
        'bars' => 'ui-icon-bars',
        'email' => 'ui-icon-mail',
        'face' => 'ui-icon-user',
        'flag' => 'ui-icon-flag',
        'language' => 'ui-icon-flag',
        'time' => 'ui-icon-clock',
    ];
    
    public static function iconS($icon, $iconText, $style)
    {
        if (!isset(self::$MAP[$icon]))
        {
            return GDT_IconUTF8::iconS($icon, $iconText, $style);
        }
        
        $htmlStyle = $style ? ' style="'.$style.'"' : '';
        $noText = $iconText ? '' : ' data-show-label="false"';
        
        return sprintf('<button %s class="gdo-jqm-icon" data-iconpos="left" data-icon="%s"%s>%s</button>',
            $noText, self::$MAP[$icon], $htmlStyle, html($iconText));
    }
    
}
