<?php
use GDO\Core\Website;
use GDO\UI\GDT_Page;
use GDO\Javascript\Javascript;
use GDO\UI\GDT_IconButton;
use GDO\Language\GDO_Language;
use GDO\Javascript\Module_Javascript;
use GDO\UI\GDT_Loading;
/** @var $page GDT_Page **/
?>
<!DOCTYPE html>
<html lang="<?=GDO_Language::current()->getISO()?>">
<head>
  <?=Website::displayHead()?>
  <?=Website::displayMeta()?>
  <?=Website::displayLink()?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?=$page->renderTitle()?></title>
</head>
<body>
 
 <script>document.body.style.display = 'none';</script>
 
 <div id="gdo-jqm-page" data-role="page" class="jqm-page">

  <div id="gdo-left-panel" data-role="panel" data-position="left" data-display="overlay" class="gdo-sidebar">
    <?=$page->leftNav->addClass('noflx')->renderCell()?>
  </div>
  
  <div id="gdo-right-panel" data-role="panel" data-position="right" data-display="overlay" class="gdo-sidebar">
    <?=$page->rightNav->addClass('noflx')->renderCell()?>
  </div>

  <div data-role="toolbar" data-type="header" data-position="fixed">
   <div class="flx flx-row ce">
    <?=GDT_IconButton::make()->href('#gdo-left-panel')->icon('bars')->renderCell()?>
    <?=$page->topNav->renderCell()?>
    <?=GDT_IconButton::make()->href('#gdo-right-panel')->icon('bars')->renderCell()?>
   </div>
  </div>
  <div role="main" class="ui-content">
    <?=$page->topTabs->renderCell()?>
    <?=Website::renderTopResponse()?>
    <?=$page->html?>
  </div>
  <div data-role="toolbar" data-type="footer" data-position="fixed" data-tap-toggle="true">
    <?=$page->bottomNav->renderCell()?>
  </div>

 </div>

 <?=GDT_Loading::make()->render()?>

 <?=Javascript::displayJavascripts(Module_Javascript::instance()->cfgMinifyJS()==='concat')?>

 <script>document.body.style.display = 'block';</script>

</body>
</html>
