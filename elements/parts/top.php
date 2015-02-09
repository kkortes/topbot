<div class="top">
  <div class="nest crow no-gutter">
    <div class="ws-6">
    	<div class="clearfix">
        <?
        $crowurl = $app->url.'crow';
        if($app->env == 'live') {
          $crowurl = 'http://getcrow.eu';
        }
        ?>
        <a href="<?=$app->url?>" class="link">{ <?=__('top')?> }</a>
      </div>
    </div>
    <div class="ws-6" style="text-align:right;">
      Built with <a href="<?=$crowurl?>" class="icon icon-crow text-black"></a> and <a href="http://getleaf.com" target="_blank" class="icon icon-leaf text-green"></a>
    </div>
  </div>
  <div class="crow">
    <div class="ws-12">
      <?=$app->get('parts/nav')?>
    </div>
  </div>
</div>