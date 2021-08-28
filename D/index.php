<?php
 include('connect.php');
    
    if (isset($_POST['join'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $domain = $_POST['domain'];  

        $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO `users`(`name`,`email`,`phoneno`,`domain`) VALUES('$name','$email','$phoneno','$domain')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('YOU JOINED SUCCESSFULLY!!')</script>";
                    $mobileno = "";
                    $email = "";
                    $_POST['password'] = "";
                    
                } else {
                    echo "<script>alert('UNABLE TO JOIN, TRY AGAIN!')</script>";
                }
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";
            }

        
            
    } 
?>

<?php
 include('connect.php');
    
    if (isset($_POST['contact'])) {

        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];  

        $sql = $conn->query("INSERT INTO `contact`(`name`,`email`,`msg`) VALUES('$name','$email','$msg')");
       
        if($sql == true)
        {
            echo "<script>alert('WE GOT YOUR MESSAGE')</script>";
            header('location:index.php');

        }
        else{
            echo "<script>alert(' MESSAGE not sent')</script>";
        }
            
            
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

  <section id="logo">
    <div class="logo">
      <img src="./images/finallogo.png">
    </div>
    
  </section>









    <!-- Header -->
    <section id="header">
      <div class="header container">
        <div class="nav-bar">
          <div class="brand">
            <a href="#hero"><h1><span>O</span>ptizen</h1></a>
          </div>
          <div class="nav-list">
            <div class="hamburger"><div class="bar"></div></div>
            <ul>
              <li><a href="#hero" data-after="Home">Home</a></li>
              <li><a href="#domain" data-after="domain">Domain</a></li>
              <li><a href="#opro" data-after="projects">Projects</a></li>
              <li><a href="#reg" data-after="reg">Registration</a></li>
              <li><a href="#mentors" data-after="mentors">Mentors</a></li>
              <li><a href="#contact" data-after="contact">Contact Us</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </section>
    <!-- End Header -->



   <!--hero section-->
   <section id=hero>
       <div class="hero container">
           <div>
               
               <h1>Optizen is an initative of the SRM IST Students to work in the field of optics and related technologies.The vision of this group is to create a platform for innovation and exposing students to new challenges awaiting for them in field of Optics and Photonics.</h1>
               <a href="https://www.srmist.edu.in/" type="botton" class="cta">Visit SRM site</a>
           </div>
       </div>
   </section>
   <!-- Domain Info-->
   <section id="domain">
       <div class="domain container">
           <div class="domain-top">
              <h1 class="section-title">Doma<span>i</span>ns</h1>
              <p>Domain gives a descriptive idea of a group by dividing it into particular segments that are necessary and a fundamental part of the group.Domains give a brief idea about what a group comprises off.</p>
            </div>
           <div class="domain-bottom">
               <div class="domain-item1">
                   <div class="icon"> <img src="https://img.icons8.com/color/48/000000/circuit.png" alt="ICON"> 
                    </div>
                    <h2>optics and Spectroscopy</h2>
                    <p>This domain deals with Space optics, Quantum optics, Medical optics and Atomic Optics for building projects to solve real time problems and medical innovation through engineering.</p>
               </div>
              
               <div class="domain-item2">
                    <div class="icon"> <img src="https://img.icons8.com/color/48/000000/circuit.png" alt="ICON"> 
                     </div>
                 <h2>Optical Sensors</h2>
                 <p>This domain deals with different transduction (Opto-mechanical, Optoelectronic) and sensing applications for real time problems</p>
               </div>

               <div class="domain-item3">
                <div class="icon"> <img src="https://img.icons8.com/color/48/000000/circuit.png" alt="ICON"> 
                 </div>
                 <h2>Optical matarials</h2>
                 <p>This domain deals with new optical matarials for sensors, for generation and control of light.Optical matarial is a real gem domain.</p>
            </div>

          
            <div class="domain-item4">
                <div class="icon"> <img src="https://img.icons8.com/color/48/000000/circuit.png" alt="ICON"> 
                 </div>
                 <h2>Communication</h2>
                 <p>This domain deals optical communication for future generation applications - VLC, FSO, UWOC, IsOWC, etc</p>
            </div>
            


            <div class="domain-item5">
                <div class="icon"> <img src="https://img.icons8.com/color/48/000000/circuit.png" alt="ICON"> 
                 </div>
                 <h2>ML, AI, Coding</h2>
                 <p>This domain will be deploying various ML models for design of devices and networks, AI and Deep learning for image processing, remote sensing, ranging applications, Coding in Multilanguage for information processing.</p>
            </div>
        
               




           </div>
       </div>
       <!--ONGOING PROJECTS-->

      <section id="opro">
          <div class="opro container">
              <div class="opro-head">
              <h1 class="section-title">ongoing<span> projects</span></h1>
              </div>
          <div class="allopro">
            <div class="opro-items">
                <div class="opro-info">
                  <h1>OPTI-CHARGE</h1>
                  <h2>lead by Optical sensors</h2>
                  <p>Opticharge:
                    The charging time of an electric car would take nearly 8 to 10 hours on a normal 15kW socket. Here we use an optical sensor, which diverts all the sunrays to a single beam ray, then we can incident this beam to the battery of the electric car for faster charging.</p>
                </div>
                <div class="opro-image">
                <img src="./images/project .jpg" alt="IMG">
                </div>
            </div>      <div class="opro-items">
                <div class="opro-info">
                  <h1>ac sun filter</h1>
                  <h2>lead by optical sensors department</h2>
                  <p>When the sun rays fall on the moon, it reflects the rays on to the earth. Moon rays are cool even though the sun rays are hot. The idea is “Can we use moon characteristics to develop a filter which filters all the sun rays and only gives the cool rays to the other side?”</p>
                </div>
                <div class="opro-image">
                <img src="./images/project .jpg" alt="IMG">
                </div>
            </div>      <div class="opro-items">
                <div class="opro-info">
                  <h1>Wifi using sunlight</h1>
                  <h2>lead by Communication department</h2>
                  <p>
                    IR remote control send out pulses of infrared light in the form of Manchester code to the ir light receiver of the device where the microprocessor of the device understands.
                    The infrared receiver sits on the front of the device where it can easily see the signal coming from the remote control.</p>
                </div>
                <div class="opro-image">
                <img src="./images/project .jpg" alt="IMG">
                </div>
            </div>      <div class="opro-items">
                <div class="opro-info">
                  <h1>moving object in space using laser</h1>
                  <h2>lead by communication department</h2>
                  <p>Reflecting the laser from the surface just transfers momentum from the photon to the object. The energy transfer is very small as the reflected photon will have a small red shift compared to the incident photon (at least for objects moving slowly with respect to  absorb more energy.</p>
                </div>
                <div class="opro-image">
                <img src="./images/project .jpg" alt="IMG">
                </div>
            </div>      <div class="opro-items">
                <div class="opro-info">
                  <h1>OTDR (optical time domain reflectometer)</h1>
                  <h2>lead by Optical matarials department</h2>
                  <p>lenses, mirror, windows, prisms, polarizers, detectors and modulators, we have heard all these terms constantly during our classes or on any hand on projects, in the following domain we are going to go in the formation and outfit of optical materials which are fabricated into such optical elements which will in due course will service into authentic projects. The first project we are working on the border security i.e., to identify and prevent the invaders to enter the marches of the country using OTDR (Optical time domain reflectometer)</p>
                </div>
                <div class="opro-image">
                <img src="./images/project .jpg" alt="IMG">
                </div>
            </div>
            <div class="opro-items">
                <div class="opro-info">
                  <h1>advanced drone mechanism</h1>
                  <h2>lead by ml/ai , coding department</h2>
                  <p>This is a very fascinating project which the coding department is working on. The department  is wokring on new advanced mechanisms which can be implemented on alredy created drones and the new advanced drones can be used in defense sites. the website you are currently visiting is also created by this department</p>
                </div>
                <div class="opro-image">
                <img src="./images/project .jpg" alt="IMG">
                </div>
            </div>



          </div>
          </div>

      </section>


      

<!--REG-->
<section id="reg">
  <div class="reg container">
    <div>
      <h1 class="section-title">reg<span>i</span>str<span>a</span>tion</h1>
    </div>
    <p>you are at the perfect spot. register to be a part of optizen and grow your skills with us and make yourself prepared for the upcoming challenges in life.</p>
  
    <div class="regform">
      <form action="" method="POST" target="">
        <h3>Register Here</h3>
        <div class="inputBox">
          <input type="text" name="name" placeholder="Name">
        </div>
        <div class="inputBox">
          <input type="text" name="email" placeholder="Email">
        </div>
        <div class="inputBox">
          <input type="text" name="phoneno" placeholder="Phone-Number">
        </div>
        <div class="inputBox"  >
          <select name="domain" id="domain" >
            <option disabled selected value> --select--</option>
            <option value="OPTICS AND SPECTROSCOPY">OPTICS AND SPECTROSCOPY</option>
            <option value="OPTICAL SENSORS">OPTICAL SENSORS</option>
            <option value="OPTICAL MATARIALS">OPTICAL MATARIALS</option>
            <option value="COMMUNICATION">COMMUNICATION</option>
            <option value="ML,AI,CODING">ML, AI, CODING</option>
          </select>
        </div>
        
        <div class="inputBox">
          <input type="submit" name="join" value="Join Us">
        </div>
      </form>
    </div>
  </div> 

  
</section>


<!--Mentors-->

<section id="mentors">
    <div class="mentors">
      
      
      <div class="heading">
      <h1 class="section-title">M<span>e</span>ntors </h1>
    </div>


     <div class="mentor1">
       <h2>Dr. Shanthi Prince</h2>
       <h2>shanthip@srmist.edu.in</h2>
      </div>

      <div class="mentor1">
        <h2>Dr. R. Manohari</h2>
        <h2>manoharr1@srmist.edu.in</h2>
       </div>

       <div class="mentor1">
        <h2> Dr. Bandaruramakrishna B</h2>
        
        <h2>bandarub@srmist.edu.in</h2>
       </div>

       <div class="mentor1">
        <h2>Dr. Sathiyan S</h2>
        
        <h2>sathiyas@srmist.edu.in</h2>
       </div>

       <div class="mentor1">
        <h2> Mrs. Suryakala SV</h2>
        
        <h2>suryakas@srmist.edu.in</h2>
       </div>

       <div class="mentor1">
        <h2> Mr. Sanjaykumar R</h2>
        
        <h2>sanjaykr@srmist.edu.in</h2>
       </div>

    

       <div class="mentor1">
        <h2>Ms. S .Diana Emerald Aasha</h2>
        
        <h2> dianaems@srmist.edu.in</h2>
       </div>
      
     
       <div class="mentor1">
        <h2> Mr. Aravind J</h2>
        
        <h2>aravindjva@gmail.com </h2>
       </div>  

       <div class="mentor1">
        <h2> Mr. Vivek Maik</h2>
        
        <h2>vivekmaik@srmist.edu.in</h2>
       </div>  
       

    </div>
</section>


<!--COntact us-->
<section id="contact">
  <div class="contact container">
    <div>
      <h1 class="section-title">CONtact <span>us</span></h1>
    </div>
    
      <div class="contactform">
        <h3>Send Message</h3>
        <form action="" method="POST" target="_blank">
        <div class="inputBox">
          <input type="text" name="name" placeholder="Name">
        </div>
        <div class="inputBox">
          <input type="text" name="email" placeholder="Email">
        </div>
        <div class="inputBox">
          <textarea name="msg" id="mes" placeholder="Message" cols="" rows="4"></textarea>
        </div>
        <div class="inputBox">
          <input type="submit" name="contact" value="Send">
        </div> 
        </form> 
      </div>
   
    <div class="contact-items">
      <div class="contact-item">
        <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/phone-not-being-used.png"/></div>
         <div class="contact-info">
           <h1>Phone</h1>
           <h2>+916303657235</h2>
           <h2>Mr. Pavan havaraju</h2>
           <h2>ECE</h2>
         </div>      
      </div>
      <div class="contact-item">
        <div class="icon"><img src="https://img.icons8.com/bubbles/50/000000/email.png"/></div>
         <div class="contact-info">
           <h1>email</h1>
           <h2>srmoptizen@gmail.com</h2>
           <h2>sb4191@srmist.edu.in</h2>
         </div>      
      </div>
      <div class="contact-item">
        <div class="icon"><img src="https://img.icons8.com/color/48/000000/teacher.png"/></div>
         <div class="contact-info">
           <h1>Faculty</h1>
           <h2>Dr. Shanthi Prince</h2>
           <h2>Professor, Dept of ECE</h2>
           <h2>Office: TP106A</h2>
         </div>      
      </div>
    </div>
  </div>

</section>




</div>















<!--Footer-->
<section id="footer">
  <div class="footer container">
    <div class="brand">
     <h1><span>o</span>ptizen</h1>
     <h2>Stay connected on...</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://instagram.com/optizen.srm?igshid=63ynumgcuyhr"><img src="https://img.icons8.com/cute-clipart/64/000000/instagram-new.png"/></a>
        </div>
      </div>
    </div>
    <p>copyright @2020 optizen. All rights reserved.</p>
  </div>
</section>

<script src="./app.js"></script>

</body>
</html>