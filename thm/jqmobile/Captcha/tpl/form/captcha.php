<?php
use GDO\Core\GDT_Template;
/** @var $field GDO\Captcha\GDT_Captcha **/
?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <span>
  <input
   <?=$field->htmlID()?>
   class="ib"
   autocomplete="off"
   type="text"
   pattern="[a-zA-Z]{5}"
   size="5"
   required="required"
   <?=$field->htmlFormName()?>
   value="<?=$field->displayVar()?>" />
   <?=GDT_Template::php('Captcha', 'form/captcha_inner.php', ['field' => $field])?>
  </span>
  <?=$field->htmlError()?>
</div>
