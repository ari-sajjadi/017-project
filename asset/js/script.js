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
 // ------------------------------------------------------------ fixed menu
/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "250px";
  document.getElementsByClassName("openbtn")[0].style.display = "none";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
 // ------------------------------------------------------------ end fixed menu
 // ------------------------------------------------------------ Shopping slideshow
 $(document).ready(function(){

  //VIEWPORT CHECKER
  //POUR TOUTES LES SECTIONS
  $('.viewport').viewportChecker({
    classToAdd: 'animated pulse', //Les classes ajoutées quand l'élément est visible
    classToRemove: 'hidden', //Les classes enlevées quand l'élément est en dehors du viewport
    repeat: false, //repeter les animations à chaque fois quand l'élément arrive dans le viewport ?
    offset: '50%' //active les classes seulement quand l'élément est rentré dans le viewport d'au moins 100px
  });


  //SLIDESHOW
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
