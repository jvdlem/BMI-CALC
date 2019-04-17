function ajax(gewicht, lengte) {
  let debug = false; // flase or not to false...
  let controlScript = "BMI.php"; //Hier in deze php word de berekening gemaakt
  let xmlhttp = new XMLHttpRequest(); // maak een instance \
  let httpString = controlScript + "?gewicht=" + gewicht + "&lengte_cm=" + lengte;
  let httpResponse = "";
  if (debug) console.log(httpString); //debug?
  xmlhttp.open("GET", httpString, true);
  xmlhttp.send();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState ==4 && xmlhttp.status == 200){
      if(debug) console.log("http response = " + xmlhttp.responseText); //debug again
      httpResponse = xmlhttp.responseText; // leest string van de server
      resultaat.innerHTML = httpResponse;
    }
  }
}
