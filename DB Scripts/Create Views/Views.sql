CREATE VIEW current_game_data
AS
SELECT game.game_id, home_team.team_id AS home_id, home_team.name AS home, game_current_score.home_score,
	vis_team.team_id AS vis_id, vis_team.name AS visitor, game_current_score.vis_score,
	game_status.period, game_status.clock,
	home_totals.shots AS home_shots, home_totals.saves AS home_saves, home_totals.ground_balls AS home_groundballs, home_totals.face_won AS home_face_won, home_totals.clears_made AS home_clears_made, home_totals.power_play_opportunities AS home_power_play_opps, home_totals.penalties AS home_penalties,
	vis_totals.shots AS vis_shots, vis_totals.saves AS vis_saves, vis_totals.ground_balls AS vis_groundballs, vis_totals.face_won AS vis_face_won, vis_totals.clears_made AS vis_clears_made, vis_totals.power_play_opportunities AS vis_power_play_opps, vis_totals.penalties AS vis_penalties
FROM game LEFT JOIN game_current_score 
	ON game.game_id = game_current_score.game_id LEFT JOIN team AS home_team
	ON game.home_id = home_team.team_id LEFT JOIN team AS vis_team
	ON game.vis_id = vis_team.team_id LEFT JOIN game_status
	ON game.game_id = game_status.game_id LEFT JOIN team_totals AS home_totals
	ON home_team.team_id = home_totals.team_id LEFT JOIN team_totals AS vis_totals
	ON vis_team.team_id = vis_totals.team_id
WHERE game.game_date = NOW()
