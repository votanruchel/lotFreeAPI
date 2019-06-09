<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lotFreeAPI</title>
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/template.css'?>">
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/home.css'?>">
  </head>
  <body>
    <div class="container-fluid" style="height: 400px; background-color: #0065B8;">
      <div class="left-text">
      <!-- Left Text-->
      <span class="title">Confira os resultados da lotofácil</span>
      </div>
      <div class="right-text">
      <!-- Right Text-->
      </div>

    </div>
    <div class="container-fluid menu" style="height: auto; background-color: #1892B2;">
      <ul>
        <li>Confira os ultimos resultados</li>
        <li>Resultados do proximo concurso</li>
        <li>Simular jogo</li>
        <li>Eu teria ganho alguma vez ?</li>
        <li>Quais numeros mais sairam</li>
        <li>Conferir minha cartela</li>
      </ul>
   </div>
    <?php $this->loadViewInTemplate($viewName,$viewData); ?>
    <footer>
      <div class="container-fluid footer">

      </div>  
    </footer>
    <script src="<?php echo BASE_URL.'assets/js/jquery-3.3.1.min.js'?>"></script>
    <script src="<?php echo BASE_URL.'assets/js/bootstrap.min.js'?>"></script>
</body>
</html>
