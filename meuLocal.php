<!DOCTYPE html>
<html>
<body>
<p id="demo">CLIQUE NO BOTAO PARA OBTER AS CORRDENADAS</p>
<button onclick="getLocation()">CLIQUE AQUI</button>
<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  x.innerHTML="Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;	
  }
</script>
</body>
</html>
