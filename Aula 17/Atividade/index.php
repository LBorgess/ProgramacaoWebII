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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Votação</title>
  </head>
  <body>
    <h2 class="text-center">Votação</h2>

    <div class="container">

      <p class="text-center">
        Vote em seu time do coração.
      </p>

      <form action="votacao.php" method="GET">

      <div class="input-group mb-3">
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
        <button class="btn btn-success" type="submit">Enviar</button>
      </div>

      </form>

    </div> 		

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>