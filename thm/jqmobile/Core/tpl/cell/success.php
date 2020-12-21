<?php
use GDO\UI\GDT_Icon;
/** @var $field \GDO\Core\GDT_Success **/
?>
<div class="gdo-success ui-body ui-body-a ui-corner-all">
<?php if ($field->hasTitle()) : ?>
  <h3><?=GDT_Icon::iconS('check')?><?=$field->renderTitle()?></h3>
  <?php if ($field->hasText()) : ?>
  <p><?=$field->renderText()?></p>
  <?php endif; ?>
<?php else : ?>
  <div class="fl"><?=GDT_Icon::iconS('check')?><?=$field->renderText()?></div><div class="cb"></div>
<?php endif; ?>
</div>
