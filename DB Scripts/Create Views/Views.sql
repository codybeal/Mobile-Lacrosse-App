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
WHERE game.game_date = CURDATE()

;

CREATE VIEW past_game_data
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
WHERE game.game_date < CURDATE()

;

CREATE VIEW player_stats
AS
SELECT player.player_id, team.team_id, game.game_id, player.name, player.uniform, 
	shots.goals, shots.assists, shots.shots, shots.shots_on_goal, shots.free_position AS free_position_shots, shots.shootout AS shootout_shots,
	misc.face_won, misc.face_lost, misc.ground_balls, misc.draw_controls, misc.turnovers, misc.caused_turnovers, misc.minutes_played, misc.seconds_played,
	goal_type.game_winning, goal_type.power_play, goal_type.short_handed, goal_type.unassisted, goal_type.first_goals, goal_type.over_time, goal_type.empty_net, goal_type.game_tying, goal_type.free_position AS free_position_goals, goal_type.shootout AS shootout_goals,
	goalie.win, goalie.loss, goalie.tie, goalie.power_play_goals_allowed, goalie.short_handed_goals_allowed, goalie.empty_net_goals_allowed, goalie.shootout_goals_allowed, goalie.saves
FROM player LEFT JOIN team
	ON player.team_id = team.team_id LEFT JOIN player_shots AS shots
	ON player.player_id = shots.player_id LEFT JOIN player_penalties AS penalties
	ON player.player_id = penalties.player_id LEFT JOIN player_misc AS misc
	ON player.player_id = misc.player_id LEFT JOIN player_goalie AS goalie
	ON player.player_id = goalie.player_id LEFT JOIN player_goal_type AS goal_type
	ON player.player_id = goal_type.player_id LEFT JOIN game
	ON shots.game_id