 CREATE DATABASE ajax_webservices CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
 
-- les saisons
CREATE TABLE seasons (
  season_id INT PRIMARY KEY AUTO_INCREMENT,
  season_name VARCHAR(255) NOT NULL,
  start_date DATE NOT NULL,
  end_date DATE NOT NULL
);

insert into seasons values (null, '2023-2024', '2023-09-01', '2024-10-30'), (null, '2022-2023', '2022-09-01', '2022-10-30');

-- les equipes
CREATE TABLE teams (
  team_id INT PRIMARY KEY AUTO_INCREMENT,
  team_name VARCHAR(255) NOT NULL,
  country VARCHAR(50) NOT NULL
);

INSERT INTO Teams (team_name, country) VALUES ('Real Madrid', 'Spain');
INSERT INTO Teams (team_name, country) VALUES ('Barcelona', 'Spain');
INSERT INTO Teams (team_name, country) VALUES ('Bayern Munich', 'Germany');
INSERT INTO Teams (team_name, country) VALUES ('Manchester United', 'England');
INSERT INTO Teams (team_name, country) VALUES ('Liverpool', 'England');
INSERT INTO Teams (team_name, country) VALUES ('Juventus', 'Italy');
INSERT INTO Teams (team_name, country) VALUES ('Paris Saint-Germain', 'France');
INSERT INTO Teams (team_name, country) VALUES ('Chelsea', 'England');
INSERT INTO Teams (team_name, country) VALUES ('Inter Milan', 'Italy');
INSERT INTO Teams (team_name, country) VALUES ('Atlético Madrid', 'Spain');


-- les matchs
CREATE TABLE matches (
  match_id INT PRIMARY KEY AUTO_INCREMENT,
  season_id INT NOT NULL,
  home_team_id INT NOT NULL,
  away_team_id INT NOT NULL,
  match_date DATE NOT NULL,
  home_team_goals INT,
  away_team_goals INT,
  FOREIGN KEY (season_id) REFERENCES seasons(season_id),
  FOREIGN KEY (home_team_id) REFERENCES teams(team_id),
  FOREIGN KEY (away_team_id) REFERENCES teams(team_id)
);


INSERT INTO Matches (season_id, home_team_id, away_team_id, match_date, home_team_goals, away_team_goals)
values  (1, 1,  2, '2023-12-12', 2, 3);

select m.*, s.season_name, v.team_name visitor, d.team_name home from matches m 
left join seasons s on m.season_id  = s.season_id 
left join teams d on d.team_id = m.home_team_id 
left join teams v on v.team_id = m.away_team_id  ;


-- les  classements
CREATE TABLE standings (
  standing_id INT PRIMARY KEY AUTO_INCREMENT,
  season_id INT NOT NULL,
  team_id INT NOT NULL,
  position INT NOT NULL,
  played INT NOT NULL,
  won INT NOT NULL,
  drawn INT NOT NULL,
  lost INT NOT NULL,
  goals_for INT NOT NULL,
  goals_against INT NOT NULL,
  points INT NOT NULL,
  FOREIGN KEY (season_id) REFERENCES seasons(season_id),
  FOREIGN KEY (team_id) REFERENCES teams(team_id)
);

-- les joueurs
CREATE TABLE players (
  player_id INT PRIMARY KEY AUTO_INCREMENT,
  player_name VARCHAR(255) NOT NULL,
  team_id INT NOT NULL,
  position VARCHAR(50) NOT NULL,
  nationality VARCHAR(50) NOT NULL,
  FOREIGN KEY (team_id) REFERENCES teams(team_id)
);
