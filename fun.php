
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- <section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="logout.php">Logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>




<section class="travel">
    <nav class="navbar">
    <button class="button-11" role="button">Train</button>
        <a href="#"><i class="fa-solid fa-train">Train</i></a>
        <a href="#"><i class="fa-solid fa-car">Car</i></a>
        <a href="#"><i class="fa-solid fa-plane-departure">Flight</i></a>
   </nav>
    
</section>
<section class="book_ticket">
<form class="flight" method="POST">

    From : <input type="text" name="from">
    TO : <input type="text" name="to">
    Date Of Travel : <input type="date" name="date_from">
    Passengers : <input type="number" name="passenger">
</form>



<?php

if(isset($_POST['search'])){
    $from=$_POST['from'];
    $to=$_POST['to'];
    $date=$_POST['date'];
    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://skyscanner50.p.rapidapi.com/api/v1/searchFlights?origin=$from&destination=$to&date=$date&adults=1&currency=INR&countryCode=IN&market=en-GB",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: skyscanner50.p.rapidapi.com",
            "X-RapidAPI-Key: 2782ef3402msh23f10961ae392f6p1794a0jsn3f4116959f9d"
        ],
    ]);
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response["price['amount']"];
    }

?> -->


</section>




<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> abcdefg@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Chennai, Vellore - 632014 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created for <span>IWP J component</span> | all rights reserved! </div>

</section>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>