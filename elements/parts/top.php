<div class="top">
  <div class="fullwidth">
    <div class="nest">
      <div class="crow">
        <div class="ws-12">
        	<div class="clearfix">
            <?
            $crowurl = $app->url.'crow';
            if($app->env == 'live') {
              $crowurl = 'http://getcrow.eu';
            }
            ?>
	        	<div class="pull-right">
              Built with <a href="<?=$crowurl?>" class="icon icon-crow text-black"></a> and <a href="http://getleaf.com" target="_blank" class="icon icon-leaf text-green"></a>
            </div>

	          <a href="<?=$app->url?>" class="link">{ <?=__('top')?> }</a>
          </div>
        </div>
      </div>
      <div class="crow">
        <div class="ws-12">
          <?=$app->get('parts/nav')?>
        </div>
      </div>
    </div>
  </div>
</div>