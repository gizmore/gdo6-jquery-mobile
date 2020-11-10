<?php
use GDO\UI\GDT_Icon;
/** @var $field \GDO\Core\GDT_Error **/
?>
<div class="gdo-error ui-body ui-body-a ui-corner-all">
<?php if ($field->title) : ?>
  <h3><?=GDT_Icon::iconS('error')?><?=$field->title?></h3>
  <p><?=$field->html?></p>
<?php else : ?>
  <div class="fl"><?=GDT_Icon::iconS('error')?></div><p class="gdo-error-message"><?=$field->html?></p>
  <div class="cb"></div>
<?php endif; ?>
</div>
