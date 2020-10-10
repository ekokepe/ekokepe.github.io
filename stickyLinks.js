var getStyle = function(element, property) {
    return window.getComputedStyle ? window.getComputedStyle(element, null).getPropertyValue(property) : element.style[property.replace(/-([a-z])/g, function (g) { return g[1].toUpperCase(); })];
};

var header = document.getElementById("header");
var body = document.getElementById("body");
var footer = document.getElementsByTagName("footer")[0];
var vl1 = document.getElementsByClassName("vl1")[0];
var share_s = document.getElementById("share_s");
var header1 = document.getElementsByClassName("header1")[0];
var topnav1 = document.getElementsByClassName("topnav")[0];
var topnav_h1 = document.getElementsByClassName("topnav_h")[0];
var topnav_hov1 = document.getElementsByClassName("topnav_lhov")[0];
if (bdpd!==0) {var bdpd = 20;}

function stickyHeader() { 
  var i=0;
  var bots = window.pageYOffset + window.innerHeight;
  var batas = document.documentElement.scrollHeight - parseFloat(getStyle(footer, "height").replace("px",""));
  var sticky = parseFloat(getStyle(header, "height").replace("px",""));
  var offs = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;

  if (window.innerWidth > 870) {

    if (offs > 0) {
  
      header.classList.add("sticky");
      body.style.paddingTop = (sticky + bdpd) + "px";

      header.classList.add("header0");
      header1.classList.add("header2");
      topnav1.classList.add("topnav2");
      topnav_h1.classList.add("topnav_h2");
      topnav_hov1.classList.add("topnav_lhov2");
      vl1.classList.add("vl2");

      header1.classList.remove("header1");
      topnav1.classList.remove("topnav");
      topnav_h1.classList.remove("topnav_h");
      topnav_hov1.classList.remove("topnav_lhov");
      vl1.classList.remove("vl1");

      var topnav_l = document.getElementsByClassName('topnav_l');
      
      i=0;
      while (i<topnav_l.length)  {
        topnav_l[i].className=topnav_l[i].className.replace("topnav_l", "topnav_l2");
      }
    }
    else if (offs == 0) {

      header.classList.remove("sticky");
      body.style.paddingTop = bdpd + "px";

      header.classList.remove("header0");
      header1.classList.remove("header2");
      topnav1.classList.remove("topnav2");
      topnav_h1.classList.remove("topnav_h2");
      topnav_hov1.classList.remove("topnav_lhov2");
      vl1.classList.remove("vl2");

      header1.classList.add("header1");
      topnav1.classList.add("topnav");
      topnav_h1.classList.add("topnav_h");
      topnav_hov1.classList.add("topnav_lhov");
      vl1.classList.add("vl1");

      var topnav_l = document.getElementsByClassName('topnav_l2');

      i=0;
      while (i<topnav_l.length)  {
        topnav_l[i].className=topnav_l[i].className.replace("topnav_l2", "topnav_l");
      }
    }
  }
  else {

    if (offs > 0) {
      header.classList.add("sticky");
      body.style.paddingTop = (sticky + bdpd) + "px";
    }
    else if (offs == 0) {
      header.classList.remove("sticky");
      body.style.paddingTop = bdpd + "px";
    }

    header.classList.remove("header0");
    header1.classList.remove("header2");
    topnav1.classList.remove("topnav2");
    topnav_h1.classList.remove("topnav_h2");
    topnav_hov1.classList.remove("topnav_lhov2");
    vl1.classList.remove("vl2");

    header1.classList.add("header1");
    topnav1.classList.add("topnav");
    topnav_h1.classList.add("topnav_h");
    topnav_hov1.classList.add("topnav_lhov");
    vl1.classList.add("vl1");

    var topnav_l = document.getElementsByClassName('topnav_l2');
    
    i=0;
    while (i<topnav_l.length)  {
      topnav_l[i].className=topnav_l[i].className.replace("topnav_l2", "topnav_l");
    }
  }
  
  if (share_s) {
    if (bots > batas) {share_s.style.bottom = (bots - batas + 20) + "px";}
    else {share_s.style.bottom = "20px";}
  } 
  
}

if (document.readyState!='loading') stickyHeader();
// modern browsers
else if (document.addEventListener) document.addEventListener('DOMContentLoaded', stickyHeader);
// IE <= 8
else document.attachEvent('onreadystatechange', function(){
    if (document.readyState=='complete') stickyHeader();
});

window.addEventListener("orientationchange", function() {stickyHeader();}, false);
window.onresize = function(){stickyHeader();};
window.onscroll = function(){stickyHeader();};