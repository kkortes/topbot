<div class="fullwidth">
  <div class="spacer"></div>
  <?php
    $module = (isset($_GET['module'])?$_GET['module']:'image');
    $class = explode('/', $module);
    $class = end($class);
  ?>
  <div class="nest">
    <div class="crow mod-row">
      <div class="ws-3">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?php echo $app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-4">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-4">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-4">
        <?php echo $app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-9">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-3">
        <?php echo $app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-6">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-6">
        <?php echo $app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-8">
        <?php echo $app->get('modules/'.$module)?>
      </div>
      <div class="ws-4">
        <?php echo $app->get('modules/'.$module)?>
      </div>
    </div>
    <div class="crow mod-row">
      <div class="ws-12">
        <?php echo $app->get('modules/'.$module)?>
      </div>
    </div>
  </div>
</div>