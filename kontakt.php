<?php include('template/header.php'); ?>
<?php
   
  $result =$from = $comment = "";
  if(isset($_POST['submit'])){

    $from= $_POST['from'];
    $comment = $_POST['comment'];

    $to = "";

    $subject = "Zákazník";

    $message = "
    <html>
    <head>
    <title>Bowl restaurant</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js'></script>
    </head>

    <div style='background-color:grey; color:white' class='p-3 '>
        
        <div class='d-inline-block m-3 '>
            <h1>Bowl restaurant</h1>
        </div>
        
    </div>
    <div class='p-3'>
    <p>".  $comment ."</p>
    <p>Váš zákazník,</p>
    </div>
    <div class='p-3'>
        <h3  style='color:white; background-image: linear-gradient(to right, rgb(26, 14, 7) , rgb(255, 153, 0));'>Team Bowl restaurant</h3>
        <p><i class='fa fa-home me-3' ></i> Košice, 040 11 Luník IX, SR</p>
        <p><i class='fa fa-envelope me-3'></i>info@example.com</p>
        <p><i class='fa fa-phone me-3'></i> + 01 234 567 88</p>
        <p><i class='fa fa-print me-3'></i> + 01 234 567 89</p>
    </div>
    </body>
    </html>
    ";


    $headers = "MIME-Version: 1.0" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    if(mail($to, $subject, $message, $headers)) {
      //header("Location: kontakt.php");
      $result = "<div class='alert alert-success alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Success!</strong> Email odoslaný.
      </div>";
      //echo $result;
      
    } else {
      $result ="<div class='alert alert-danger alert-dismissible'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <strong>Fail!</strong> Email neodoslaný.
      </div>";
      //header("Location: kontakt.php");
      //echo $result;
    };
        
        //exec('mail.php'); 
      }
?>
<div class="container text-center col-10 p-5">
    <h2>Pošlite nám spravu</h2>
    <div class="container"><?php echo $result ?></div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="form-group">
        <label for="from">Your e-mail:</label>
        <input type="email" class="form-control m-1" name="from" id="from">
      </div>
      
      <div class="form-group">
        <label for="comment">Správa:</label>
        <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
      </div>
      <button  name="submit" class="btn btn-danger w-50 m-3">Odoslať</button>
    </form>
</div>
<?php include('template/footer.php'); ?>