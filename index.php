<? 
  include_once "App.php";
  $app = new App(array('core/init', 'core/orm2', 'functions'));
  
  $app->pointer = 'elements/';
  
  echo $app->get('header');

  echo $app->get('pages/'.(isset($_GET['page']) ? $_GET['page'] : 'index'));

  echo $app->get('footer');

   function recurse_copy($source, $dest) {
    // Check for symlinks
    if (is_link($source)) {
        return symlink(readlink($source), $dest);
    }

    // Simple copy for a file
    if (is_file($source)) {
        return copy($source, $dest);
    }

    // Make destination directory
    if (!is_dir($dest)) {
        mkdir($dest);
    }

    // Loop through the folder
    $dir = dir($source);
    while (false !== $entry = $dir->read()) {
        // Skip pointers
        if ($entry == '.' || $entry == '..') {
            continue;
        }

        // Deep copy directories
        recurse_copy("$source/$entry", "$dest/$entry");
    }

    // Clean up
    $dir->close();
    return true;
	}

	if(isset($_GET['compile'])) {
	  $file = $app->server_root.'dev/index.html';
	  //$current = file_get_contents($file);
	  $current = $app->htmlbuffer;
	  file_put_contents($file, $current);

	  if(!file_exists($app->server_root.'dev/assets'))
	  	mkdir($app->server_root.'dev/assets');
	  recurse_copy($app->server_root.'assets', $app->server_root.'dev/assets');

	  if(!file_exists($app->server_root.'dev/bower_components'))
	  	mkdir($app->server_root.'dev/bower_components');
	  recurse_copy($app->server_root.'bower_components', $app->server_root.'dev/bower_components');
	}
?>