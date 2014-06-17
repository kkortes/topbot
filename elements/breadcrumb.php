<ul class="list-inline" style="display:inline-block;margin:0;">
  <li><strong><?=__('Pages', '')?></strong></li>
  <?
  $glob = glob(__DIR__.'/pages/*');
  foreach($glob as $node) {
    $page = explode('/',$node);
    $page = end($page);
    $node = $page;
    $page = explode('.',$page);

    if(isset($page[1])) {
      if($page[0] == 'modules') continue;
      if($page[0] == 'crow') continue;
    ?>
      <li><a href="<?=$app->url?><?=$page[0]?>"><?=$page[0]?></a></li>
    <? 
    }
  }
  ?>

  <li><strong><?=__('Modules', '')?></strong></li>
  <?
  $glob = glob(__DIR__.'/modules/*');
  foreach($glob as $node) {
    $page = explode('/',$node);
    $page = end($page);
    $node = $page;
    $page = explode('.',$page);

    if(isset($page[1])) {
    ?>
      <li><a href="<?=$app->url?>modules/module/<?=$page[0]?>"><?=$page[0]?></a></li>
    <? 
    }
  }
  ?>
</ul>