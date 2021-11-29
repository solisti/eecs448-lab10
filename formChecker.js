function validateForm(event) {
  var usern = document.getElementById("user");
  var passw = document.getElementById("pass");

  var potat = document.getElementById("item1");
  var tomat = document.getElementById("item2");
  var pengu = document.getElementById("item3");

  var ships = document.querySelector('input[name = "ship"]:checked');

  var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;


  if (usern.value.length == 0 || !usern.value.match(re)) {
    event.preventDefault();
    alert("Invalid username format")
    return false;
  }

  if (passw.value.length == 0) {
    event.preventDefault();
    alert("Empty password");
    return false;
  }

  if (potat.value.length == 0 || tomat.value.length == 0 || pengu.value.length == 0) {
    event.preventDefault();
    alert("Item quantities cannot be blank. (Enter 0 if you wish you buy 0 items.)");
    return false;
  }

  if (potat.value < 0 || tomat.value < 0 || pengu.value < 0) {
    event.preventDefault();
    alert("You cannot buy negative quantities");
    return false;
  }

  if (ships == null) {
    event.preventDefault();
    alert("You must select a shipping option");
    return false;
  }

  return true;

}
