<?php /** @var $field \GDO\UI\GDT_Message **/ ?>
<div class="ui-field-contain gdt-container<?=$field->classError()?>">
  <label <?=$field->htmlForID()?>><?=$field->htmlIcon()?><?=$field->displayLabel()?></label>
<?php if ($field->classEditor() === 'wysiwyg') : ?>
  <div style="height: 48px;"></div>
<?php endif; ?>
  <textarea
   <?=$field->htmlID()?>
   class="<?=$field->classEditor()?>"
   <?=$field->htmlFormName()?>
   rows="2"
   <?=$field->htmlRequired()?>
   <?=$field->htmlDisabled()?>><?=$field->display()?></textarea>
  <?=$field->htmlError()?>
</div>
