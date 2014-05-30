<?
	// $arg[0] 					= image div attributes
	// $arg[1]		 			= :before image div
	// $arg[2]		 			= image attributes
	// $arg[3]		 			= :after image div
	// $arg[4]		 			= :inbeetwen image and text divs
	// $arg[5]		 			= text div attributes
	// $arg[6]		 			= text value
?>
<div <?=$args[0]?>>
	<?=$args[1]?>
	<div <?=$args[2]?>>
		<?=$args[3]?>
		<img <?=$args[4]?> />
		<?=$args[5]?>
	</div>
	<?=$args[6]?>
	<div <?=$args[7]?>>
		<?=$args[8]?>
	</div>
	<?=$args[9]?>
</div>