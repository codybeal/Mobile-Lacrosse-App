<!DOCTYPE HTML>
<html>
<head>
<title>Game View</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link href="gvStyle.css" type="text/css" rel="stylesheet" />
<link href="fonts.css" type="text/css" rel="stylesheet" />
<<<<<<< HEAD
<<<<<<< HEAD
<link rel="icon" href="favicon.ico" type="image/x-icon"> 
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
=======
>>>>>>> 34003dea4a0074a16ead9e5734a9138dfddfb638
=======
>>>>>>> 34003dea4a0074a16ead9e5734a9138dfddfb638
</head>
<body class="body">
<?php 

include('config.php');

$sql = "SELECT * FROM current_game_data";

$result = mysql_query($sql);


	if($row=mysql_fetch_array($result))
	{
		$shots_h=$row['home_shots'];
		$saves_h=$row['home_saves'];
		$gbs_h=$row['home_groundballs'];
		$faces_h=$row['home_face_won'];
		$clears_h=$row['home clears_made'];
		$ppopp_h=$row['home_power_play_opps'];
		$penalty_h=$row['home_penalties'];
	
		$shots_v=$row['vis_shots'];
		$saves_v=$row['vis_saves'];
		$gbs_v=$row['vis_groundballs'];
		$faces_v=$row['vis_face_won'];
		$clears_v=$row['vis_clears_made'];
		$ppopp_v=$row['vis_power_play_opps'];
		$penalty_v=$row['vis_penalties'];
	
		$home_id=$row['home_id'];
		$vis_id=$row['vis_id'];
	
		$period=$row['period'];
		$clock=$row['clock'];

		$home_score=$row['home_score'];
		$vis_score=$row['vis_score'];
	}

?>
	<div id="header">
		<img src="Images/headerLaXDone.png">
	</div>
	<div id="container">
		<div id="content" class="collegeFont">
			<div class="timerBack">
				<table class="timerTable">
					<tr>
						<td class="timeTopLR"><?=$home_id?>
						</td>
						<td rowspan=2 class="timeTopMid scorePadM"><?=$clock?>
						</td>
						<td class="timeTopLR scorePadR"><?=$vis_id?>
						</td>
					</tr>
					<tr>
						<td rowspan=2 class="timeBottomLR"><?=$home_score?>
						</td>
						<td rowspan=2 class="timeBottomLR scorePadR"><?=$vis_score?>
						</td>
					</tr>
					<tr>
						<td class="timeBottomMid scorePadM">PERIOD <?=$period?>
						</td>
					</tr>
				</table>
			</div>
			<div>
				<img src="Images/TeamStatBackDone.png">
			</div>
			<div class="allStatsBack">
				<table class="statTable">
					<tr>
						<td class="tableLeft"><?=$shots_h?>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><?=$shots_v?>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><?=$saves_h?>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><?=$saves_v?>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><?=$gbs_h?>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><?=$gbs_v?>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><?=$faces_h?>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><?=$faces_v?>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><?=$clears_h?>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><?=$clears_v?>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><?=$ppopp_h?>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><?=$ppopp_v?>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><?=$penalty_h?>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><?=$penalty_v?>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div id="footer" >
			<a href='players.html'><img src="Images/PlayerButtonDone.png" class="footerPad, floatLeft" ></a>
			<a href='index.html'><img src="Images/BackButtonDone.png" class="footerPad, floatRight"></a>
		</div>
	</div>
</body>
<<<<<<< HEAD
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> 34003dea4a0074a16ead9e5734a9138dfddfb638
=======
</html>
>>>>>>> 34003dea4a0074a16ead9e5734a9138dfddfb638
