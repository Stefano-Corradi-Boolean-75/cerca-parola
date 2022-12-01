<?php

$parole = ['booleano', 'tautologico', 'distopico'];


//var_dump($_GET);

// se è stato passato il in GET il parametro "parola" effettuo la ricerca, altrimenti non faccio nulla perché siamo al primo caricamento della pagina

$output = '';

if(!empty($_GET['parola'])){
  if(in_array($_GET['parola'],$parole)){
    $output = 'La parola esiste';
  }else{
    $output = 'La parola NON esiste';
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <title>cerca parola</title>
</head>
<body>

<div class="container my-5">


<!-- stampo questo blocco di codice solo se la parola esiste -->
<?php if(empty($_GET['parola'])): ?> 

  <div>
    <h1>Cerca la parola</h1>
    <!-- invio il form alla stessa pagina -->
    <form action="./index.php" method="GET">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Parola da cercare</label>
        <input type="text" name="parola" class="form-control" id="exampleFormControlInput1" placeholder="Scrivi parola">
      </div>
      <div class="mb-3">
        <button class="btn btn-primary" type="submit">Invia</button>
      </div>
    </form>
  </div>

<?php else: ?>
  <!-- altrimenti stampo il risultato -->
  <div>
    <h1>La parola cercata è <?php echo $_GET['parola'] ?> </h1>
    <h3><?php echo $output; ?></h3> 
  </div>

<?php endif;  ?>

</div>
  
</body>
</html>