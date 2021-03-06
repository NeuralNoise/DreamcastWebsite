<?php
	// index.php
	$homeDir = "../../";
	require_once $homeDir . 'pc_directories.php';
	require_once $root . 'lookup_game.php';
	require_once $root . 'format.php';
	require_once $root . 'format_dlc.php';
	require_once $root . 'format_links.php';

	$pageTitle = "Phantasy Star Online";
	include $homeDir . "pc_header.php";

?>
<h1 align="left"><?php echo $pageTitle; ?></h1>

<table cellpadding="3" cellspacing="1" border"0">
	<tr>
		<td>
			<table cellpadding="3" cellspacing="1" border="0" width="150" bgcolor="<?php echo $tBG; ?>">
				<tr align="center" bgcolor="<?php echo $indexHead; ?>">
					<td><b>Contents</b></td>
				</tr>
				<tr align="center" bgcolor="<?php echo $indexSub; ?>">
					<td>Files</td>
				</tr>
				<tr bgcolor="<?php echo ac(); ?>">
					<td><a href="#save">Game Saves</a></td>
				</tr>
				<tr bgcolor="<?php echo ac(); ?>">
					<td><a href="#dlc">DLC</a></td>
				</tr>
				<tr bgcolor="<?php echo ac(); ?>">
					<td><a href="#shot">Screenshots</a></td>
				</tr>
				<tr align="center" bgcolor="<?php echo $indexSub; ?>">
					<td>Websites</td>
				</tr>
				<tr bgcolor="<?php echo ac(); ?>">
					<td><a href="#gweb">In-Game</a></td>
				</tr>
				<tr bgcolor="<?php echo ac(); ?>">
					<td><a href="#eweb">External</a></td>
				</tr>
				<tr bgcolor="<?php echo ac(); ?>">
					<td><a href="#serv">Server</a></td>
				</tr>
			</table>
		</td>
		<td>
			<label>
				<br>
				Phantasy Star Online allows players to meet up in lobbies
				with players from all around the world. It was one of the
				early pioneers with videogame staples such as new game plus,
				world wide multiplayer match making, and downloadable content.
				<br><br>
			</label>
		</td>
	</tr>
</table>

<hr>

<p><h3 align="left"><u><a id="save">Game Saves</a></u></h3>
	<p align="left">
		There are three different save files for this game.
		Click the name links to go to detailed memory maps for each file.</p>
	<table align="center" cellpadding="3" cellspacing="1" border="0" width="90%" bgcolor="<?php echo $tBG; ?>">
		<tr bgcolor="<?php echo $tHead; ?>">
			<th width="100px">Name</th><th width="65px">Size<br>(Blocks)</th><th>Description</th><th width="34px">Icon</th>
		</tr>

		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center"><a href="saves_file.php" style="text-decoration:none"><font color="#FF0000">Main Data</font></a></td>
			<td align="center">15</td>
			<td>Save file for the main game character.</td>
			<td align="center"><img src="<?php echo $dirIcons . "75f25c28.gif"?>"></td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center"><a href="saves_file.php" style="text-decoration:none"><font color="#FF0000">Guild Card</font></a></td>
			<td align="center">30</td>
			<td>Save file for PSO Guild Card.</td>
			<td align="center"><img src="<?php echo $dirIcons . "4f81fe65.gif"?>"></td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center"><a href="saves_photo.php" style="text-decoration:none">Screen Image</a></td>
			<td align="center">195</td>
			<td>Save file for an in-game screenshot.</td>
			<td align="center"><img src="<?php echo $dirIcons . "473ec5d4.gif"?>"></td>
		</tr>
	</table>
</p>

<hr>

<p><h3 align="left"><u><a id="dlc">Downloadable Content</a></u></h3>
	<p align="left">
		Various downloadable content was released for this
		game. Version 1 quests can be downloaded and used with Version 1
		only. Quests were downloaded in multiple parts. Most of these
		quests are Japanese only. Though other regions can play them by
		changing the language options to Japanese.
	</p>
	<table align="center" cellpadding="3" cellspacing="1" border="0" width="90%" bgcolor="<?php echo $tBG; ?>">
		<tr bgcolor="<?php echo $tHead; ?>">
			<th colspan="6">PSO Version 1</th>
		</tr>
	</table>
	<?php callDLCFunction( PHANTASY_STAR_ONLINE_V1 ); ?>


	<br><br>
	<p align="left">
		Version 2 quests were encrypted and locked to players so no
		downloads can be offered.
	</p>
	<table align="center" cellpadding="3" cellspacing="1" border="0" width="90%" bgcolor="<?php echo $tBG; ?>">
		<tr bgcolor="<?php echo $tHead; ?>">
			<th colspan="4">PSO Version 2</th>
		</tr>
		<tr bgcolor="<?php echo $tHead; ?>">
			<th width="65px">Size<br>(Blocks)</th><th width="100px">File Name</th><th>Description</th><th width="34px">Icon</th>
		</tr>

		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center">??</td>
			<td align="center">???</td>
			<td>Central Dome Fire Swirl</td>
			<td align="center"><img src="<?php echo $dirIcons . "4ff15894.gif"?>"></td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center">??</td>
			<td align="center">???</td>
			<td>Lionel's Letter</td>
			<td align="center"><img src="<?php echo $dirIcons . "4ff15894.gif"?>"></td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center">??</td>
			<td align="center">???</td>
			<td>Soul of a Blacksmith</td>
			<td align="center"><img src="<?php echo $dirIcons . "4ff15894.gif"?>"></td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center">??</td>
			<td align="center">???</td>
			<td>Soul of Steel</td>
			<td align="center"><img src="<?php echo $dirIcons . "4ff15894.gif"?>"></td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align="center">??</td>
			<td align="center">???</td>
			<td>The Retired Hunter</td>
			<td align="center"><img src="<?php echo $dirIcons . "4ff15894.gif"?>"></td>
		</tr>
	</table>
