
<?php 

$i = 0;
$j = 100;
$z = 200;

?>

<div>


     <?php foreach ($his as $hi): ?>

   <div class="container" id="normal">
  <div class="row">
    <div class="col s12 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <div class="card-title"><?= $hi["eventname"] ?></div>(<?= $hi["type"] ?>type)
          <div class="right"><?= $hi["city"] ?></div>
    <?php 

  $cred = CS50::query("SELECT * FROM user WHERE username = ?" , $hi["admin"]);

  $event_uni = $hi["event_id"];
  $user_uni = $_SESSION["id"];
  $i++;
  $j++;
  

?>

          <br><?= $hi["date"] ?>.Hosted by
          <a class="waves-effect waves-light modal-trigger" href="#<?= + (string)$i?>"><?= $hi["admin"] ?></a>


          <!-- Modal Structure -->
          <div id="<?= (string)$i ?>" class="modal" tabindex="-1">
            <div class="modal-content black-text">
              Organier : <?= $hi["admin"] ?><br/>
      Mobile Number : <?= $cred[0]["mobile"] ?><br/>
      E-Mail : <?= $cred[0]["email"] ?>
            </div>

          </div>


          <p><?= $hi["details"] ?></p>
        </div>
        <div class="card-action white-text">
          <span>Status- <?= $hi["status"] ?></span>
         </div>
      </div>
    </div>
  </div>
</div>

        
    <?php endforeach ?>
</div>