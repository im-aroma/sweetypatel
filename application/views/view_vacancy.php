<!-- section 1 -->
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
                             <input type="file" class="form-control" id="email1" name="form[file]" placeholder="Upload Image">
                             <span class="input-group-addon inlineicon"> <span class="fas fa-file-upload"></span> </span>
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