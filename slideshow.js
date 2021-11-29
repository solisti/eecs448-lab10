const cats = ["https://i.imgur.com/oPrTwQ0.jpg", "https://i.imgur.com/NVV8bHd.jpg", "https://i.imgur.com/QfGRXhL.jpg","https://i.imgur.com/g3s4VoM.jpg", "https://i.imgur.com/Pp46oSW.jpg"]

var idx = 0;

function prev() {

  if (idx == 0) {
    idx = 4;
  } else {
    idx -= 1;
  }

  document.getElementById("img1").src = cats[idx%5];

}


function next() {
  idx +=1 ;
  document.getElementById("img1").src = cats[idx%5];

}
