<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script> 
    $( document ).ready( function() {
    $( '#myModal' ).modal( 'toggle' );
	 });
  </script>

</head>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Wymiana walut</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p>

<?php

$euro = 4.9;
$dolar = 3.4;
$frank = 3.59;
$jednostki = $_POST["jednostki"];

if ($_POST["euro"]) {

  $result = $jednostki * $euro;
  echo "Obecny kurs euro to: ".$euro."<br>";
  echo "Przy obecnym kursie otrzymasz: ".$result." euro";

}

elseif ($_POST["dolar"]) {

  $result = $jednostki * $dolar;
  echo "Obecny kurs dolara to: ".$dolar."<br>";
  echo "Przy obecnym kursie otrzymasz: ".$result." dolarów";
  

}elseif ($_POST["frank"]) {

  $result = $jednostki * $frank;
  echo "Obecny kurs franka to: ".$frank."<br>";
  echo "Przy obecnym kursie otrzymasz: ".$result." franków";
  }

  ?>
    
  </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>
</html>




