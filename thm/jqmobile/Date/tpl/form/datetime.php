<?php /** @var $field \GDO\Date\GDT_DateTime **/
?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   <?=$field->htmlID()?>
   type="datetime"
   <?=$field->htmlFormName()?>
   value="<?=$field->displayVar()?>"
   <?=$field->htmlDisabled()?> />
  <?=$field->htmlError()?>
</div>
