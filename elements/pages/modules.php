<div class="fullwidth">
  <div class="spacer"></div>
  <?
    $module = (isset($_GET['module'])?$_GET['module']:'image');
    $class = explode('/', $module);
    $class = end($class);
  ?>
  <div class="nest">
    <div class="crow mod-row no-gutter">
      <div class="ws-3">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?=$app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-4">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-4">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-4">
        <?=$app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-9">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?=$app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-6">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-6">
        <?=$app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-8">
        <?=$app->get('modules/'.$module)?>
      </div>
      <div class="ws-4">
        <?=$app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row no-gutter">
      <div class="ws-12">
        <?=$app->get('modules/'.$module)?>
      </div>
    </div>
  </div>
</div>