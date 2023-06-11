<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <title>Votação</title>
  </head>
  <body>
    <h1 class="text-center mt-3">Votação</h1>

    <div class="container">

      <p class="text-center h3">
        Vote no seu time do coração.
      </p>

      <form action="votacao.php" method="GET">

      <div class="input-group mb-3 mt-3">
        <div class="input-group-prepend">
        <label class="input-group-text" for="times">Times</label>
      </div>
          <select class="custom-select" id="times" name="voto" id="voto">
            <option value="null"></option>
            <option value="1">Corinthians</option>
            <option value="2">São Paulo</option>
            <option value="3">Santos</option>
            <option value="4">Palmeiras</option>
          </select>          
      </div>

      <div class="container row justify-content-center align-items-center">
        <button class="btn btn-success btn-block mt-2" type="submit">Enviar</button>
      </div>

      </form>

    </div> 		

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="../../assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
  </body>
</html>