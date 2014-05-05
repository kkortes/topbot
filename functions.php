<?
	// Download function target a ?download=directory/file
	// Notice! This function is unsafe to leave at it is.
  // Make restrictions for which files are allowed to be downloaded.
	if(isset($_GET['download']) && $_GET['download']) {
    $download = explode('/', $_GET['download']);
    $download = end($download);
    $url = dirname(__FILE__).'/'.$_GET['download'];
    if(is_file($url)) {
      header("Content-Type: application/octet-stream");
      header("Content-Transfer-Encoding: Binary");
      header("Content-disposition: attachment; filename=\"".$download."\""); 
      readfile($url);
      exit;
    }
  }
  if(!function_exists('_epr') && !function_exists('_printer')) {
	  function _epr(/*polymorphic*/) {
	    echo _printer(func_get_args());
	  }
	  function _printer($args) {
	    global $_prcounter;
	    $_prcounter += 1;

	    $output = '<div style="background:black;color:#fff;font-weight:bold;padding:10px;">';
	    $output .= '>START [ '.$_prcounter.' ] _pr> <br />';

	    if($args) :
	      $i = 1;
	        foreach($args as $arg) :
	        	$type = '';
	        	switch($arg) {
	        		case is_object($arg): $type = 'object'; break;
	        		case is_array($arg): 	$type = 'array'; break;
	        		case is_numeric($arg):$type = 'integer'; break;
	        		case is_string($arg): $type = 'string'; break;
	        	}
	        	$output .= "[ $i ~ $type ] ";
	          if($arg) {
	            if($type == 'array' || $type = 'object') {
	              $output .= '<pre>';
	              $output .= print_r($arg, true);
	              $output .= '</pre>';
	            }else{
	              $output .= $arg;
	            }
	            $output .= '<br />';
	          }else{
	           $output .= '- Parameter '.$i.' was empty <br />';
	          }
	         $i++;
	        endforeach;
	      else: $output .= 'Function call was empty <br />'; endif;

	    $output .= '>END _pr>';
	    $output .= '</div>';

	    return $output;
	  }
	}

  // Element renderer (without unique scope)
  if(!function_exists('r')) {
    function r($render) {
      include "elements/".$render.".php";
    }
  }

  // Element renderer (with unique scope)
  if(!function_exists('render')) {
    function render($path, $values = array()) { 
      /* Pointer for the elements directory for this system */
      $basedir = dirname(__FILE__) . "/elements";
      
      /* Pointer for the elements directory for core */
      $coredir = dirname(__FILE__) . "/elements";
      
      /* Get information about the path given */
      $pathparts = pathinfo($path);
      
      /* Put together the file to include */
      $elementpath = $basedir . '/' . $pathparts['dirname'] . '/' . $pathparts['basename'] . '.php';

      /* If element wasnt found in theme elementdirectory, try core element directory */
      if(!file_exists($elementpath)) {
        $elementpath = $coredir . '/' . $pathparts['dirname'] . '/' . $pathparts['basename'] . '.php';
      }

      if(file_exists($elementpath)) {
        /* Open up a new scope for our element */
        ob_start();

          extract($values);
          include $elementpath;

        $output = ob_get_clean();
        return $output;
      }else{
        throw new Exception('Element does not exists');
      }
    }
  }

  // Replace all path() calls for what your framework/CMS uses or simply modify this function. Defaults to Wordpress.
  if(!function_exists('path')) {
    function path() {
      if(function_exists('get_bloginfo'))
        return get_bloginfo('template_url');
      else
        return '';
    }
  }

  // Placeholder for eventual translations
  if(!function_exists('__')) {
    function __($value = false) {
      return $value;
    }
  }

  // A ul/li list renderer for the search function
  if(!function_exists('renderList')) {
    function renderList($pagetree, $render = '') {
      foreach($pagetree as $node => $path) {
        $file = $path.$node;
        if(is_array($path)) {
          $render .= '<li class="directory" rel="'.str_replace('.','', $node).'">'.$node.' <span>+</span></li><ul>';
          $render = renderList($path, $render).'</ul>';
        }else{
          $render .= '<li rel="'.str_replace('.','', $node).'">'.$path.'</li>';
        }
      }
      return $render;
    }
  }

  // Recursive function to build an array with filedata
  if(!function_exists('search')) {
    function search($search, $pagetree = array(), $parent = false) {
      $glob = glob($search);

      if($glob) {
        foreach($glob as $node) {
          $nodename = str_replace(str_replace('*', '', $search), '', $node);     
          if(is_dir($node)) {
            if($parent)
              $pagetree[$parent][$nodename] = search($node.'/*', array(), false);
            else
              $pagetree = search($node.'/*', $pagetree, $nodename);
          }else{
            if($parent)
              $pagetree[$parent][$nodename] = $nodename;
            else
              $pagetree[$nodename] = $nodename;
          }
        }
      }else{
        $nodename = explode('/', str_replace('/*', '', $search));
        $nodename = end($nodename);
        $pagetree[$nodename] = '<li class="directory">'.$nodename.'</li>';
      }
      return $pagetree;
    }
  }
?>