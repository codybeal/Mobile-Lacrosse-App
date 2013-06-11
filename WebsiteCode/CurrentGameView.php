<!DOCTYPE HTML>
<html>
<head>
<title>Game View</title>
<link href="gvStyle.css" type="text/css" rel="stylesheet" />
<link href="fonts.css" type="text/css" rel="stylesheet" />
<head>
<body class="body">
<?php 

include('config.php');

$sql = "SELECT shots, saves, ground_balls, face_won, clears_made, power_play_opportunities, penalties FROM team_totals WHERE team_id=''";
$sql2 = "SELECT shots, saves, ground_balls, face_won, clears_made, power_play_opportunities, penalties FROM team_totals WHERE team_id=''";
$sql3 = "SELECT home_id, vis_id FROM game";
$sql4 = "SELECT period, clock FROM game_status";
$sql5 = "SELECT home_score, vis_score FROM game_current_score";

$result = mysql_query($sql);
$result2 = mysql_query($sql2);
$result3 = mysql_query($sql3);
$result4 = mysql_query($sql4);
$result5 = mysql_query($sql5);

	if($row=mysql_fetch_array($result))
	{
		$shots_h=$row['shots'];
		$saves_h=$row['saves'];
		$gbs_h=$row['ground_balls'];
		$faces_h=$row['face_won'];
		$clears_h=$row['clears_made'];
		$ppopp_h=$row['power_play_opportunities'];
		$penalty_h=$row['penalties'];
	}
	if($row2=mysql_fetch_array($result2))
	{
		$shots_v=$row2['shots'];
		$saves_v=$row2['saves'];
		$gbs_v=$row2['ground_balls'];
		$faces_v=$row2['face_won'];
		$clears_v=$row2['clears_made'];
		$ppopp_v=$row2['power_play_opportunities'];
		$penalty_v=$row2['penalties'];
	}	
	if($row3=mysql_fetch_array($result3))
	{
		$home_id=$row4['home_id'];
		$vis_id=$row4['vis_id'];
	}
	if($row4=mysql_fetch_array($result4))
	{
		$period=$row5['period'];
		$clock=$row5['clock'];
	}
	if($row5=mysql_fetch_array($result5))
	{
		$home_score=$row4['home_score'];
		$vis_score=$row4['vis_score'];
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
						<td rowspan=2 class="timeTopMid"><?=$clock?>
						</td>
						<td class="timeTopLR"><?=$vis_id?>
						</td>
					</tr>
					<tr>
						<td rowspan=2 class="timeBottomLR"><?=$home_score?>
						</td>
						<td rowspan=2 class="timeBottomLR"><?=$vis_score?>
						</td>
					</tr>
					<tr>
						<td class="timeBottomMid">PERIOD <?=$period?>
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
			<a href=''><img src="Images/PlayerButtonDone.png" class="footerPad, floatLeft" ></a>
			<a href=''><img src="Images/BackButtonDone.png" class="footerPad, floatRight"></a>
		</div>
	</div>
</body>
<html>