<?
	$array = array(
		1,2,3,4,5
	);
?>
<div class="slider">
	<div class="stripe" style="width:<?=count($array)*100?>%;">
		<div class="crow no-gutter fly">
			<?
			foreach($array as $i) {
				?>
					<div>
						<div class="text-center">
							<?=$i?>
						</div>
					</div>
				<?
			}
			?>
		</div>
	</div>
</div>