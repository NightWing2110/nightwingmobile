<?php
require_once "./templates/nightwingmobile/inc/header.php"
?>
<?php
require_once "./templates/nightwingmobile/inc/leftbar.php"
?> 
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="templates/nightwingmobile/img/fashion/contact1.jpg" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <ol class="breadcrumb">
          <li><a href="index.php">Home</a></li>         
          <li class="active">Liên Lạc</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->
<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
             <h2>We are wating to assist you..</h2>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                 <?php
                 if(isset($_POST['submit'])){
                   $name = $_POST['name'];
                   $email = $_POST['email'];
                   $subject = $_POST['subject'];
                   $content = $_POST['content'];
                   $queryContact = "INSERT INTO contact (name,email,subject,content) VALUE ('{$name}','{$email}','{$subject}','{$content}')";
                   $resultContact = $mysqli->query($queryContact);
                   if($resultContact){
                     header('location:index.php?msg= Thêm liên lạc thành công');
                   }else{
                     echo "Có lỗi khi thêm liên lạc. Vui lòng thử lại!!!";
                   }
                 }
                 ?>
                   <form class="comments-form contact-form" action="" method="POST">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Your Name" name="name" class="form-control" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="email" placeholder="Email" name="email" class="form-control" required>
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">                        
                          <input type="text" placeholder="Subject" name="subject" class="form-control" required>
                        </div>
                      </div>
                    </div>                  
                    <div class="form-group">                        
                      <textarea class="form-control" rows="3" name="content" placeholder="Message" required></textarea>
                    </div>
                    <button class="aa-secondary-btn" type="submit" name="submit">Send</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>DailyShop</h4>
                     <p></p>
                     <p><span class="fa fa-home"></span>459 Ton Duc Thang, Da Nang City</p>
                     <p><span class="fa fa-phone"></span>+ 021.343.7575</p>
                     <p><span class="fa fa-envelope"></span>Email: support@dailyshop.com</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
<?php
require_once "./templates/nightwingmobile/inc/footer.php"
?>