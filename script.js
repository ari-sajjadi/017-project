
document.addEventListener( "DOMContentLoaded",
 function(){
  //var d = new Date();

   //document.getElementById("c1").innerHTML = d.toDateString();
   currekttime();
  }
);
function currekttime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = lenghtsec(m);
  s = lenghtsec(s);
  document.getElementById('c1').innerHTML = today.toDateString()+" - "+
  h + ":" + m + ":" + s;
  var t = setTimeout(currekttime, 500);
}
function lenghtsec(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}






/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}