<div class="container">
  <div class="row mod-row">
    <div class="col-sm-12">
      <?=r('breadcrumb')?>
    </div>
  </div>
</div>
<?
  $module = (isset($_GET['module'])?$_GET['module']:'info-module');
  $class = explode('/', $module);
  $class = end($class);
?>
<div class="container">
  <div class="row mod-row">
    <div class="col-sm-3">
      <span class="label label-info pull-right">25 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-3">
      <span class="label label-info pull-right">25 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-3">
      <span class="label label-info pull-right">25 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-3">
      <span class="label label-info pull-right">25 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
  </div>
  <div class="row mod-row">
    <div class="col-sm-4">
      <span class="label label-info pull-right">33 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-4">
      <span class="label label-info pull-right">33 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-4">
      <span class="label label-info pull-right">33 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
  </div>
  <div class="row mod-row">
    <div class="col-sm-9">
      <span class="label label-info pull-right">75 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-3">
      <span class="label label-info pull-right">25 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
  </div>
  <div class="row mod-row">
    <div class="col-sm-6">
      <span class="label label-info pull-right">50 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-6">
      <span class="label label-info pull-right">50 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
  </div>
  <div class="row mod-row">
    <div class="col-sm-8">
      <span class="label label-info pull-right">66 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
    <div class="col-sm-4">
      <span class="label label-info pull-right">33 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
  </div>
  <div class="row mod-row">
    <div class="col-sm-12">
      <span class="label label-info pull-right">100 %</span>
      <div class="mod mod-<?=$class?>">
        <?=r('modules/'.$module)?>
      </div>
    </div>
  </div>
</div>