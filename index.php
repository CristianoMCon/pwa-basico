<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff">
    <title>PWA - Teste</title>
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="style.css">    
    
     <script>
     if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw-pwabuilder.js')
          .then(function(registration) {
            console.log('service worker ok!',registration.scope);
          })
          .catch(function(err){
            console.warn('Ops, service worker nao registrou!',err);
          });
      }
    </script>
    
</head>
<body>

<div class='container'>
    
    <div class='header'>    
      <h2>PWA Teste</h2>
      <p> Objetivo instalar pagina web em celular como se fosse um aplicativo de celular </p>
    </div>
    
    <div class='content'>    
        <ul>  
            <li>HTTPS - ok</li>
            <li>MANIFEST - ok</li>
            <li>SERVICE WORKER - ok</li>
            <li>Sucesso - ok</li>
            <li>Instalou no celular? YESSSS!!</li>
            <li>UHUUUUUUUUUUUU!!</li>
        </ul>
    </div>
    
    <div class='footer'>          
      <a href="sobre.php"> Sobre </a>
    </div>
</div>

</body>
</html>
