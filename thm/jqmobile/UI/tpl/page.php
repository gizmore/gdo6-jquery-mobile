<?php
use GDO\Core\Website;
use GDO\UI\GDT_Page;
use GDO\Util\Javascript;
use GDO\Core\Module_Core;
use GDO\UI\GDT_Icon;
use GDO\UI\GDT_IconButton;
/** @var $page GDT_Page **/
?>
<!DOCTYPE html>
<html>
<head>
  <?=Website::displayHead()?>
  <?=Website::displayMeta()?>
  <?=Website::displayLink()?>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="robots" content="index, follow" />
  <title><?=html($page->title)?></title>
</head>
<body>
  
 <div id="gdo-jqm-page" data-role="page" class="jqm-page">

  <div id="gdo-left-panel" data-role="panel" data-position="left" data-display="overlay">
    <?=$page->leftNav->addClass('noflx')->renderCell()?>
  </div>
  
  <div id="gdo-right-panel" data-role="panel" data-position="right" data-display="overlay">
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

 <?=Javascript::displayJavascripts(Module_Core::instance()->cfgMinifyJS()!=='no')?>

</body>
</html>
