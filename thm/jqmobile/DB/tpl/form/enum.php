<?php /** @var $field \GDO\DB\GDT_Enum **/
$sel = ' selected="selected"';
$var = $field->getVar();
?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
  <select
   data-native-menu="false"
   data-mini="true"
<?php if ($field->emptyLabel) : ?>
   placeholder="<?=$field->displayEmptyLabel()?>"
<?php endif; ?>
   <?=$field->htmlAttributes()?>
   <?=$field->htmlFormName()?>
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>>
<?php if ($field->emptyLabel) : ?>
	  <option value="<?=$field->emptyValue?>"<?=$field->emptyValue === $var ? $sel : ''?>><?=$field->displayEmptyLabel()?></option>
<?php endif; ?>
	<?php foreach ($field->enumValues as $enumValue) : ?>
	  <option value="<?=html($enumValue)?>"<?= $enumValue === $var ? $sel : ''; ?>><?=$field->enumLabel($enumValue)?></option>
	<?php endforeach; ?>
  </select>
  <?=$field->htmlError()?>
</div>
