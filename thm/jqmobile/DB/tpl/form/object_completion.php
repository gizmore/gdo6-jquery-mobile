<?php
/** @var $field \GDO\DB\GDT_Object **/
$object = $field->getValue();
?>
<div class="ui-field-contain gdt-container<?=$field->classError()?> gdo-autocomplete">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <input
   type="search"
   class="gdo-autocomplete-input"
   <?=$field->htmlAutocompleteOff()?>
   data-config='<?=$field->displayConfigJSON()?>'
   data-type="search"
   <?=$field->htmlID()?>
   data-clear="true"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>
<?php if ($object !== null) : ?>
   value="<?=is_string($object) ? $object : $object->displayName()?>"
<?php endif; ?> />
  <input
   type="hidden"
   <?=$field->htmlFormName()?>
   id="completion-<?=$field->name?>"
   value="<?=$field->display()?>" />
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
