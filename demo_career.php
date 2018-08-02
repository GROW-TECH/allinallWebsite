<!doctype html>
<html lang="en">

<head>
   <!-- Basic Page Needs =======================================-->
   <meta charset="utf-8">

   <!-- Mobile Specific Metas ========================== -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Site Title -->
   <title>Careers</title>

   <!-- CSS
      ==================================================== -->
   <!--Font Awesome -->
   <link rel="stylesheet" href="css/font-awesome.min.css" />

   <!--Animate CSS -->
   <link rel="stylesheet" href="css/animate.css" />

   <!-- Iconic Fonts -->
   <link rel="stylesheet" href="css/icofonts.css" />

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">

   <!-- Owl Carousel -->
   <link rel="stylesheet" href="css/owlcarousel.min.css" />

   <!-- Video Popup -->
   <link rel="stylesheet" href="css/magnific-popup.css" />

   <!--Style CSS -->
   <link rel="stylesheet" href="css/style.css">

   <!--Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
<style>
* {box-sizing: border-box}

/* Style the tab */
.tab {
    float: left;
/*    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;*/
    height: 100px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    /*background-color: inherit;*/
    color: black;
    padding: 6px 40px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
</style>
</head>
<body>

   <!-- Right Side Shutter -->
   <?php include 'right_shutter.php'; ?>
   <!-- End Right SideShuuter -->



   <!-- Top Bar end -->


   <!--============================ Header======================-->
   
   <?php include 'header.php'; ?>

   <!--=========================== End of Header Area===========-->


   <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner5.jpg)">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="banner-heading">
                  <h1 class="banner-title">Careers</h1>
                  <ol class="breadcrumb">
                     <li><a href="index.php">Home</a></li>
                     <li>Careers</li>
                  </ol>
               </div>
            </div>
            <!-- Col end -->
         </div>
         <!-- Row end -->
      </div>
      <!-- Container end -->
   </div>
   <!-- Banner area end -->


<section id="main-container" class="main-container">
      <div class="container">
         <div class="row">

            <div class="col-lg-4 col-md-12">
               <div class="sidebar sidebar-left">
                  
                  <div class="widget widget-cat">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">London</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button>
</div>
</div>
</div>
 </div>

<div class="col-lg-8 col-md-12">
<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>
</div>

</div>
</div>
</section>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     

 <?php include 'footer.php'; ?>
   <!-- End Footer -->


   <!-- Javascripts File
      =============================================================================-->

   <!-- initialize jQuery Library -->
   <script src="js/jquery-2.0.0.min.js"></script>
   <!-- Popper JS -->
   <script src="js/popper.min.js"></script>
   <!-- Bootstrap jQuery -->
   <script src="js/bootstrap.min.js"></script>
   <!-- Owl Carousel -->
   <script src="js/owl-carousel.2.3.0.min.js"></script>
   <!-- Waypoint -->
   <script src="js/waypoints.min.js"></script>
   <!-- Counter Up -->
   <script src="js/jquery.counterup.min.js"></script>
   <!-- Video popUp -->
   <script src="js/jquery.magnific.popup.js"></script>
   <!-- WOW JS -->
   <script src="js/wow.min.js"></script>
   <!-- SmoothScroll -->
   <script src="js/smoothscroll.js"></script>
   <!-- Template Custom -->
   <script src="js/main.js"></script>

</body>
</html> 
