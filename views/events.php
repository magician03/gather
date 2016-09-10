
<?php 

$i = 0;
$j = 100;
$z = 200;

?>

<div>


     <?php foreach ($events as $event): ?>

   <div class="container" id="normal">
  <div class="row">
    <div class="col s12 m12">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <div class="card-title"><?= $event["event_name"] ?></div>(<?= $event["type"] ?>)
          <div class="right">INR &nbsp;<?= $event["amount_ph"] ?></div>
          <?php 

  $cred = CS50::query("SELECT * FROM user WHERE username = ?" , $event["admin"]);

  $event_uni = $event["event_id"];
  $user_uni = $_SESSION["id"];
  $i++;
  $j++;
  $z++;
  ?>

          <br><?= $event["time"] ?>.<?= $event["duration"] ?>.Hosted by
          <a class="waves-effect waves-light modal-trigger" href="#<?= + (string)$i?>"><?= $event["admin"] ?></a>


          <!-- Modal Structure -->
          <div id="<?= (string)$i ?>" class="modal" tabindex="-1">
            <div class="modal-content black-text">
              Organier : <?= $event["admin"] ?>
              <br/> Mobile Number : <?= $cred[0]["mobile"] ?>
              <br/> E-Mail : <?= $cred[0]["email"] ?>
            </div>

          </div>


          <p> <?= $event["details"] ?></p>
        </div>
        <div class="card-action white-text">
          <span><?= $event["min_mem"] ?> - <?= $event["max_mem"] ?></span>
          <a class="waves-effect waves-light btn modal-trigger right" href="#<?= (string)$z ?>">Join</a>
          <span class="right"> <?= $event["count"] ?> attending &nbsp; &nbsp;</span>
          <!-- Modal Structure -->
          <div id="<?= (string)$z ?>" class="modal" tabindex="-1">
            <div class="modal-content black-text">
              <form action="attend.php" id="search_form" method="post">
              <p>Do you really want to join this gathering..?</p>
              <br/>
              <br/>
              <input type="hidden" name="event_uni" value="<?= $event_uni ?>"/>
              <input type="hidden" name="user_uni" value="<?= $user_uni ?> "/>
              <div class="form-group">
                <button onclick="form_submit()" name='submit' value='Submit' class="btn btn-primary"><i class="fa fa-tag"></i> Yup, Join this Gathering..!</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

        
    <?php endforeach ?>
</div>