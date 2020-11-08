<?php
use GDO\Form\GDT_Select;
/** @var $field GDT_Select **/
if ($field->completionHref)
{
    $field->addClass('gdo-autocomplete');
}
?>
<div class="ui-field-contain gdo-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <select
   data-mini="true"
   data-native-menu="false"
   <?=$field->htmlID()?>
   <?=$field->htmlAttributes()?>
<?php if ($field->completionHref) : ?>
    data-config='<?=$field->displayConfigJSON()?>'
<?php endif; ?>
   <?=$field->htmlFormName()?>
<?php if ($field->multiple) : ?>
   multiple="multiple"
   size="6"
<?php endif; ?>
   <?=$field->htmlDisabled()?>>
<?php if ($field->emptyLabel) : ?>
	<option value="<?=$field->emptyValue?>"<?=$field->htmlSelected($field->emptyValue)?>><?=$field->displayEmptyLabel()?></option>
<?php endif; ?>
<?php foreach ($field->choices as $value => $choice) : ?>
	<option value="<?=html($value)?>"<?=$field->htmlSelected($value);?>><?=$field->renderChoice($choice)?></option>
<?php endforeach; ?>
  </select>
  <?=$field->htmlError()?>
</div>
