<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Show Table!</title>
  </head>
  <body>

    <h1 style="text-align:center; padding:20px">Recieved Messages</h1>


    <table class="table table-striped table-dark table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">ID Number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $file = fopen("write.csv","r");
    $x=1;
?>
<?php
    while(! feof($file))
    {
       ?>
       <tr>
       <?php

        $content = fgetcsv($file);

        if ($content) {
        $count = count($content);
        ?>
        <td>
          <?php
        echo $x++;
         ?>
       </td>
       <?php

        for($i=1;$i<$count;$i++){
          ?>

            <td><?php
            echo $content[$i];
             ?>
           </td>


        <?php
        }
      }
         ?>
          </tr>

               <?php
    }
     ?>

    <?php
    fclose($file);
    ?>


  </tbody>
</table>


  <a  style="width:10%; display:block; border-radius:20px" class="btn btn-success"
  href="register.php" >Go Back</a>
  </form>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
