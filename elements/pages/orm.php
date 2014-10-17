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

  $sobject = (new SObject('nano_user'))->select()->offset(1)->fetch(true);
  
  $sobject->superadmin->images->{'27513.png'}->file_type = 'asd';
  
  var_dump($sobject);

  
?>
</div>