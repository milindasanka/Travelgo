
@extends('main')
<br>
<div class="box">

  <img class="img-responsive" width="100%" height="80%"src="/images/about/about.jpg" alt="header image" ></div>
  <div class="img-title">
  <div class="text-dark">
  <h1 class="display-1" style="margin-top:250px ;" color="dark"><b>CONTACT US</b> </h1>
  </div></div>

@section('content')
@section('title','|Contact')
<br><br><br>
<div class="row featurette">
  <div class="col-md-4"  style="background-color:aquamarine;" >

    <h1 class="text-blue">Contact<small> Information</small></h1>
    <hr style="height:1px;border:none;color:ffffff;background-color:ffffff;" />
<!-- This is address-->
<div class="row featurette">
  <div class="col-md-9 order-md-2">
    <p class="text-blue">TravelGo, Madhakubura, Perahettiya, Malitta, Bandarawela</p>
  </div>
  <div class="col-md-2 order-md-1">
  <img src="/images/loc.png" alt=""width="30" height="30">
  </div>
</div>
<!--end address-->

<!-- This is Telephone Number-->
<div class="row featurette">
  <div class="col-md-9 order-md-2">
    <p class="text-blue">(94) 71-3100963 <br> (94) 75-0393658<br> (94) 78-2679171 </p>
  </div>
  <div class="col-md-2 order-md-1">
  <img src="/images/tel.png" alt=""width="30" height="30">
  </div>
</div>
<!--end Telephone Number-->

<!-- This is email-->
<div class="row featurette">
  <div class="col-md-9 order-md-2">
    <p class="text-blue">sankaamazon@gmail.com</p>
  </div>
  <div class="col-md-2 order-md-1">
  <img src="/images/mail.png" alt=""width="30" height="30">
  </div>
</div>
<!--end email-->
<hr style="height:1px;border:none;color:ffffff;background-color:ffffff;" />
 </div>


    <div class="col-md-8 col-md-offset-1"   >
    <h1 class="text-dark">Contact<small> Us</small></h1>
    <!-- form-->
      <div class="row">
        <div class="col-md-12">
          <form method="post"  action="/saveTask" >
          {{csrf_field()}}
           <div class="form-group">

            <label name="text"><b>Name</b></label>
            <input id="name" name="name" class="form-control" placeholder="Enter Your Name">

            <label name="text"><b>E-mail</b></label>
            <input id="email" name="email" class="form-control" placeholder="Enter Your E-mail">

            <label name="text"><b>Subject</b></label>
            <input id="subject" name="subject" class="form-control" placeholder="Subject">

            <label name="text"><b>Message</b></label>
            <input id="message" name="message" class="form-control" placeholder="Enter Your Message">

           </div>
            <input type="submit" value="Send Message" class="btn btn-primary">
          </form>
        </div>
      </div>
       <!--end form-->
    </div>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>


</div>


<hr class="featurette-divider">

@endsection
