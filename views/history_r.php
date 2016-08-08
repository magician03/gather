<?php 

$i = 0;
$j = 100;


?>

<div>


<table class="table table-striped">
  <thead>
    <tr>
      
      <th>Event Name</th>
      <th>Type</th>
      <th>Status</th>
      <th>Date&Time(YYYY-MM-DD HH:MM:SS)</th>
      <th>City</th>
      <th>Creator</th>
      <th>Details</th>
      
      
    </tr>
  </thead>
  <tbody>
     <?php foreach ($his as $hi): ?>

    <tr>
        <td><?= $hi["eventname"] ?></td>
        <td><?= $hi["type"] ?></td>
        <td><?= $hi["status"] ?></td>
        <td><?= $hi["date"] ?></td>
        <td><?= $hi["city"] ?></td>
        <?php 

  $cred = CS50::query("SELECT * FROM user WHERE username = ?" , $hi["admin"]);

  $event_uni = $hi["event_id"];
  $user_uni = $_SESSION["id"];
  $i++;
  $j++;
  

?>
        <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?= (string)$i ?>"><span class = "glyphicon glyphicon-user"></span> 
   
   <?= $hi["admin"] ?></button>

<div id=<?= (string)$i ?> class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Organier : <?= $hi["admin"] ?><br/>
      Mobile Number : <?= $cred[0]["mobile"] ?><br/>
      E-Mail : <?= $cred[0]["email"] ?>
    </div>
  </div>
</div>
</td>


        <td ><button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?= (string)$j ?>">Info</button>

<div id=<?= (string)$j ?> tabindex="-1" class="modal fade bs-example-modal-lg" rclass="modal fade bs-example-modal-lg" ole="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?= $hi["details"] ?>
    </div>
  </div>
</div></td>

       


          </div>
  </fieldset>

        </form>
        
      </div>
    </div>

        
      </div>
      
</div>
      



      </td>
        
    </tr>

    <?php endforeach ?>
  </tbody>
</table>
