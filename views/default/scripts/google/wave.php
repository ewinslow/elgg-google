<?php 
global $google_wave;

if (isset($google_wave) && $google_wave == TRUE) {
	return;
} 

$google_wave = TRUE;
?>
<script type="text/javascript">
	google.load('wave', '1');
</script>
<script type="text/javascript">
$(function() {
	$('[data-waveid]').each(function() {
		var wavePanel = new google.wave.WavePanel({
			target: this
		});

		wavePanel.loadWave($(this).attr('data-waveid'));
	});
});
</script>