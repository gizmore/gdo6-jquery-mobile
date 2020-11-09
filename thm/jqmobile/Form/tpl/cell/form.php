<?php /** @var $form \GDO\Form\GDT_Form **/
$firstEditableField = null;
?>
<!-- Begin Form -->
<div class="gdo-form <?=$form->htmlClassSlim()?>">
  <div class="gdo-form-inner">
    <div class="ui-body ui-body-a ui-corner-all">
      <h3><?=$form->title?></h3>
      <p><?=$form->info?></p>
    </div>
    <form
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
<script type="text/javascript">
window.GDO_FIRST_EDITABLE_FIELD = window.GDO_FIRST_EDITABLE_FIELD||'<?=$firstEditableField?$firstEditableField->id():null?>';
</script>
<!-- End of Form -->
