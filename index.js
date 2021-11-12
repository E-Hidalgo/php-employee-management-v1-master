
$("#login").submit(function (e) {
  e.preventDefault();

  const data = {
    username: $("#username").val(),
    password: $("#password").val()
  }

  console.log(data)

  $.post("./src/library/loginManager.php", data, function (response) {
    console.log(response)
  })

})