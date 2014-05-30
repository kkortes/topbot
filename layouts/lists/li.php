<?
	// $arg[0] 					= ul attributes
	// $arg[1][0] 			= li attributes
	// $arg[1][1][X] 		= specific li attributes
	// $arg[1][2]		 		= li values
	// $arg[1][3][X] 		= specific li value
?>
<ul <?=$args[0]?>>
	<? foreach($args[1][2] as $i => $v) { ?>
		<li <?=(isset($args[1][1][$i]) ? $args[1][1][$i] : (($args[1][0]) ? $args[1][0] : ''))?>>
			<?=(isset($args[1][3][$i]) ? $args[1][3][$i] : $args[1][2][$i])?>
		</li>
	<? } ?>
</ul>