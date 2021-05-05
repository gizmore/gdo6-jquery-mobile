<?php /** @var $field GDO\Captcha\GDT_Captcha **/ ?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
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
  <img
   class="ib gdo-captcha-img"
   src="<?= $field->hrefCaptcha(); ?>"
   onclick="this.src='<?=$field->hrefNewCaptcha()?>'+(new Date().getTime())" />
  <?=$field->htmlError()?>
</div>
