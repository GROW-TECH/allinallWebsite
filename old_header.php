<?php

$menuLinkid = basename($_SERVER['PHP_SELF'],".php");
if($menuLinkid == "index"){
    $index='active';
}

 elseif ($menuLinkid == "about-us") {
    $company='active';
}

 elseif ($menuLinkid == "contact") {
    $company='active';
}

 elseif ($menuLinkid == "careers") {
    $company='active';
}

 elseif ($menuLinkid == "privacy_policy") {
    $company='active';
}

?>


<style type="text/css">

/*li ul { display: none; }*/

/*ul li a {
  display: block;
  padding: 5px;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
}*/


/* Display the dropdown */


/*li:hover > ul {
  display: block;
  position: absolute;
}

li:hover li { float: none; }*/

/* Displays second level dropdowns to the right of the first level dropdown */


/*ul ul ul {
  left: 90%;
  top: 0;
  width: 100%;
  background-color: #fff;
}
*/
/* Simple clearfix */



/*ul:before,
ul:after {
  content: " "; 
  display: table; 

ul:after { clear: both; }*/


/*
#cssmenu,#cssmenu ul,#cssmenu ul li,#cssmenu ul li a,#cssmenu #head-mobile{border:0;list-style:none;line-height:1;display:block;position:relative;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
/*#cssmenu > ul > li > a{padding:17px;font-size:12px;letter-spacing:1px;text-decoration:none;color:#ddd;font-weight:700;}
#cssmenu ul ul{position:absolute;left:-9999px}
#cssmenu ul ul li{height:0;-webkit-transition:all .25s ease;-ms-transition:all .25s ease;background:#333;transition:all .25s ease}
#cssmenu li:hover > ul{left:auto}
#cssmenu li:hover > ul > li{height:35px}
#cssmenu ul ul ul{margin-left:100%;top:0}
#cssmenu ul ul li a{border-bottom:1px solid rgba(150,150,150,0.15);padding:11px 15px;width:170px;font-size:12px;text-decoration:none;color:#ddd;font-weight:400;}
#cssmenu ul ul li.has-sub > a:after{position:absolute;top:16px;right:11px;width:8px;height:2px;display:block;background:#ddd;content:''}*/


</style>
<header>
      <div class="tw-head">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
               <a class="navbar-brand tw-nav-brand" href="index.php">
                  <img src="images/logo-513x128.png" style="width: 250px;" alt="">
               </a>
               <!-- End of Navbar Brand -->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- End of Navbar toggler -->
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item <?php echo $index; ?>"><a class="nav-link" href="index.php">Home</a></li>

