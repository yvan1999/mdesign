<?php // include('connect.php');?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Login/Sign Up</title>

<!-- header links -->
<?php include('header.php');?>

   </head>
   <body>

  <!--Header Start-->
  <header class="wf100 header-two">
  <?php include('head.php');?>
  </header>
  <!--Header part  End--> 

         <!--Sub Header End--> 
         <!--Main Content Start-->
         <div class="main-content p80">
            <div class="my-account">
               <div class="container">
                  <div class="row">
                     <div class="col-md-4 col-sm-5">
                        <div class="login-account">
                           <p>Already Have An Account?</p>

                           <h4>Sign In</h4>
                           <ul>
                              <li>
                                 <input type="email" placeholder="Enter Email" class="linput">
                              </li>
                              <li>
                                 <input type="Password" placeholder="Enter Password" class="linput">
                              </li>
                              <li>
                                 <input type="checkbox"> Remember Me <a class="pull-right" href="#" style="background-color: #fff; color: black; padding: 5px; border-radius: 5px;">Forgot Password?</a> 
                              </li>
                              <li>
                                 <input value="Login Account" type="submit">
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-8 col-sm-7">
                        <div class="row">
                           <div class="register-account">
                              <ul>
                                 <li class="col-md-12">
                                    <p>Not Already A Member</p>
                                    <h4>Create A new Account Here</h4>
                                 </li>
                                 <li class="col-md-6">
                                    <input type="text" placeholder="Your Name" class="linput">
                                 </li>
                                 <li class="col-md-6">
                                    <input type="text" placeholder="Email" class="linput">
                                 </li>
                                 <li class="col-md-6">
                                    <input type="text" placeholder="Contact Number" class="linput">
                                 </li>
                                 <li class="col-md-6">
                                    <input type="text" placeholder="Username" class="linput">
                                 </li>
                                 <li class="col-md-6">
                                    <input type="Password" placeholder="Password" class="linput">
                                 </li>
                                 <li class="col-md-6">
                                    <input type="Password" placeholder="Confirm Password" class="linput">
                                 </li>
                                 <li class="col-md-12">
                                    <input type="checkbox"> I agree to the Terms of <a href="#">Service &amp; Privacy Policy</a> 
                                 </li>
                                 <li class="col-md-12">
                                    <input value="Create Account" type="submit">
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       
         <!--Footer Start--> 
         <!--Footer Start-->
         <footer class="home3 footer wf100">
           <?php include('footer.php');?>
         </footer>
         <!--Footer End--> 
      </div>
      <!--Wrapper End--> 
<!-- JS --> 
<?php include('script.php');?>

   </body>
</html>