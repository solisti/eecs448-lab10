function changeStyle(form) {
  var reda = document.getElementById("reda");
  var greena = document.getElementById("greena");
  var bluea = document.getElementById("bluea");
  var widtha = document.getElementById("widtha");

  var redb = document.getElementById("redb");
  var greenb = document.getElementById("greenb");
  var blueb = document.getElementById("blueb");


  var para = document.getElementById('pokemon');

  para.style.border = widtha.value + "px" +  " solid" + " #" + reda.value + greena.value + bluea.value;
  para.style.backgroundColor = "#"+redb.value+greenb.value+blueb.value;

}
