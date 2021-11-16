<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location: ../index.php");
}
/* echo $_SESSION["username"]; */
include_once '../assets/html/header.html';
?>
<script>
if (document.querySelector('#back')) {
  document.querySelector('#back').addEventListener('click', back);
}

function back(e) {
  e.preventDefault();
  window.location.href = "./dashboard.php";
}
</script>
<script src="../assets/js/newEmployee.js" defer></script>
<div class="signup-container d-flex flex-column justify-content-center align-items-center">
  <div class="">
    <h1>
      <i class="fas fa-user-plus"></i>
      Add New Employee
    </h1>

  </div>
  <div class="container border rounded p-4 d-flex flex-row justify-content-center">
    <?php if (isset($_GET['id'])) : ?>
    <form action="../src/library/employeeController.php?form" method="POST">
      <?php else : ?>
      <form action="../src/library/employeeController.php" method="POST">
        <?php endif ?>
        <header>
          <input type="hidden" name="id" id="id-user">
          <div class="set">
            <div class="name">
              <label for="name">Name</label>
              <input id="name" name="name" placeholder="Name" type="text"></input>
            </div>
            <div class="breed">
              <label for="lastname">Last name</label>
              <input id="lastname" name="lastName" placeholder="Last Name" type="text" required></input>
            </div>
            <!--   <div class="photo">
            <button id="upload">
              <i class="fas fa-camera-retro"></i>
            </button>
            <label for="upload">Upload a photo</label>
          </div> -->
          </div>
          <div class="set">
            <div class="breed">
              <label for="email">Email</label>
              <input id="email" name="email" placeholder="Email" type="email"></input>
            </div>
            <div class="gender">
              <label for="gender-female">Gender</label>
              <div class="radio-container">
                <input id="gender-female" name="gender" type="radio" value="woman" checked></input>
                <label for="gender-female">Woman</label>
                <input id="gender-male" name="gender" type="radio" value="male"></input>
                <label for="gender-male">Man</label>
              </div>
            </div>

          </div>
          <div class="set">
            <div class="breed">
              <label for="city">City</label>
              <input id="city" name="city" placeholder="City" type="text"></input>
            </div>
            <div class="birthday">
              <label for="street">Street Address</label>
              <input id="street" name="streetAddress" placeholder="Street Address" type="number"></input>
            </div>
          </div>

          <div class="set">
            <div class="breed">
              <label for="state">State</label>
              <input id="state" name="state" placeholder="CA" type="text"></input>
            </div>
            <div class="birthday">
              <label for="age">Age</label>
              <input id="age" name="age" placeholder="24" type="number"></input>
            </div>
          </div>
          <div class="set">
            <div class="breed">
              <label for="cp">Postal Code</label>
              <input id="cp" name="postalCode" placeholder="03652" type="number"></input>
            </div>
            <div class="birthday">
              <label for="phone">Phone number</label>
              <input id="phone" name="phoneNumber" placeholder="632589674" type="number"></input>
            </div>
          </div>
        </header>
        <div class="footer">
          <div class="set">
            <button id="back" class="btn btn-info" onclick="history.back()">Back</button>
            <button id="send" class="btn btn-info" type="submit">Submit</button>
          </div>
        </div>
      </form>

      <div class="ml-4">
        <img class="rounded" src="https://i.pinimg.com/originals/8c/e5/c5/8ce5c5118185fd743d6d6f8b6a867711.jpg"
          width="300" alt="Scrum">
      </div>


  </div>
</div>


<?php include_once '../assets/html/footer.html' ?>