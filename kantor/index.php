<!DOCTYPE html>


<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<div class="container-fluid" style="position: relative; top: 100px; left: 500px;">
    <p>Jaką walutę będziemy przeliczać?</p>
    <form action="count.php" method="post">
      <div class="checkbox">
        <label><input type="checkbox" value="euro" name="euro">Euro</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="dolar" name="dolar">Euro</label>
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="frank" name="frank">Frank</label>
      </div>
      <p>Ile pieniędzy chcesz przeliczyć?</p>
      <input type="text" name="jednostki" required><br><br>
      <button required type="submit" class="btn btn-info btn-lg" data-toggle="modal" data-target="">Przelicz</button>
    </form>
</div>
</html>