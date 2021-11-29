function verify(form) {
  var p = document.getElementById("pword")
  var p2 = document.getElementById("pword2")
  if (p.value != p2.value) {
    alert("Passwords do not match!");
  } else if (p.value.length < 8 || p.value.length < 8) {
    alert("Your password should be at least 8 characters!");
  } else if (p = p2) {
    alert("Success!");
  }
}
