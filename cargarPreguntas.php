<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/lampone.css">
    <title> Los Simuladores </title>
  </head>


  <body class="container-body">

<form class="" action="cargarPreguntas.php" method="post">



<div class="form-group">
  <div class="alert alert-dark" role="alert">
      <h2 class="display-6 text-center">Pregunta</h2>
    </div>
      <input name="pregunta" type="text" class="form-control" value="" id="exampleInputEmail1" aria-describedby="questionHelp" placeholder="Ingrese pregunta">

</div>



<div class="form-group">
    <input name="filePregunta" type="file" class="form-control-file" id="filePregunta">
    <small id="filePregunta" class="form-text text-muted">Agrega una imagen, por favor. (Formato png y jpg)</small>
  </div>


  <div class="alert alert-dark" role="alert">
      <h2 class="display-6 text-center">Respuestas</h2>
    </div>

    <div class="form-group">
      <label for="inputRespuesta1">#1 Respuesta</label>
      <input name="respuesta1" type="text" class="form-control" id="inputRespuesta1" aria-describedby="respuesta1Help" placeholder="Respuesta1">
    </div>

    <div class="form-group">
      <label for="inputRespuesta2">#2 Respuesta</label>
      <input name="respuesta2"type="text" class="form-control" id="inputRespuesta2" aria-describedby="respuesta2Help" placeholder="Respuesta2">
    </div>

    <div class="form-group">
      <label for="inputRespuesta3">#3 Respuesta</label>
      <input name="respuesta3"type="text" class="form-control" id="inputRespuesta3" aria-describedby="respuesta3Help" placeholder="Respuesta3">

    </div>

    <div class="form-group">
      <label for="inputRespuesta4">#4 Respuesta</label>
      <input name="respuesta4" type="text" class="form-control" id="inputRespuesta4" aria-describedby="respuesta4Help" placeholder="Respuesta4">
    </div>

    <div class="form-group">
    <label  for="selectCorrectAnswer">Seleccione cuál es la respuesta correcta</label>

      <select name="selectPreguntaCorrecta" class="form-control" id="selectCorrectAnswer">

                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
    </select>
    <br>
  </div>

<button type="submit" class="btn btn-primary">Guardar Pregunta</button>

</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
