window.onload = function() {
  var name = "cookie-banner-closed" + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      if(c.substring(name.length, c.length) == "true") {
        removeBanner();
      }
    }
  }
}

  function removeBanner() {
    var elem = document.getElementById('cookie-banner');
    var elemChildren = elem.getElementsByTagName("div");
    elem.classList.add("cookies-hidden");

    for (i = 0; i < elemChildren.length; i++) {
      elemChildren[i].classList.add("d-none");
    }

    setCookie("cookie-banner-closed", "true", "31");
  }

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
