<?php /** @var $field \GDO\Date\GDT_DateTime **/ ?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   <?=$field->htmlID()?>
   type="time"
   <?=$field->htmlFormName()?>
   value="<?=$field->display()?>"
   <?=$field->htmlDisabled()?> />
  <?=$field->htmlError()?>
</div>
