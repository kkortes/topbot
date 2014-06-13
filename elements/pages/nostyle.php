<div class="container">
  <div class="crow">
    <div class="ws-12">
      <?=$app->get('breadcrumb')?>
    </div>
  </div>
</div>
<?
	include "layouts/configuration.php";

	$allstyles = Nostyle::getAll();
?>
<div class="crow no-gutter">
	<?

		$layouts = glob('layouts/*/*');

		foreach($layouts as $layout) {
			$layout = explode('.', $layout);
			$layout = $layout[0];
			
			echo '<div class="crow ws-12 fly up">';

			$args = array();
			// $args[0] = '';
			// $args[1][0] = '';
			// $args[1][1] = '';
			// $args[1][2] = array(1,2,3,4,5);
			// $args[1][3] = '';

			$type = explode('/', $layout);
			$type = $type[1];

			if(isset($allstyles[$type])) {
				$i = 1;
				foreach($allstyles[$type] as $key => $conf) {
					echo '<div>';
					$args = array_replace($args, $conf);
					$args[-1] = $key;
					echo '<h2>'.str_replace('layouts/', '', $layout).' <span style="font-size:50%;">- '.$key.'</span></h2><hr />';
					echo $app->get('../'.$layout, array('args' => $args));
					echo '</div>';
				}
				$i++;
			}

			$args = array();
			echo '</div>';
		}
	?>
</div>
<?
	var_dump($allstyles);
?>