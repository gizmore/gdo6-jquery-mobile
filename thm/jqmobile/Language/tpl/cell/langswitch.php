<?php
use GDO\Language\Module_Language;
use GDO\Language\GDT_LangSwitch;
use GDO\Language\GDO_Language;
/** @var $field GDT_LangSwitch **/
$languages = Module_Language::instance()->cfgSupported();
$current = GDO_Language::current();
?>
<a href="#<?=$field->id()?>_popup" data-rel="popup"><?=$current->renderChoice()?></a>

<div id="<?=$field->id()?>_popup" data-role="popup">
  <ul data-role="list-view">
<?php foreach ($languages as $language) : ?>
    <li><a href="<?=$field->hrefLangSwitch($language)?>"><?=$language->renderChoice()?></a></li>
<?php endforeach; ?>
  </ul>
</div>
