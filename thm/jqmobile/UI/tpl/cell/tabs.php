<?php
/** @var $field \GDO\UI\GDT_Tabs **/
/** @var $cell boolean **/
?>
<div class="gdo-tabs" data-role="tabs">
  <div data-role="navbar">
    <ul>
<?php foreach ($field->getTabs() as $tab) : ?>
      <li><a href="#<?=$tab->id()?>"><?=$tab->displayLabel()?></a></li>
<?php endforeach; ?>
    </ul>
  </div>
<?php foreach ($field->getTabs() as $tab) :
  echo $cell ? $tab->renderCell() : $tab->renderForm();
endforeach; ?>
</div>
