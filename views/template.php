<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo DEFAULT_PAGE_TITLE; ?></title>
    <link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/bootstrap.min.css'?>">
  </head>
  <body>

    <?php $this->loadViewInTemplate($viewName,$viewData); ?>

    <script src="<?php echo BASE_URL.'assets/js/jquery-3.3.1.min.js'?>"></script>
    <script src="<?php echo BASE_URL.'assets/js/bootstrap.min.js'?>"></script>
</body>

</html>
