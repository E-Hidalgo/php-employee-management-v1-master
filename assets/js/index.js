
$("#login").submit(function(e) {
  e.preventDefault();

  const data = {
    email: $("#username"),
    password: $("#password")
  }

$.post("../../src/library/logincontroller.php", data, function(response) {
  
})

})