<?php /** @var $field \GDO\DB\GDT_Enum **/
$sel = ' selected="selected"';
$var = $field->filterVar($f);
?>
  <select
   name="<?=$f?>[f][<?=$field->name?>][]"
   data-native-menu="false"
   data-mini="true"
   multiple="multiple"
   onchange="submit()"
<?php if ($field->emptyLabel) : ?>
   placeholder="<?=$field->displayEmptyLabel()?>"
<?php endif; ?>>
	  <option value="<?=$field->emptyValue?>"<?=empty($var) ? $sel : ''?>><?=t('all')?></option>
	<?php foreach ($field->enumValues as $enumValue) : ?>
	  <option value="<?=html($enumValue)?>"<?=in_array($enumValue, $var) ? $sel : ''; ?>><?=$field->enumLabel($enumValue)?></option>
	<?php endforeach; ?>
  </select>
