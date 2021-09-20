<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <title> Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <figure>
               <img src="img/money.png" alt="bank" style="width: 100%">
      
  
                <h2 class="typewriter"> WELCOME  TO  ONLINE  BANKING</h2>
            </figure>
     
  

      <!-- Activity section -->
            <div class="container">
                  <div class="rowpost">
                    <img src="img/USER2.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php">
                    <button class="btn">New User</button></a>
                  </div>
                  <div class="rowpost">
                    <img src="img/transfer(1).jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php">
                    <button class="btn">Make a Transaction</button></a>
                  </div>
                  <div class="rowpost">
                    <img src="img/transaction history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php">
                    <button class="btn">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Ananya Trivedi</b></p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>