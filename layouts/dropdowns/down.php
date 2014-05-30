<div <?=$args[0]?>>
	<?=$args[1]?>
	<div <?=$args[2]?>>
		<div <?=$args[3]?>>
			<?
				$allstyles = Nostyle::getAll();
				$layout = 'layouts/lists/li';
				echo render('../'.$layout, array('args' => $allstyles['lists']['unstyled']));
			?>
			<?=$args[4]?>
		</div>
	</div>
	<?=$args[5]?>
</div>