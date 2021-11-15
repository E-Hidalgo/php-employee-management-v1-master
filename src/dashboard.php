<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php 
require_once("./library/sessionHelper.php");
checkSession();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- <link rel="stylesheet" href="../assets/css/login.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

  <!-- ------------- FOR JS-GRID ------------- -->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.css" />
  <link type="text/css" rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid-theme.min.css" />

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jsgrid/1.5.3/jsgrid.min.js"></script>

  <title>Document</title>
  <style>
  .hide {
    display: none;
  }
  </style>
</head>


<body>
  <?php include_once '../assets/html/header.html'  ?>


  <h1><?php echo "Welcome Papafrita, ". $_SESSION["username"]?></h1>



  <div id="jsGrid"></div>

  <?php include_once '../assets/html/footer.html' ?>
  <script src="../assets/js/jsGrid.js">

  </script>
</body>

</html>