<!--                      <li class="nav-item <?php echo $solutions; ?>"><a class="nav-link" href="#">Solutions</a></li>

                     <li class="nav-item <?php echo $frameworks; ?>"><a class="nav-link" href="#">Frame Works</a></li> -->

                     <li class="nav-item dropdown <?php echo $company; ?>">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Company
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="about-us.php">About</a></li>
                           <li><a href="careers.php">Careers</a></li>
                           <li><a href="#">Customers</a></li>
                           <li><a href="contact.php">Contact</a></li>
                           <li><a href="privacy_policy.php">Privacy Policy</a></li>

                        </ul>
                        <!-- End of Dropdown menu -->
                     </li>


                     <li class="nav-item dropdown <?php echo $services; ?>" data-animations="fadeInDown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Technology Services
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="#">Mobility <i class="fa fa-angle-double-right"></i> </a>

                              <!-- Submenu -->
                                 <ul>
                                 <li><a href="#">Mobile APP development</a></li>
                                 <li><a href="#">Enterprise Mobility Solutions</a></li>
                                 </ul>
                              <!-- End Submenu  -->
                           </li>
                           <li><a href="#">Cloud & Hosting <i class="fa fa-angle-double-right"></i></a>
                              <!-- Submenu -->
                                 <ul>
                                 <li><a href="#">Amazon Web Services</a></li>
                                 <li><a href="#">Azure Services</a></li>
                                 <li><a href="#">Managed Server Support Services</a></li>
                                 <li><a href="#">Cloud Computing</a></li>
                                 </ul>
                              <!-- End Submenu  -->
                           </li>
                           <li><a href="#">Web Services <i class="fa fa-angle-double-right"></i></a>
                              <!-- Submenu -->
                                 <ul>
                                 <li><a href="#">Web Development</a></li>
                                 <li><a href="#">e-Commerce Development</a></li>
                                 <li><a href="#">Enterprise Portal Solutions</a></li>
                                 <li><a href="#">Search Engine Optimisation</a></li>
                                 <li><a href="#">Keyword research</a></li>
                                 </ul>
                              <!-- End Submenu  -->
                           </li>
                         
                        </ul>
                     </li>


                     <li class="nav-item dropdown <?php echo $services; ?>" data-animations="fadeInDown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Services
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="#">Salesforce cloud </a></li>
                           <li><a href="#">Sales and service cloud</a></li>
                           <li><a href="#">Force.com app development</a></li>
                           <li><a href="#">Sales Force communities</a></li>
                           <li><a href="#">Support and management</a></li>
                        </ul>
                     </li>
                        


                    <li class="nav-item dropdown <?php echo $services; ?>" data-animations="fadeInDown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Support Services
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="#">Mobility <i class="fa fa-angle-double-right"></i> </a>

                              <!-- Submenu -->
                                 <ul>
                                 <li><a href="#">Mobile APP development</a></li>
                                 <li><a href="#">Enterprise Mobility Solutions</a></li>
                                 </ul>
                              <!-- End Submenu  -->
                           </li>
                           <li><a href="#">Cloud & Hosting <i class="fa fa-angle-double-right"></i></a>
                              <!-- Submenu -->
                                 <ul>
                                 <li><a href="#">Amazon Web Services</a></li>
                                 <li><a href="#">Azure Services</a></li>
                                 <li><a href="#">Managed Server Support Services</a></li>
                                 <li><a href="#">Cloud Computing</a></li>
                                 </ul>
                              <!-- End Submenu  -->
                           </li>
                           <li><a href="#">Web Services <i class="fa fa-angle-double-right"></i></a>
                              <!-- Submenu -->
                                 <ul>
                                 <li><a href="#">Web Development</a></li>
                                 <li><a href="#">e-Commerce Development</a></li>
                                 <li><a href="#">Enterprise Portal Solutions</a></li>
                                 <li><a href="#">Search Engine Optimisation</a></li>
                                 <li><a href="#">Keyword research</a></li>
                                 </ul>
                              <!-- End Submenu  -->
                           </li>
                         
                        </ul>
                     </li>    
                     <!-- End Dropdown -->


                     
                     
<!--                      <li class="nav-item dropdown <?php echo $careers; ?>">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Careers
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="senior_devops_engineer.php">Senior Devops Engineer</a></li>
                           <li><a href="devops_engineer.php">Devops Engineer</a></li>
                           <li><a href="java_developer.php">Java Developer</a></li>
                           <li><a href="automation_test_lead.php">Automation Test Lead</a></li>
                           <li><a href="automation_test_analyst.php">Automation Test Analyst</a></li>
                           <li><a href="test_analyst.php">Test Analyst</a></li>
                        </ul>
                     </li> -->
                        <!-- End of Dropdown menu -->
                     <!-- End Dropdown -->
                     
                  
                  
                  </ul>
                  <!-- End Navbar Nav -->
               </div>
               <!-- End of navbar collapse -->

               <div class="tw-off-search d-none d-lg-inline-block" style="width: 70px;">
                  
                  <div class="tw-menu-bar-default tw-menu-bar" id="open-button">
                     <span></span>
                     <span></span>
                     <span></span>
                  </div>
               </div>
               <!-- End off canvas menu -->
            </nav>




            
            <!-- End of Nav -->
         </div>
         <!-- End of Container -->
      </div>
      <!-- End tw head -->
   </header>