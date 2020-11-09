<?php
/** @var $field \GDO\UI\GDT_Tab **/
/** @var $cell string **/
?>
<div <?=$field->htmlID()?> class="gdo-tab">
  <p>
<?php
foreach ($field->getFields() as $gdoType) :
	echo $cell ? $gdoType->renderCell() : $gdoType->renderForm();
endforeach;?>
  </p>
</div>
