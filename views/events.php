
<?php 

$i = 0;
$j = 100;
$z = 200;

?>

<div>


<table class="table table-striped">
  <thead>
    <tr>
      
      <th>Event Name</th>
      <th>Type</th>
      <th>Amount req</th>
      <th>Date & Time</th>
      <th>Duration</th>
      <th>Creator</th>
      <th>Min Mem Req</th>
      <th>Max mem Req</th>
      <th>Currently Attending</th>
      <th>Details</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
     <?php foreach ($events as $event): ?>

    <tr>
        <td><?= $event["event_name"] ?></td>
        <td><?= $event["type"] ?></td>
        <td><?= $event["amount_ph"] ?></td>
        <td><?= $event["time"] ?></td>
        <td><?= $event["duration"] ?></td>
        <?php 

  $cred = CS50::query("SELECT * FROM user WHERE username = ?" , $event["admin"]);

  $event_uni = $event["event_id"];
  $user_uni = $_SESSION["id"];
  $i++;
  $j++;
  $z++;

?>
        <td><button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?= (string)$i ?>"><span class = "glyphicon glyphicon-user"></span> 
   
   <?= $event["admin"] ?></button>

<div id=<?= (string)$i ?> class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Organier : <?= $event["admin"] ?><br/>
      Mobile Number : <?= $cred[0]["mobile"] ?><br/>
      E-Mail : <?= $cred[0]["email"] ?>
    </div>
  </div>
</div>
</td>

        <td><?= $event["min_mem"] ?></td>
        <td><?= $event["max_mem"] ?></td>
        <td><?= $event["count"] ?></td>

        <td ><button type="button" class="btn btn-default" data-toggle="modal" data-target="#<?= (string)$j ?>">Info</button>

<div id=<?= (string)$j ?> tabindex="-1" class="modal fade bs-example-modal-lg" rclass="modal fade bs-example-modal-lg" ole="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?= $event["details"] ?>
    </div>
  </div>
</div></td>

      <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?= (string)$z ?>" data-whatever="@mdo">Join<span class = "glyphicon glyphicon-thumbs-up"></span> </button>

      <div class="modal fade" id=<?= (string)$z ?> tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Sanity Check!</h4>
      </div>
      <div class="modal-body">
        <form action="attend.php" id="search_form" method="post">
        <fieldset>
          
            
          <b>Do you really want to join this gathering..?</b>
          <br/><br/>
          <input type="hidden" name="event_uni" value= <?= $event_uni ?> >
          <input type="hidden" name="user_uni" value= <?= $user_uni ?> >

        <div class="form-group">
        
       <button onclick="form_submit()" name='submit' value='Submit' class="btn btn-primary"><i class="fa fa-tag"></i> Yup, Join this Gathering..!</button>           


          </div>
  </fieldset>

        </form>
      </div>
    </div>

        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        <script type="text/javascript">
  function form_submit() {
      this.disabled = true;
    document.getElementById("search_form").submit();
   }    
  </script>
        
     
</div>
</div>
      



      </td>
        
    </tr>

    <?php endforeach ?>
  </tbody>
</table>
