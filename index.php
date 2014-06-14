<? 
  include_once "core/App.php";
  $app = new App(array('core/init', 'functions'), __DIR__.'/');
  
  $app->pointer = 'elements/';
  
  echo $app->get('header');

  echo $app->get('pages/'.(isset($_GET['page']) ? $_GET['page'] : 'index'));

  echo $app->get('footer');
?>