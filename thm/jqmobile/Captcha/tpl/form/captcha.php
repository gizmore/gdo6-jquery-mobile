<?php
use GDO\Core\GDT_Template;
/** @var $field GDO\Captcha\GDT_Captcha **/
?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <?=GDT_Template::php('Captcha', 'form/captcha_inner.php', ['field' => $field])?>
  <?=$field->htmlError()?>
</div>
