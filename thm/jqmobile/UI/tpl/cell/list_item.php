<?php
/** @var $gdt \GDO\UI\GDT_ListItem **/
$gdt->addClass('gdt-list-item');
?>
<li <?=$gdt->htmlAttributes()?>>
 <span>
<?php if ($gdt->avatar || $gdt->title || $gdt->subtitle) : ?>
  <span class="gdt-li-upper">
<?php if ($gdt->avatar) : ?>
	<span class="gdt-li-avatar"><?=$gdt->avatar->imageSize(48)->renderCell()?></span>
<?php endif; ?>
<?php if ($gdt->title || $gdt->subtitle) : ?>
    <span class="gdt-li-title-texts">
<?php if ($gdt->title) : ?>
      <span class="gdt-li-title"><?=$gdt->title->renderCell()?></span>
<?php endif; ?>
<?php if ($gdt->subtitle) : ?>
      <span class="gdt-li-subtitle"><?=$gdt->subtitle->renderCell()?></span>
<?php endif; ?>
    </span>
<?php endif; ?>
  </span>
<?php endif; ?>

<?php if ($gdt->image || $gdt->content) : ?>
  <span class="gdt-li-main">
<?php if ($gdt->image) : ?>
    <span class="gdt-li-image"><?=$gdt->image->renderCell()?></span>
<?php endif; ?>
<?php if ($gdt->content) : ?>
    <span class="gdt-li-content"><?=$gdt->content->renderCell()?></span>
<?php endif; ?>
  </span>
<?php endif; ?>

<?php if ($gdt->subtext) : ?>
  <span class="gdt-li-lower ui-li-aside">
<?php if ($gdt->subtext) : ?>
	<span class="gdt-li-subtext"><?=$gdt->subtext->renderCell()?></span>
<?php endif; ?>
  </span>
<?php endif; ?>

 </span>
<?php if ($gdt->actions) : ?>
 <span class="gdt-li-actions ui-listview-item-icon ui-icon ui-icon-caret-r ui-widget-icon-floatend"><?=$gdt->actions()->renderCell()?></span>
<?php endif; ?>

</li>
