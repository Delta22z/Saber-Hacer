<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agencia de Viajes - Inicio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .viajes-disponibles table,
        .costos table,
        .sugerencias table {
            width: 80%; /* Ancho de la tabla */
            margin: 0 auto; /* Centrar la tabla horizontalmente */
            border-collapse: collapse;
        }
        
        .viajes-disponibles th, .viajes-disponibles td,
        .costos th, .costos td,
        .sugerencias th, .sugerencias td {
            padding: 10px; /* Agregar espacio entre los datos */
            border: 1px solid #ccc; /* Borde para celdas */
        }

        /* Cambiar el color de texto para "Costo en Pesos" a verde */
        .costos td:nth-child(3) {
            color: green;
        }

        /* Cambiar el color de texto para "Costo en Dólares" a azul */
        .costos td:nth-child(4) {
            color: blue;
        }


        @keyframes discord {
	0% {height:70px; width:250px;}
	 100% {height:500px;width:350px;}
}
@keyframes discord-c {
	0% {height:500px;width:350px;}
    100% {height:70px; width:250px;}
}
    </style>


<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{your-app-id}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


   FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});


{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}


function checkLoginState() {
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
}

<fb:login-button 
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button>

</script>
</head>
<body>
    <header>
        <h1>Agencia de Viajes "DoryanAirs"</h1>
        <img src="img\logo.jpg" alt="logo" width="100px">
        
        <nav>
            <a href="index.html">Piloto</a>
            <a href="#">Sugerencias</a>
            <a href="index.php">INICIO</a>
            <a href="#">Viajes en Tiempo Real</a>
            <a href="index.html">Administrador</a>
        </nav>
    </header>

    <div class="container"> 

    
        <center>
        <div class="iframely-embed"><div class="iframely-responsive" style="height: 140px; padding-bottom: 0;"><a href="https://www.instagram.com/aeromexico/" data-iframely-url="//iframely.net/ai3kiul"></a></div></div><script async src="//iframely.net/embed.js"></script>
            <div id="fb-root"></div>
<script async="1" defer="1" crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="1pymr6Kt"></script><div class="fb-page" data-href="https://www.facebook.com/viajavolaris" data-small-header="true" data-adapt-container-width="1" data-hide-cover="" data-show-facepile="true" data-show-posts="" data-width="600"><blockquote cite="https://www.facebook.com/viajavolaris" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/viajavolaris">Volaris</a></blockquote></div>
    
            <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v18.0&appId=1171964666981952" nonce="8CDqHEj8"></script>
<div class="fb-login-button" data-width="" data-size="" data-button-type="" data-layout="" data-auto-logout-link="true" data-use-continue-as="false"></div>
<br>
</center>
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Aeromexico?ref_src=twsrc%5Etfw">Tweets by Aeromexico</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

</div>    

</body>
</html>
