document.addEventListener( "DOMContentLoaded",
 function(){
 // ------------------------------------------------------------ show currenttime
   currenttime();
  }
 // ------------------------------------------------------------ end show currenttime
);
 // ------------------------------------------------------------ currenttime
function currenttime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = lenghtchar(m);
  s = lenghtchar(s);
  document.getElementById('colock').innerHTML = today.toDateString()+" - "+
  h + ":" + m + ":" + s;
  var t = setTimeout(currenttime, 500);
}
function lenghtchar(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
 // ------------------------------------------------------------ end currenttime
 // ------------------------------------------------------------ slide show

 // ------------------------------------------------------------ en slide show



 // ------------------------------------------------------------ fixed menu
/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
 // ------------------------------------------------------------ end fixed menu
 // ------------------------------------------------------------ Shopping slideshow
 $(document).ready(function(){
  $('.shopping-slidshow.big').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });
  $('.shopping-slidshow.small').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    variableWidth: true
  });
}); 
 // ------------------------------------------------------------ end hopping slideshow
