<div class="navigation">
  <ul class="inline">
    <?php
    $glob = glob(__DIR__.'/../pages/*');
    foreach($glob as $node) {
      $page = explode('/',$node);
      $page = end($page);
      $node = $page;
      $page = explode('.',$page);

      if(isset($page[1])) {
        if($page[0] == 'modules') continue;
        if($page[0] == 'index') continue;

        $class = '';
        if(isset($_GET['page']) && $page[0] == $_GET['page']) {
          $class = 'active';
        }
      ?>
        <li><a href="<?php echo $app->url?><?php echo $page[0]?>" class="<?php echo $class?> tab-link"><?php echo $page[0]?></a></li>
      <?php
      }
    }
    ?>
  
    <?php
    $glob = glob(__DIR__.'/../modules/*');
    foreach($glob as $node) {
      $page = explode('/',$node);
      $page = end($page);
      $node = $page;
      $page = explode('.',$page);

      if(isset($page[1])) {
        $class = '';
        if(isset($_GET['page']) && $_GET['page'] == 'modules') {
          $class = 'active';
        }
      ?>
        <li><a href="<?php echo $app->url?>modules/module/<?php echo $page[0]?>" class="<?php echo $class?> tab-link"><?php echo $page[0]?></a></li>
      <?php
      }
    }
    ?>
  </ul>
</div>