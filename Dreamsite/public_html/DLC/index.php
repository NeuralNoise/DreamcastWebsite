<?php
	// DLC/index.php
	$homeDir = "../";
	require_once 'dlc_directories.php';
	require_once $homeDir . 'lookup_game.php';
	require_once $homeDir . 'format.php';
	require_once $homeDir . 'format_dlc.php';

	$pageTitle = "Downloadable Content";
	include $homeDir . 'dc_header.php';
?>

<h3 align="left"><u><?php echo $pageTitle; ?></u></h3>
<p align="left">
	The following are games with official DLC. Click to see files available.

	<table align="center" cellpadding="3" cellspacing="1" border="0" style="min-width:300px;max-width:540px;" bgcolor="<?php echo $tBG; ?>">
		<tr>
			<th bgcolor="<?php echo $tHead; ?>">Game</th>
		</tr>

		<?php
			printDLCEntry( PHANTASY_STAR_ONLINE_V1 );
			printDLCEntry( SONIC_ADVENTURE );
			printDLCEntry( SONIC_ADVENTURE_2 );
		?>

	</table>
</p>
<br>
<br>

<?php
	$from = getcwd() . "/index.php";
	include $homeDir . 'dc_footer.php';
?>