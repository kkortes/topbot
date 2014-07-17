<div class="top">
  <div class="fullwidth">
    <div class="container">
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
              Based on <a href="<?=$crowurl?>" class="icon icon-crow text-black"></a> and <a href="http://getleaf.com/" class="icon icon-leaf text-green" target="_blank"></a>
            </div>

	          <a href="<?=$app->url?>" class="link">{ <?=__('top')?> }</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="top">
  <div class="container">
    <div class="crow">
      <div class="ws-12">
        <?=$app->get('parts/nav')?>
      </div>
    </div>
  </div>
</div>