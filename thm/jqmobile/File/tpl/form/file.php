<?php /** @var $field \GDO\File\GDT_File **/ ?>
<div class="ui-field-contain gdo-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
<div id="gdo-file-preview-<?=$field->name?>"></div>
<?php foreach ($field->getInitialFiles() as $file) : $file instanceof \GDO\File\GDO_File; ?>
<?php $deleteButton = $field->noDelete ? '' : sprintf('<input type="submit" name="delete_%s[%s]" value="Remove File" onclick="return confirm(\'%s\')"/>', $field->name, $file->getID(), t('confirm_delete')); ?>
<?php if ($field->preview && $file->isImageType()) : ?>
<?php printf('<div class="gdo-file-preview"><img src="%s" />%s (%s)</div>', $field->displayPreviewHref($file), $deleteButton, html($file->getName())); ?>
<?php else : ?>
<?php printf('<div class="gdo-file-preview">%s %s</div>', html($file->getName()), $deleteButton); ?>
<?php endif; ?>
<?php endforeach; ?>
  <div style="clear: both;"></div>
</div>
<div class="gdo-container<?= $field->classError(); ?>">
  <?=$field->htmlIcon()?>
  <label <?=$field->htmlForID()?>><?=$field->displayLabel()?></label>
  <input
<?php if ($field->isImageFile()) : ?>
   capture="capture"
<?php endif; ?>
   type="file"
   <?=$field->htmlID()?>
   name="<?=$field->name?>"
   class="gdo-flow-file" />
  <span id="gdo-file-input-<?=$field->name?>"></span>
  <?= $field->htmlError(); ?>
</div>
