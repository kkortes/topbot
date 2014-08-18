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

  $sobject = (new MysqlObject('nano_user'))->select()->offset(1)->query(true);
  echo $sobject->superadmin->images->{'34690.png'}->test_relation->title = 'Hej Kompis';
  
  $sobject->save();

  
?>
</div>