<div class="row">
  <div class="col-sm-12">
      
    <ul class="list-inline">
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
          <li><a href="<?=path()?><?=$page[0]?>"><?=$page[0]?></a></li>
        <? 
        }
      }
      ?>
    </ul>
    
    <ul class="list-inline">
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
          <li><a href="<?=path()?>modules/module/<?=$page[0]?>"><?=$page[0]?></a></li>
        <? 
        }
      }
      ?>
    </ul>
    
  </div>
</div>