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
    </div>
    
    <div class='content'>    
        <img src="images/icons/icon-192x192.png" class="imagem">
        <p> Criado por Cristiano em 27/05/2020 </p>
        <p> Iniciado os testes em 27/05/2020, concluido com sucesso em 04/06/2020 </p>
    </div>
    
    <div class='footer'>          
      <a href="index.php"> Voltar </a>
    </div>
</div>

</body>
</html>
