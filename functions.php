<?
	// Download function target a ?download=directory/file
	// Notice! This function is unsafe to leave at it is.
  // Make restrictions for which files are allowed to be downloaded.
	if(isset($_GET['download']) && $_GET['download']) {
    $filename = explode('/', $_GET['download']);
    $filename = end($filename);

    $url = $app->server_root.$_GET['download'];
    if(is_file($url)) {
      header("Content-Type: application/octet-stream");
      header("Content-Transfer-Encoding: Binary");
      header("Content-disposition: attachment; filename=\"".$filename."\"");
      readfile($url);
      exit;
    }
  }

  // Placeholder for eventual translations
  if(!function_exists('__')) {
    function __($value = false) {
      return $value;
    }
  }
?>