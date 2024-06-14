<?php
/*require_once 'core/connect.php';
require_once 'core/functions.php';
echo "<pre>"; var_dump(getList()); echo "</pre>"; 
echo "Aloha";
die()*/
?>
<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Bootstrap demo</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="margin: 0; padding: 0;">
   <div class="container-lg">
      <?php
      require_once('includes/navbar.php');
      // require_once('includes/form.php');
      require_once('includes/match.php');
      require_once('includes/list.php');
      ?>
      <div class="text-center" style="font-size: 0.8em; position: absolute; bottom:0; left: 0; width: 100%; padding: 10px 0">
         <em>&copy; Ajax &amp; Webservices Courses</em> <span style="color: red;">&hearts;</span>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="js/base.js?dt=<?= time() ?>"></script>
</body>

</html>