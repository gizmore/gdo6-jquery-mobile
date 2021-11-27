<?php /** @var $field \GDO\UI\GDT_Menu **/ ?>
<a href="#<?=$field->id()?>" data-rel="popup"><?=$field->displayLabel()?></a>
<div data-role="popup" id="<?=$field->id()?>" class="gdt-menu">
<ul data-role="listview">
<?php if ($field->label || $field->labelRaw) : ?>
<li data-role="divider"><?=$field->displayLabel()?></li>
<?php else : ?>
<li data-role="divider">aaa<?=t('menu')?></li>
<?php endif; ?>
<?php foreach ($field->getFields() as $gdt) : ?>
<li><?=$gdt->renderCell()?></li>
<?php endforeach; ?>
</ul>
</div>
