<?php
use GDO\Mail\GDT_Email;
/** @var $field GDT_Email **/
?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   size="32"
   type="email"
   data-clear-btn="true"
   <?=$field->htmlID()?>
   <?=$field->htmlFormName()?>
   value="<?=$field->displayVar()?>"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?> />
  <?=$field->htmlError()?>
</div>
