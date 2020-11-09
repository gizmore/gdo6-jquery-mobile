<?php /** @var $field \GDO\UI\GDT_Menu **/ ?>
<a href="#<?=$field->id()?>" data-rel="popup"><?=t('menu')?></a>
<div data-role="popup" id="<?=$field->id()?>" class="gdt-menu">
<ul data-role="listview">
<li data-role="divider"><?=t('menu')?></li>
<?php foreach ($field->getFields() as $gdoType) : ?>
<li><?=$gdoType->renderCell()?></li>
<?php endforeach; ?>
</ul>
</div>
