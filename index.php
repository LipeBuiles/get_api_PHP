
<?php

function API($ruta){
    $url ="https://restcountries.eu/rest/v2/";
    $respuesta = $url . $ruta;
    return $respuesta;
}


$direccion = API("all");
$json = file_get_contents($direccion);
$datos = json_decode($json, true);
//  

?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <script type="text/javascript" src="main.js"></script>

    <title>Get API Paises!</title>

  </head>
  <body>

  <div class='row justify-content-md-center' style='padding-top: 50px;'>
  <button type="button" class="btn btn-outline-info col-6 mx-auto" onclick="hideShow();" >
  Paises
</button>
</div>    

<?php
 foreach ($datos as $key => $value) {
     $nombre = $value['name'];
     $bandera = $value['flag'];
     $capital = $value['capital'];
     $limites = $value['borders'];
     $limites = implode("|",$limites);
     $latitud = $value['latlng'][0];
     $longitud = $value['latlng'][1];
     
    
     

     echo "
     
     <div class='row justify-content-md-center' style='padding-top: 50px;'>
            <div class='card text-center'  style='width: 350px; height: 400px; padding-top: 10px'>
            
                <div class='bg-image hover-overlay ripple' data-mdb-rip5ple-color='light'>
                <img src=$bandera
                style='width: 300px; height: 200px;'
                class='card-img-top'
                />
                <a href='#!'>
                    <div class='mask' style='background-color: rgba(251, 251, 251, 0.15)'></div>
                </a>
                </div>
                <div class='card-body'>
                <h5 class='card-title'>$nombre - $capital</h5>
                <p class='card-text'>
                    $limites
                </p>
                <div class='card-footer text-muted'>longitud $longitud</div>
                <div class='card-footer text-muted'>longitud $longitud</div>

                </div>           
                 </div>
                 <br/>
            </div>      

     
     ";
 }

 

?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>