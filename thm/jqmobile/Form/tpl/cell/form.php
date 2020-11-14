<?php /** @var $form \GDO\Form\GDT_Form **/
$firstEditableField = null;
?>
<!-- Begin Form -->
<div class="gdo-form <?=$form->htmlClassSlim()?>">
  <div class="gdo-form-inner">
<?php if ($form->hasTitle() || $form->info) : ?>
    <div class="ui-body ui-body-a ui-corner-all">
<?php if ($form->hasTitle()) : ?>
      <h3><?=$form->renderTitle()?></h3>
<?php endif; ?>
<?php if ($form->info): ?>
      <p><?=$form->info?></p>
<?php endif; ?>
    </div>
<?php endif; ?>
    <form
     data-ajax="false"
     id="gdo_<?=$form->name;?>"
	 action="<?=$form->action?>"
	 method="<?=$form->method?>"
	 enctype="<?=$form->encoding?>">
<?php if ($form->method === 'GET') : ?>
<?=$form->htmlHidden()?>
<?php endif; ?>
<?php foreach ($form->getFields() as $field) : ?>
          <?php if ($field->editable) $firstEditableField = $firstEditableField ? $firstEditableField : $field; ?>
          <?=$field->renderForm()?>
<?php endforeach; ?>
    </form>
  </div>
</div>
<script>
window.GDO_FIRST_EDITABLE_FIELD = window.GDO_FIRST_EDITABLE_FIELD||'<?=$firstEditableField?$firstEditableField->id():null?>';
</script>
<!-- End of Form -->
