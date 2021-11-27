<?php
/** @var $field \GDO\UI\GDT_Tab **/
/** @var $cell string **/
?>
<div <?=$field->htmlID()?> class="gdo-tab">
  <p>
<?php
foreach ($field->getFields() as $gdt) :
	echo $cell ? $gdt->renderCell() : $gdt->renderForm();
endforeach;?>
  </p>
</div>
