<hr>
<h2>Créer une nouvelle dans le répertoire</h2>
<div class="alert alert-success" style="display: none;"></div>
<div class="alert alert-danger" style="display: none;"></div>
<form id="js-from-entry" action="">
   <input type="hidden" name="action" value="create" >
   <div class="row">
      <div class="mb-3 col-md-6">
         <label for="first_name" class="form-label">First name</label>
         <input autofocus type="text" class="form-control" id="first_name" name="first_name" required>
      </div>
      <div class="mb-3 col-md-6">
         <label for="last_name" class="form-label">Last name</label>
         <input type="text" class="form-control" id="last_name" name="last_name" required>
      </div>
   </div>
   <div class="row">
      <div class="mb-3 col-md-2">
         <label for="email" class="form-label">Gender</label>
         <select id="gender" name="gender" class="form-select" aria-label="Default select example">
            <option selected>--- gender ---</option>
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="Z">Lgbt</option>
         </select>
      </div>
      <div class="mb-3 col-md-4">
         <label for="phone" class="form-label">Phone</label>
         <input type="text" class="form-control" id="phone" name="phone" required>
      </div>
      <div class="mb-3 col-md-6">
         <label for="email" class="form-label">Email address</label>
         <input type="email" class="form-control" id="email" name="email" required>
      </div>
   </div>
   <div>
      <button type="submit" class="btn btn-primary">Ajouter la nouvelle entrée</button>
   </div>
</form>