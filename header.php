<?php

$menuLinkid = basename($_SERVER['PHP_SELF'],".php");
if($menuLinkid == "index"){
    $index='active';
}

 elseif ($menuLinkid == "contact" || "careers" || "about-us" || "privacy_policy") {
    $company='active';
}

 elseif ($menuLinkid == "salesandservice" || "salesforceapp" || "salesforcecommunities" || "salesforcesupport") {
    $solutions='active';
}

?>
   <!-- header======================-->
   <header>
      <div class="tw-header">
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

                     <!-- <li class="nav-item <?php echo $solutions; ?>"><a class="nav-link" href="#">Solutions</a></li> -->

                     <li class="nav-item dropdown <?php echo $solutions; ?>" data-animations="fadeInDown">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Solutions
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li><a href="salesandservice.php">Sales and service cloud</a></li>
                           <li><a href="salesforceapp.php">Force.com app development</a></li>
                           <li><a href="salesforcecommunities.php">Sales Force communities</a></li>
                           <li><a href="salesforcesupport.php">Support and Management</a></li>
                           <li><a href="#">Salesforce cloud </a></li>
                        </ul>
                     </li>

                     <!-- <li class="nav-item <?php echo $frameworks; ?>"><a class="nav-link" href="#">Frame Works</a></li> -->
                     
                    

                     <li class="nav-item dropdown tw-megamenu-wrapper">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Technology Services
                           <span class="tw-indicator">
                              <i class="fa fa-angle-down"></i>
                           </span>
                        </a>
                        <div id="tw-megamenu" class="dropdown-menu tw-mega-menu">
                           <div class="row">
                              <div class="col-md-12 col-lg-4 no-padding">
                                 <ul>
                                    <li class="tw-megamenu-title">
                                       <h3>Mobility</h3>
                                    </li>
                                 <li><a href="#">Mobile APP development</a></li>
                                 <li><a href="#">Enterprise Mobility Solutions</a></li>
                                 </ul>
                                 <!-- End UL -->
                              </div>
                              <!-- End Col -->
                              <div class="col-md-12 col-lg-4 no-padding">
                                 <ul>
                                    <li class="tw-megamenu-title">
                                       <h3>Web Services</h3>
                                    </li>
                                      <li><a href="#">Web Development</a></li>
                                 <li><a href="#">e-Commerce Development</a></li>
                                 <li><a href="#">Enterprise Portal Solutions</a></li>
                                 <li><a href="#">Search Engine Optimisation</a></li>
                                 <li><a href="#">Keyword research</a></li>
                                 </ul>
                                 <!-- End Ul -->
                              </div>
                              <!-- End Col -->
                              <div class="col-md-12 col-lg-4 no-padding">
                                 <ul>
                                    <li class="tw-megamenu-title">
                                       <h3>Cloud & Hosting</h3>
                                    </li>
                                     <li><a href="#">Amazon Web Services</a></li>
                                 <li><a href="#">Azure Services</a></li>
                                 <li><a href="#">Managed Server Support Services</a></li>
                                 <li><a href="#">Cloud Computing</a></li>
                                 </ul>
                                 <!-- End UL -->
                              </div>
                              
                              <!-- End Col -->
                              
                              <!-- End Col -->
                           </div>
                           <!-- End Row -->
                        </div>
                        <!-- End of Mega menu -->
                     </li>
                     <!-- End MegaMenu -->
                     


                     <li class="nav-item dropdown tw-megamenu-wrapper">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           Support Services
                           <span class="tw-indicator">
                              <i class="fa fa-angle-down"></i>
                           </span>
                        </a>
                        <div id="tw-megamenu" class="dropdown-menu tw-mega-menu">
                           <div class="row">
                              <div class="col-md-12 col-lg-4 no-padding">
                                 <ul>
                                    <li class="tw-megamenu-title">
                                       <h3>Application & Infrastructure</h3>
                                    </li>
                                 <li><a href="#">Enterprise Application Support</a></li>
                                 <li><a href="#">Application Development & Integration</a></li>
                                 <li><a href="#">IT Helpdesk & Remote Support</a></li>
                                 <li><a href="#">Infrastructure as a Service</a></li>
                                 <li><a href="#">Automation</a></li>

                                 </ul>
                                 <!-- End UL -->
                              </div>
                              <!-- End Col -->
                              <div class="col-md-12 col-lg-4 no-padding">
                                 <ul>
                                    <li class="tw-megamenu-title">
                                       <h3>Delivery Models</h3>
                                    </li>
                                     <li><a href="#">Managed Services</a></li>
                                 <li><a href="#">Shared Services</a></li>
                                 <li><a href="#">Architecture and Roadmap</a></li>
                                 <li><a href="#">Project Management</a></li>
                                 </ul>
                                 <!-- End UL -->
                              </div>
                              <!-- End Col -->
                              <div class="col-md-12 col-lg-4 no-padding">
                                 <ul>
                                    <li class="tw-megamenu-title">
                                       <h3>Resourcing Services</h3>
                                    </li>
                                      <li><a href="#">Augmentation</a></li>
                                 <li><a href="#">Consulting</a></li>
                                 </ul>
                                 <!-- End Ul -->
                              </div>
                              <!-- End Col -->
                              
                              <!-- End Col -->
                           </div>
                           <!-- End Row -->
                        </div>
                        <!-- End of Mega menu -->
                     </li>

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
               <!-- End of offcanvas -->
            </nav>
            <!-- End of Nav -->
         </div>
         <!-- End of Container -->
      </div>
      <!-- End tw head -->
   </header>
   <!-- End of Header area=-->




                     <!-- <li class="nav-item dropdown <?php echo $services; ?>" data-animations="fadeInDown">
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
                     </li> -->