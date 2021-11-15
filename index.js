// ---------- GETTING USERNAME AND PASSWORD ------------
$("#login").submit(function (e) {
  e.preventDefault();

  const data = {
    username: $("#username").val(),
    password: $("#password").val()
  }

  console.log(data)
  // location.href = "./src/library/loginManager.php";

  $.ajax({
    url: "./src/library/loginManager.php",
    type: "POST",
    data: data,
    success: function (response) {
      console.log(response)
      switch (response) {
        case "Login Ok":
          location.href = "./src/dashboard.php"
          break;

        case "Invalid Password":
          $("#error").toggleClass("d-block");
          $("#error").html("Invalid password, Try again.")

          setTimeout(() => {
            $("#error").removeClass("d-block");

          }, 5000);
          break;

        case "User Not Found":
          $("#error").toggleClass("d-block");
          $("#error").html("User not Found, try again.")

          setTimeout(() => {
            $("#error").removeClass("d-block");

          }, 5000);
          break;

        default:
          break;
      }
    }

  })


})


$.post