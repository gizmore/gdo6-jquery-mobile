<?php
/** @var $field \GDO\DB\GDT_Object **/
$object = $field->getValue();
?>
<div class="ui-field-contain gdo-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   type="search"
   class="gdo-autocomplete"
   autocomplete="off"
   data-config='<?=$field->displayConfigJSON()?>'
   data-type="search"
   <?=$field->htmlID()?>
   data-clear="true"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>
   value="<?=$object ? $object->displayName() : null?>" />
  <input
   type="hidden"
   <?=$field->htmlFormName()?>
   id="autocomplete-id-<?=$field->name?>"
   value="<?=$field->displayVar()?>" />
  <div data-role="controlgroup" data-filter-reveal="true" data-filter="true" data-input="#<?=$field->id()?>">
    <ul id="autocomplete-<?=$field->name?>"
     class="gdo-autocomplete-listview"
     data-role="listview"
     data-inset="true"
     data-filter="true"
     data-input="#<?=$field->id()?>"></ul>
  </div>
  <?=$field->htmlError()?>
</div>
