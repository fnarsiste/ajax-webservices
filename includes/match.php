<hr>
<h2>Enregistrer un nouveau match</h2>
<div class="alert alert-success" style="display: none;"></div>
<div class="alert alert-danger" style="display: none;"></div>
<form id="js-from-entry" action="">
   <input type="hidden" name="action" value="create">
   <div class="row">
      <div class="mb-3 col-md-8">
         <label for="first_name" class="form-label">First name</label>
         <select class="form-control" id="season_id" name="season_id" required>
            <option value="1">2022-2023</option>
            <option value="2">2023-2024</option>
         </select>
      </div>
      <div class="mb-3 col-md-4">
         <label for="phone" class="form-label">Date de match</label>
         <input type="date" class="form-control" id="match_date" name="match_date" required>
      </div>
   </div>
   <div class="row">
      <div class="mb-3 col-md-6">
         <label for="last_name" class="form-label">Equipe domicile</label>
         <select class="form-control" id="home_team_id" name="home_team_id" required>
            <option value="1">Team A</option>
            <option value="2">Team B</option>
         </select>
      </div>
      <div class="mb-3 col-md-6">
         <label for="email" class="form-label">Equipe visitor</label>
         <select class="form-select" id="away_team_id" name="away_team_id" required>
            <option value="1">Team A</option>
            <option value="2">Team B</option>
         </select>
      </div>
      <div class="mb-3 col-md-6">
         <label for="email" class="form-label">Buts equipe domicile:</label>
         <input type="number" class="form-control" id="home_team_goals" name="home_team_goals" required>
      </div>
      <div class="mb-3 col-md-6">
         <label for="email" class="form-label">Buts equipe visiteur:</label>
         <input type="number" class="form-control" id="away_team_goals" name="away_team_goals" required>
      </div>
   </div>
   <div>
      <button type="submit" class="btn btn-primary">Enregistrer le match</button>
   </div>
</form>