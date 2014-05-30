<?
	// $arg[0] 					= row (div) attributes
	// $arg[1][0] 			= column (div) attributes
	// $arg[1][1][X] 		= specific column (div) attributes
	// $arg[1][2]		 		= column (div) values
	// $arg[1][3][X] 		= specific column(div) value
?>
<div <?=$args[0]?>>
	<?
	foreach($args[1][2] as $i => $v) {
	?>
		<div <?=(isset($args[1][1][$i]) ? $args[1][1][$i] : $args[1][0])?>>
			<?=(isset($args[1][3][$i]) ? $args[1][3][$i] : $args[1][2][$i])?>
		</div>
	<?
	}
	?>
</div>