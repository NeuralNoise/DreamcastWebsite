<?php
//dc_header.php
?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">

	<html>

		<head>
			<title><?php echo $pageTitle; ?></title>
		</head>

		<body link="#0022EE" vlink="#0022EE" alink="red" text="black" bgcolor="gray" background='<?php echo $dirImages . $dcBGimg; ?>'>
			<EMBED type=application/x-dreamcast-lcdticker
				text="Dream On"
				behavior=alternate
				font=24
				loop=10
				hidden=true>
			<!--
			<EMBED type=application/x-dreamcast-lcdimg src="booma.LCD" fast=true>
			-->
			<font face="Helvetica">
				<table cellpadding="2" cellspacing="1" border="0" width="500" align="center" bgcolor="#EEEEEE">

					<!-- Main Title Image -->
					<tr bgcolor="<?php echo $tHead; ?>">
						<th align="center"><img src="<?php echo $dirImages; ?>title_dc.gif" alt="" align="center" width="500" height="50"></th>
					</tr>

					<!-- Body -->
					<tr background="<?php echo $dirImages; ?>tile2.gif"><td align="center">

						<table cellpadding="2" cellspacing="0" border"0" width="100%">
							<tr>
								<!-- Left Directory Box -->
								<td style="padding:0px;" valign="top" width="120" height="1">
									<table cellpadding="3" cellspacing="1" border="0" width="120" height="100%" bgcolor="<?php echo $tBG; ?>">
										<tr align="center" height="20px" bgcolor="<?php echo $indexHead; ?>">
											<td><b>Contents</b></td>
										</tr>
										<tr align="center" height="20px" bgcolor="<?php echo $indexSub; ?>">
											<td>Files</td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>index.php">Upload</a></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>browse.php">Browse</a></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>DLC/index.php">DLC</a></td>
										</tr>
										<tr align="center" height="20px" bgcolor="<?php echo $indexSub; ?>">
											<td>Other</td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>links/index.php">DC Links</a></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>PC/index.php">PC Site</a></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>about.php">About</a></td>
										</tr>
										<?php // The following row is a buffer ?>
										<tr bgcolor="<?php echo $indexSub; ?>">
											<td></td>
										</tr>
									</table>
								</td>
								<?php resetAC(); ?>
								<!-- Right Side Body Content -->
								<td>
