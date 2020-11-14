<?php
use GDO\UI\GDT_Accordeon;
/** @var $field GDT_Accordeon **/
$field->addClass('gdt-accordeon closed');
?>
<div data-role="collapsible" data-mini="true" class="gdo-accordeon">
  <h3><?=$field->htmlIcon()?><?=$field->renderTitle()?></h3>
  <p><?=$field->renderText()?></p>
<?php if ($field->fields) : ?>
<?php foreach ($field->fields as $gdt) : ?>
<?=$gdt->renderCell()?>
<?php endforeach; ?>
<?php endif; ?>
</div>
