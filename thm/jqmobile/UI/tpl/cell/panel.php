<?php
/** @var \GDO\UI\GDT_Panel $field **/ ?>
<div class="gdo-panel ui-body ui-body-a ui-corner-all">
<?php if ($field->title) : ?>
<h3><?=$field->title?></h3>
<?php endif; ?>
<p><?=$field->html?>
<?php foreach ($field->getFields() as $gdt) : ?>
<?php echo $gdt->renderCell(); ?>
<?php endforeach; ?></p>
</div>
