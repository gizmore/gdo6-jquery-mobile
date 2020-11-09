<?php
use GDO\UI\GDT_Icon;
/** @var $field \GDO\Core\GDT_Success **/
?>
<div class="gdo-success ui-body ui-body-a ui-corner-all">
<?php if ($field->title) : ?>
  <h3><?=GDT_Icon::iconS('check')?><?=$field->title?></h3>
  <p><?=$field->html?></p>
<?php else : ?>
  <p><?=GDT_Icon::iconS('check')?><?=$field->html?></p>
<?php endif; ?>
</div>
