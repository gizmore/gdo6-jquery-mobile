<?php
/** @var $field \GDO\UI\GDT_Card **/
$field->addClass('gdt-card ui-body ui-body-a ui-corner-all');
?>
<div <?=$field->htmlAttributes()?>>

<?php if ($field->gdo) : ?>
  <a id="card-<?=$field->gdo->getID()?>" class="n"></a>
<?php endif; ?>

<?php if ($field->avatar || $field->title || $field->subtitle) : ?>
  <h3 class="gdt-card-upper">
<?php if ($field->avatar) : ?>
    <span class="gdt-card-avatar"><?=$field->avatar->imageSize(48)->renderCell()?></span>
<?php endif; ?>
<?php if ($field->title || $field->subtitle) : ?>
    <span class="gdt-card-title-texts">
<?php if ($field->title) : ?>
      <span class="gdt-card-title"><?=$field->title->renderCell()?></span>
<?php endif; ?>
<?php if ($field->subtitle) : ?>
      <span class="gdt-card-subtitle"><?=$field->subtitle->renderCell()?></span>
<?php endif; ?>
    </span>
<?php endif; ?>
  </h3>
<?php endif; ?>

<?php if ($field->image || $field->content || $field->fields) : ?>
  <div class="gdt-card-middle">
<?php if ($field->image) : ?>
    <div class="gdt-card-image"><?=$field->image->renderCell()?></div>
<?php endif; ?>
<?php if ($field->content) : ?>
    <div class="gdt-card-content"><?=$field->content->renderCell()?></div>
<?php endif; ?>
<?php if ($field->fields) : ?>
    <div class="gdt-card-fields">
    <?php foreach ($field->fields as $gdt) : ?>
      <?=$gdt->gdo($field->gdo)->renderCard()?>
    <?php endforeach; ?>
    </div>
<?php endif; ?>
  </div>
<?php endif; ?>

<?php if ($field->footer || $field->actions) : ?>
  <div class="gdt-card-lower">
<?php if ($field->footer) : ?>
    <div class="gdt-card-footer"><?=$field->footer->renderCell()?></div>
<?php endif; ?>
<?php if ($field->actions) : ?>
    <div class="gdt-card-actions"><?=$field->actions()->renderCell()?></div>
<?php endif; ?>
  </div>
<?php endif; ?>
  
</div>
