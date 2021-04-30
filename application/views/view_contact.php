<?php


if(isset($_REQUEST['submit'])){
  $name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$mobile=$_REQUEST['mobile'];
$message=$_REQUEST['message'];
  $to = "seosolution076@gmail.com";
  $subject = $name.$mobile;
  $txt =$message;
  $headers = "From:".$email."\r\n"; 

if(mail($to,$subject,$txt,$headers)){
  echo "<script> alert('Mail Sent Succesfully.');</script>";
}else{
  echo "<script> alert('Somthing Wrong Please Try Again.');</script>";
}

}

?>



<!-- section 1 -->
<div class="elementor-widget-container">		
    <section class="position-relative block-cat-text block-text8 bg-lightgrey section-40 ">
      <div class="container bg-content">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <h2 class="mb-0 pb-0 font- text-dark font-weight-bold wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              Contact Us        </h2>
          </div>
          <div class="col-md-6 text-center text-lg-right">
            <p class="lead mb-0 pb-0 font- text-dark font-weight-bold wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Online Support 24/7</p>
          </div>
        </div>
      </div>
    </section>
 </div>


      <!-- section 2 -->
      <section class="block-cat-text block-text2 bg-white section-80 ">
        <div class="container">
           <div class="row y-middle">
              <div class="col-lg-6 pr-lg-5 text-center text-lg-left">
                 <div class="text-center text-md-left">
                    <div data-elementor-setting-key="title" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing text-dark font- mb-0 font-weight-bold">We're here to answer your questions</div>
                    <h2 data-elementor-setting-key="subtitle" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing mb-0 font- text-dark font-weight-bold wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Working 9am - 2am Mon/Sunday.</h2>
                    <p data-elementor-setting-key="desc" data-elementor-inline-editing-toolbar="none" class="elementor-inline-editing line-height-30 mb-0 font- text-opacity-5 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"></p>
                    <p style="text-align: justify; visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;" class="wow fadeInUp" data-wow-delay="0.4s">Contact Istanbul escorts - call signal , whatsaap , viber 
                       Thank You for interest in Passion Vip Istanbul Escorts Agency.
                       Any Questions Please Call Us, Whatsapp, Signal, Telegram Email or Use Form Below:
                    </p>
                    <h5 class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Email : exampleemail@gmail.com</h5>
                    <h5 class="wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                       CALL : +90 555 026 70 00
                       <p class="wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;"></p>
                    </h5>
                 </div>
              </div>
              <div class="col-lg-6 pl-lg-5">
                 <img data-src="assets/img/aboutus.jpg" class="img-fluid mt-5 mt-lg-0 lazy wow fadeInUp  loaded" alt="We're here to answer your questions" data-wow-delay="0.8s" src="assets/img/aboutus.jpg" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;" data-was-processed="true">
              </div>
           </div>
        </div>
     </section>


     <!-- section 3 -->
     <section class="block-cat-contact block-contact1 bg-light section-100 ">
        <div class="container">
           <div class="row">
              <div class=" col-md-8 mx-auto pr-lg-5">
                 <div id="ajax_contactform_output_ok" style="display:none;">
                    <div class="alert alert-success text-center small"> <i class="fa fa-check"></i> Message Sent Successfully. </div>
                 </div>
                 <div id="ajax_contactform_output_error" style="display:none;">
                    <div class="alert alert-danger text-center small"> <i class="fa fa-times"></i> Error Sending Message. </div>
                 </div>
                 <form method="post" action="" id="contactusform">
                    <input type="hidden" name="report" id="reportpostid" value="">
                    <div id="html_element"></div>
                    <div class="row">
                       <div class="col-12 col-md-6">
                          <div class="controls mb-3 position-relative"> 
                             <input type="text" class="form-control" name="form[name]" id="name" placeholder="First Name" onchange="jQuery('#showcodeb').show();">
                             <span class="input-group-addon inlineicon"> <span class="fa fa-user"></span> </span> 
                          </div>
                       </div>
                       <div class="col-12 col-md-6">
                          <div class="controls mb-3 position-relative">
                             <input type="text" class="form-control" id="phone" name="form[phone]" placeholder="Phone">
                             <span class="input-group-addon inlineicon"> <span class="fa fa-phone"></span> </span> 
                          </div>
                       </div>
                       <div class="col-12">
                          <div class="controls mb-3 position-relative"> 
                             <input type="text" class="form-control" id="email1" name="form[email]" placeholder="Email">
                             <span class="input-group-addon inlineicon"> <span class="fa fa-envelope"></span> </span>
                          </div>
                       </div>
                       <div class="col-12">
                          <div class="controls mb-3 position-relative">
                             <textarea name="form[message]" class="form-control" id="message" style="height:150px; width:100%;" placeholder="Message"></textarea>
                          </div>
                       </div>
                       <div class="col-12" id="showcodeb" style="display:none;">
                          <div class="controls mb-3 position-relative">
                             <input type="text" name="contact_code" placeholder="Security: 9 + 7 = ?" class="form-control" tabindex="5" id="code">
                             <span class="input-group-addon inlineicon"> <span class="fa fa-shield-check"></span> </span>
                          </div>
                       </div>
                       <div class="col-12">
                          <button type="button" onclick="CheckFormData();" id="btncontactform" class="btn btn-primary btn-xl btn-block rounded-0 py-2 px-3" disabled="">Send Message</button>	
                       </div>
                       <div class="col-12 my-3 "> 
                          <input name="agreetc" type="checkbox" id="agreetc" onchange="UpdateTCA()"> Accept <a href="#">Terms &amp; conditions</a> 
                       </div>
                    </div>
                 </form>
    
              </div>
           </div>
        </div>
     </section>
