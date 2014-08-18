<div class="container">
<?
  // $sobject = new SObject($app->mysql->prefix.'user', 
  //   array(
  //     'id' => array(
  //       1,2
  //     ),
  //     'username' => array(
  //       'superadmin', 'admin'
  //     )
  //   )
  // );
  if(isset($_POST['table'])) {
    $user = (new SObject($_POST['table']))->select(array('id' => $_POST['id']))->fetch();
    unset($_POST['table']);
    unset($_POST['id']);
    foreach($_POST as $key => $value) {

      $user->{$key} = $value;
    }
    $user->save();
  }

  if(isset($_GET['table'])) {
    $relation = (new SObject($_GET['table']))->select(array('typeid' => $_GET['typeid']))->fetch();
    $object = $relation->belongsto;
    $id = $relation->belongstoid;
    $object = (new SObject('nano_'.$object))->select(array('id' => $id))->fetch();
    $relations = unserialize($object->cows_relid);
    
    $newlations = array();
    foreach($relations as $key => $rel) {
      if($rel != $relation->id) {
        $newlations[] = $rel;
      }
    }
    $object->cows_relid = serialize($newlations);
    $object->save();
    $relation->delete();
  }

  $sobject = (new SObject('nano_user'))->select()->fetch(true);
  

  foreach($sobject as $key => $value) {
    ?>
    <h2><?=ucfirst($key)?></h2>
    <form method="post" action="">
      <div class="crow no-gutter up" style="text-align:left;">
      <?
      $id = $value->id;
      $images = $value->images;
      $cows = $value->cows;
      ?>

      <div class="ws-9">
      <?
      foreach($value as $key => $val) {
        if($key == 'id') continue;
        if($key == 'password') continue;
        if($key == 'images_relid') continue;
        if($key == 'images') continue;
        if($key == 'cows_relid') continue;
        if($key == 'cows') continue;
      ?>
      <div class="ws-12">
        <div class="input">
          <label for=""><?=ucfirst($key)?></label>
          <input type="text" name="<?=$key?>" value="<?=ucfirst($val)?>" />
        </div>
      </div>
      <?
      }
      ?>
      </div>
      <div class="ws-3 down">
      <?
      if($images) {
        ?>
        Image
        <div class="spacer half"></div>
        <div class="tile">
          <div class="image">
            <img src="<?=$images->src?>" />
          </div>
        </div>
        <?
      }
      if($cows) {
        if(isset($cows->id))
          $cows = array($cows);
        ?>
        Cows
        <div class="spacer half"></div>
        <?
        foreach($cows as $cow) {
          ?>
          <div class="clearfix">
            <div class="pull-right">
              <a href="?table=nano_relation&typeid=<?=$cow->id?>" class="button text text-red">Delete</a>
            </div>
            <div class="pull-left">
              <?=$cow->name?>
            </div>
          </div>
          <?
        }
      }
      ?>
      
        <div class="input">
          <input type="hidden" name="table" value="nano_user" />
          <input type="hidden" name="id" value="<?=$id?>" />
          <input type="submit" class="fill-cyan text-white" value="Submit" />
        </div>
      </div>
      </div>
    </form>
    <div class="spacer"></div>
    <?
  }

  
?>
</div>