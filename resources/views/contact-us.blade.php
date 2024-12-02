@extends('frontend.layouts.frontend')
@section('title','Contact Us')
@section('content')
<div class="page-content">

    <!-- BREADCRUMB ROW -->
   <div class="bg-gray-light p-tb20">
       <div class="container">
           <ul class="wt-breadcrumb breadcrumb-style-2">
               <li><a href="javascript:void(0);"><i class="fa fa-home"></i> Home</a></li>
               <li>Contact</li>
           </ul>
       </div>
   </div>
   <!-- BREADCRUMB ROW END -->

   <!-- MAP BLOCK START -->
   <div class="section-full">

       <div class="gmap-outline">
           <div id="gmap_canvas" class="google-map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.010148022944!2d-0.13445098404809602!3d51.51302981811226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d31cdfefbb%3A0x27d5339f1859d7f1!2s62%20Dean%20St%2C%20London%20W1D%204QF%2C%20UK!5e0!3m2!1sen!2sin!4v1666266891426!5m2!1sen!2sin" width="600" height="450"></iframe>
           </div>
       </div>

   </div>
   <!-- MAP BLOCK END -->

   <!-- SECTION CONTENT -->
   <div class="section-full p-t80 p-b50">
       <div class="container">
           <div class="row">
               <div class="wt-box col-md-6">
                   <h4 class="text-uppercase">Contact Detail </h4>
                   <div class="wt-separator-outer m-b30">
                      <div class="wt-separator site-bg-primary"></div>
                  </div>

                   <div class="m-b30">
                       <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix bg-gray">
                           <div class="icon-sm">
                               <span class="icon-cell site-text-primary">
                                   <i class="fa fa-phone"></i>
                               </span>
                           </div>
                           <div class="icon-content text-black">
                               <h5 class="wt-tilte text-uppercase">Phone</h5>
                               <p>+251 000 000 0000</p>
                           </div>
                       </div>
                   </div>

                   <div class="m-b30">
                       <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix bg-gray">
                           <div class="icon-sm">
                               <span class="icon-cell site-text-primary">
                                   <i class="fa fa-envelope"></i>
                               </span>
                           </div>
                           <div class="icon-content text-black">
                               <h5 class="wt-tilte text-uppercase">Email</h5>
                               <p>info@o3em.com</p>
                           </div>
                       </div>
                   </div>



                   <div class="m-b30">
                       <div class="wt-icon-box-wraper bx-style-1 p-a15 left clearfix bg-gray">
                           <div class="icon-sm">
                               <span class="icon-cell site-text-primary">
                                   <i class="fa fa-map-marker"></i>
                               </span>
                           </div>
                           <div class="icon-content text-black">
                               <h5 class="wt-tilte text-uppercase">Address</h5>
                               <p>Addis Ababa, Ethiopia</p>
                           </div>
                       </div>
                   </div>

               </div>
               <div class="wt-box col-md-6 m-b30">
                   <h4 class="text-uppercase">Contact Form </h4>
                   <div class="wt-separator-outer m-b30">
                      <div class="wt-separator site-bg-primary"></div>
                   </div>

                   <form class="cons-contact-form" method="post" action="https://thewebmax.org/bitinvest/form-handler.php">
                       <div class="form-group">
                           <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-user"></i></span>
                               <input name="username" type="text" required class="form-control" placeholder="Name">
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="input-group">
                               <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                               <input name="email" type="text" class="form-control" required placeholder="Email">
                           </div>
                       </div>
                       <div class="form-group">
                           <div class="input-group">
                               <span class="input-group-addon v-align-t"><i class="fa fa-pencil"></i></span>
                               <textarea name="message" rows="5" class="form-control Message" required placeholder="Message"></textarea>
                           </div>
                       </div>
                       <div class="text-right">
                           <button name="submit" type="submit" value="Submit" class="site-button-secondry  m-r15">Submit</button>
                           <button name="Resat" type="reset" value="Reset"  class="site-button " >Reset</button>
                       </div>
                   </form>

               </div>
           </div>
       </div>
   </div>
       <!-- CONTENT END -->
</div>
@endsection
