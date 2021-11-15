<!-- TODO Application entry point. Login view -->
<?php
$isLogout = $_GET["logout"];

?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/login.css">

  <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <title>Employee Management Project</title>
</head>

<body class="d-flex justify-content-center">
  <div class="container d-flex flex-column justify-content-center align-items-center h-100">
    <img class="shadow-sm p-3 mb-5 bg-body rounded mt-6" src="https://cdn.worldvectorlogo.com/logos/scrumorg-1.svg"
      alt="scrum_logo" width="200">
    <div class="d-flex justify-content-center align-items-center ">

      <div class="card">
        <div class="card-header">
          <h3>Sign In</h3>

        </div>
        <div class="card-body">

          <form method="POST" id="login">
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" class="form-control" placeholder="username" name="username" id="username">

            </div>
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" class="form-control" placeholder="password" name="password" id="password">
            </div>

            <?= $isLogout ? '<div class="alert alert-info" role="alert">You have succesfully logged out</div>':""?>
            <div class="alert alert-danger d-none" role="alert" id="error"></div>
            <div class="form-group">
              <input type="submit" value="Login" class="btn float-right btn-info login_btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="./index.js"></script>

</body>

</html>