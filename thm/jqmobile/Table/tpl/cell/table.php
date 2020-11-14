<?php use GDO\Form\GDT_Form;
/** @var $field \GDO\Table\GDT_Table **/
/** @var $form GDT_Form **/
$headers = $field->getHeaderFields();
if ($pagemenu = $field->getPageMenu())
{
	echo $pagemenu->renderCell();
}
$result = $field->getResult();
?>
<form method="get" action="<?= $field->href; ?>" class="b">
<?=GDT_Form::hiddenMoMe()?>
<div class="gdo-table">
  <?php if ($field->hasTitle()) : ?>
  <h3><?=$field->renderTitle()?></h3>
  <?php endif; ?>
  <table id="gwfdt-<?=$field->name?>" class="gdo-table" data-role="table" data-mode="">
	<thead>
	  <tr>
	  <?php foreach($headers as $gdoType) : ?>
	  <?php if (!$gdoType->hidden) : ?>
		<th class="<?=$gdoType->htmlClass()?>">
		  <label>
			<?= $gdoType->renderHeader(); ?>
			<?php if ($field->ordered) : ?>
			<?= $gdoType->displayTableOrder($field); ?>
			<?php endif; ?>
		  </label>
		  <?php if ($field->filtered) : ?>
			<?= $gdoType->renderFilter($field->headers->name); ?>
		  <?php endif; ?>
		</th>
		<?php endif; ?>
	  <?php endforeach; ?>
	  </tr>
	</thead>
	<tbody>
	<?php while ($gdo = $result->fetchAs($field->fetchAs)) : ?>
	<tr data-gdo-id="<?= $gdo->getID()?>">
	  <?php foreach($headers as $gdoType) : ?>
	  <?php if (!$gdoType->hidden) : ?> 
	  <?php $gdoType->gdo($gdo); ?>
		<td class="<?=$gdoType->htmlClass()?>"><?=$gdoType->renderCell()?></td>
	  <?php endif; ?>
	  <?php endforeach; ?>
	</tr>
	<?php endwhile; ?>
	</tbody>
<?php if ($field->footer) : ?>
	<tfoot><?=$field->footer?></tfoot>
<?php endif; ?>
  </table>
  <input type="submit" class="n" />
</div>
<?php if ($actions = $field->getActions()) : ?>
  <?=$actions->renderCell()?>
<?php endif; ?>
</form>
<!-- END of GDT_Table -->
