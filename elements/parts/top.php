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
              Topbot theme by <a href="http://twitter.com/kortekim" target="_blank">@kortekim</a>
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