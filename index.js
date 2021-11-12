
$("#login").submit(function (e) {
  e.preventDefault();

  const data = {
    username: $("#username").val(),
    password: $("#password").val()
  }

  console.log(data)

  $.post("./src/library/loginManager.php", data, function (response) {
    console.log(response)
    switch (response) {
      case "Login Ok":
        location.href = "./src/dashboard.php"; break;

      default:
        break;
    }

  })

})