</p>

<hr>

<p><h3 align="left"><u><a id="shot">Screen Shots</a></u></h3>
	<p align="left">
		Phantasy Star Online allows users to take screen
		shots. The following will guide a user through how to do this.
		<br><br>
		<u>Supplies needed</u>:
		<br><br>
		1. A VMU with 195 free blocks.<br>
		2. An extra controller plugged into Port D, with above VMU
		plugged into Slot 2.
		<br><br>
		<table align="center" cellpadding="3" cellspacing="1" border="0" style="min-width:400px;max-width:640px;" bgcolor="<?php echo $tBG; ?>">
			<tr bgcolor="<?php echo $tHead; ?>">
				<th align="center">Shot Type</th><th align="center">Instructions</th>
			</tr>
			<tr bgcolor="<?php echo ac(); ?>">
				<td>Closeup of Screen</td>
				<td>On the controller in Port D, Hold X and press Start</td>
			</tr>
			<tr bgcolor="<?php echo ac(); ?>">
				<td>Entire Screen</td>
				<td>On the controller in Port D, Hold A and press Start</td>
			</tr>
		</table>
		<br>
		Once pressed the screen will go black and a countdown will appear
		in the top-left corner of the screen.<br><br>
		When the countdown reaches 0 your image will finish being saved
		to the VMU in Slot 2 of the controller in Port D.<br><br>
		<u>Note</u>: Taking a screen shot will <b>NOT</b> pause the game. Be
		aware of your surroundings before attempting to take a picture.
	</p>
</p>

<hr>

<?php callLinkFunction( PHANTASY_STAR_ONLINE_V1 ); ?>

<hr>

<p><h3 align="left"><u><a id="serv">Servers</a></u></h3>
	<p align="left">
		Here is the list of servers by region that Phantasy Star Online
		<b>Version 2</b> connects to.<br><br>In the case of USA and Japan, the
		game first attempts to connect to Hunter License servers to check
		that there is an active subscription.
	</p>
	<table align="center" cellpadding="3" cellspacing="1" border="0" style="min-width:450px;max-width:640px;" bgcolor="<?php echo $tBG; ?>">
		<tr bgcolor="<?php echo $tHead; ?>">
			<th align="center" colspan="2">USA (NTSC-U)</th>
		</tr>
		<tr bgcolor="<?php echo altc(); ?>">
			<td width="30%">Hunter License:</td>
			<td align="right"><code>auth01.dricas.com:443</code></td>
		</tr>
		<tr bgcolor="<?php echo altc(); ?>">
			<td>Game Server:</td>
			<td align="right"><code>game01.st-pso.games.sega.net:9200</code></td>
		</tr>
		<tr bgcolor="<?php echo $tHead; ?>">
			<th align="center" colspan="2">Europe (PAL)</th>
		</tr>
		<tr bgcolor="<?php echo altc(); ?>">
			<td>Hunter License:</td>
			<td align="right"><code>None</code></td>
		</tr>
		<tr bgcolor="<?php echo altc(); ?>">
			<td>Game Server:</td>
			<td align="right"><code>pso.dream-key.com:9200</code></td>
		</tr>
		<tr bgcolor="<?php echo $tHead; ?>">
			<th align="center" colspan="2">Japan (NTSC-J)</th>
		</tr>
		<tr bgcolor="<?php echo altc(); ?>">
			<td>Hunter License:</td>
			<td align="right"><code>auth01.dricas.ne.jp:443</code></td>
		</tr>
		<tr bgcolor="<?php echo altc(); ?>">
			<td>Game Server:</td>
			<td align="right"><code>pso01.dricas.ne.jp:9200</code></td>
		</tr>
	</table>
	<br>
	<br>
	<p align="left">
		Here is the list of ports that Phantasy Star Online
		<b>Version 2</b> uses.<br><br>The odd port numbers when
		read in little endian order rather than network byte order
		read as 4000, 4001, 4002, 4003. The resulting ports are
		most likely a mistake.
	</p>
	<!--
		Special thanks to:
		http://arda.kisafilm.org/fish/members/mterlouw/pmapserv.htm
		for the port information
	-->
	<table align="center" cellpadding="3" cellspacing="1" border="0" style="min-width:450px;max-width:640px;" bgcolor="<?php echo $tBG; ?>">
		<tr bgcolor="<?php echo $tHead; ?>">
			<th>Protocol</th>
			<th>Ports</th>
			<th>Usage</th>
		</tr>
		<tr align="center" bgcolor="<?php echo altc(); ?>">
			<td>UDP</td>
			<td><code>40975</code></td>
			<td>Unknown</td>
		</tr>
		<tr align="center" bgcolor="<?php echo altc(); ?>">
			<td>UDP</td>
			<td><code>41231</code></td>
			<td>Unknown</td>
		</tr>
		<tr align="center" bgcolor="<?php echo altc(); ?>">
			<td>UDP</td>
			<td><code>41487</code></td>
			<td>Unknown</td>
		</tr>
		<tr align="center" bgcolor="<?php echo altc(); ?>">
			<td>UDP</td>
			<td><code>41743</code></td>
			<td>Unknown</td>
		</tr>
	</table>
</p>

<?php
	$from = getcwd() . "/index.php";
	include $homeDir . "pc_footer.php";
?>
