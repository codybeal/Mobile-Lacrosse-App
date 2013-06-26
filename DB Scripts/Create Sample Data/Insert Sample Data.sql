INSERT INTO team
(team_id, name, code, record)
VALUES
('HOBART','Hobart','1234','0-1'),
('MARYLAND','Maryland','5678','1-0')

;

INSERT INTO game
(game_id, vis_id, home_id, game_date, location, start_time, end_time, duration, attend, sched_note, league_game, neutral_game)
VALUES
(
	'022302HO','HOBART','MARYLAND','2/23/2002','College Park, Md.','1:00 pm','3:05 pm','2:05','2347','','0','0'
)

;

INSERT INTO game_status
(game_id, period, clock)
VALUES
(
	'022302HO',4, '00:00'
)

;


INSERT INTO team_totals
(game_id, team_id, shots, saves, ground_balls, face_won, face_lost, clears_made, clears_attempted, power_play_opportunities, penalties)
VALUES
('022302HO','HOBART',6,5,34,9,12,13,22,5,0),
('022302HO','MARYLAND',8,2,55,9,12,10,12,2,15)

;

INSERT INTO game_current_score
(game_id, home_score, vis_score)
VALUES
('022302HO', 4, 13)