<?php // include('connect.php');?>


<!DOCTYPE html>
<html lang="en">
   <head>

<!-- header links -->
<?php include('header.php');?>


   </head>
   <body>
      <!--Wrapper Start-->
      <div class="wrapper">


  <!--Header Start-->
  <header class="wf100 header-two">
  <?php include('head.php');?>
  </header>
  <!--Header part  End--> 

         <!--Main Content Start-->
         <div class="main-content">
            <!--Contact Us Start-->
            <div class="contact-details  p80 pagebg2">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <h3 class="stitle">Contact Information</h3>
                     </div>
                     <div class="col-md-4 col-sm-4">
                        <div class="add-box">
                           <h5>Head Office</h5>
                           <ul>
                              <li><i class="fas fa-phone"></i> <strong>Phone:</strong> 080 4576 392</li>
                              <li><i class="fas fa-building"></i> <strong>Address:</strong> <br>
                                 Street # 75, Borne Block, 5th Avenue, West Road, NY.
                              </li>
                              <li><i class="far fa-envelope"></i><strong> Email:</strong> contact@balad.com</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4">
                        <div class="add-box">
                           <h5>Balad Office</h5>
                           <ul>
                              <li><i class="fas fa-phone"></i> <strong>Phone:</strong> 080 4576 392</li>
                              <li><i class="fas fa-building"></i> <strong>Address:</strong> <br>
                                 Street # 75, Borne Block, 5th Avenue, West Road, NY.
                              </li>
                              <li><i class="far fa-envelope"></i> <strong>Email:</strong> contact@balad.com</li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-4 col-sm-4">
                        <div class="add-box">
                           <h5>Community Center</h5>
                           <ul>
                              <li><i class="fas fa-phone"></i> <strong>Phone:</strong> 080 4576 392</li>
                              <li><i class="fas fa-building"></i> <strong>Address:</strong> <br>
                                 Street # 75, Borne Block, 5th Avenue, West Road, NY.
                              </li>
                              <li><i class="far fa-envelope"></i> <strong>Email:</strong> contact@balad.com</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Contact Us Start--> 
            <!-- Google Map with Contact Form -->
            <div class="map-form p80">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-5">
                        <h3 class="stitle">Get in Touch</h3>
                        <div class="contact-form">
                           <form>
                              <ul>
                                 <li>
                                    <input type="text" placeholder="Full Name" required>
                                 </li>
                                 <li>
                                    <input type="text" placeholder="Enter Email" required>
                                 </li>
                                 <li>
                                    <input type="text" placeholder="Subject">
                                 </li>
                                 <li>
                                    <textarea placeholder="Write Message"></textarea>
                                 </li>
                                 <li>
                                    <input type="submit" value="Send Message">
                                 </li>
                              </ul>
                           </form>
                        </div>
                     </div>
                     <div class="col-md-8 col-sm-7">
                        <div class="map">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8804.76624205153!2d-74.01069098867131!3d40.71063837912478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2s!4v1546499119664"></iframe>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Google Map with Contact Form End --> 
         </div>
         <!--Main Content End--> 
         <!--Footer Start-->
        
         <!--Footer Start-->
         <footer class="home3 footer wf100">
           <?php include('footer.php');?>
         </footer>
         <!--Footer End--> 
      </div>
<!-- JS --> 
<?php include('script.php');?>
   </body>
</html>