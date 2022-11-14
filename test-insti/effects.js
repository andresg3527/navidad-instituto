
const asiento = document.getElementById("asiento");
var free_seats = document.getElementsByClassName("free");

var flag = true;

for(var i = 0; i<free_seats.length; i++){
   free_seats[i].addEventListener("click", highlight_seat);
}

function highlight_seat(e){
     for(var i = 0; i<free_seats.length; i++){
            free_seats[i].style.backgroundColor="rgb(152, 226, 152)";
    } 
    var target = e.target
    target.style.backgroundColor ="yellow";
    //target.style.backgroundColor ="blue";

    flag = !flag;
    asiento.value = target.textContent;
}

var last_seats = [];

for (const a of document.querySelectorAll("button")) {
  if (a.textContent.includes("9")) {
    a.style.marginRight = "30px";
  }
}


