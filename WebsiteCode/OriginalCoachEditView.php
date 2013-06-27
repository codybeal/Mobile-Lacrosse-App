<!DOCTYPE HTML>
<html>
<head>
<title>Game View</title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link href="gvStyle.css" type="text/css" rel="stylesheet" />
<link href="fonts.css" type="text/css" rel="stylesheet" />
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
		$clears_h=$row['home_clears_made'];
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
						<td rowspan=2 class="timeTopMid scorePadM">00:00:00
						</td>
						<td class="timeTopLR scorePadR"><?=$vis_id?>
						</td>
					</tr>
					<tr>
						<td rowspan=2 class="timeBottomLR"><input type="text" class="scoreText" value='<?=$home_score?>'>
						</td>
						<td rowspan=2 class="timeBottomLR scorePadR"><input type="text" class="scoreText" value='<?=$vis_score?>'>
						</td>
					</tr>
					<tr>
						<td class="timeBottomMid scorePadM">FINAL
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
						<td class="tableLeft"><input type="text" class="statText" value='<?=$shots_h?>'>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><input type="text" class="statText" value='<?=$shots_h?>'>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><input type="text" class="statText" value='<?=$saves_h?>'>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><input type="text" class="statText" value='<?=$saves_v?>'>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><input type="text" class="statText" value='<?=$gbs_h?>'>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><input type="text" class="statText" value='<?=$gbs_v?>'>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><input type="text" class="statText" value='<?=$faces_h?>'>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><input type="text" class="statText" value='<?=$faces_v?>'>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><input type="text" class="statText" value='<?=$clears_h?>'>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><input type="text" class="statText" value='<?=$clears_v?>'>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><input type="text" class="statText" value='<?=$ppopp_h?>'>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><input type="text" class="statText" value='<?=$ppopp_v?>'>
						</td>
					</tr>
					<tr>
						<td class="tableLeft"><input type="text" class="statText" value='<?=$penalty_h?>'>
						</td>
						<td class="tableMiddle">
						</td>
						<td class="tableRight"><input type="text" class="statText" value='<?=$penalty_v?>'>
						</td>
					</tr>
				</table>
			</div>
		</div>
		<div id="footer" >
			<a href='players.html'><img src="Images/PlayerButtonDone.png" class="footerPad, floatLeft" ></a>
			<a href='CoachEditGameList.php'><img src="Images/BackButtonDone.png" class="footerPad, floatRight"></a>
		</div>
	</div>
</body>
</html>
