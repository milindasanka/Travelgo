
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="/images/home/1st.jpg" alt="">
      </div>
        <div class="carousel-item">
            <img src="/images/home/tea.jpg" alt="">

        </div>
        <div class="carousel-item">
            <img src="/images/home/sea.jpg" alt="">

        </div>
      <div class="carousel-item">
      <img src="/images/home/2nd.jpg" alt="">

      </div>
      <div class="carousel-item">
      <img src="/images/home/elephnt.jpg" alt="">
        <div class="container">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

 @extends('main')
 @section('content')
 @section('title','|Home')
 <br>
<div class="row">
  <div class="col-md-12">
    <div class="text-center">
       <h1 class="text-dark"><strong>TravelGo</strong></h1><br>
         <p class="lead"><b>The tourism industry needs improved transport infrastructure
                 facilities to be able to meet the needs of the anticipated increase in tourism numbers.
                 In their attention should also be given to the quality of transport and the comfort and
                 security of the travelers. Tourists should be allowed to choose their mode of transport
                 according to their interest and this will be of great benefit to them</b>
         </p>
    </div>
  </div>
</div>

<br><br>
<br><br>



<div class="container my-4">


    <hr class="my-4">
      <h1 class="text-dark" >Our <small>Hotels</small></h1>
    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="controls-top">
        <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
        <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
      </div>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img src="/images/Logo/mounthavenlogo.png" width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">MOUNTAIN HEAVENS</h4>
                    <a class="btn btn-primary" href="/Ellamount">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/Tajbenthota logo.png"  width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">TAJ BENTHOTA</h4>
                  <a class="btn btn-primary"href="/Tajsouth">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/deerpark.jpg"  width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">DEER PARK INN </h4>
                  <a class="btn btn-primary"href="/Deersabra">View More</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/Shangrila logo.jpg"  width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">SHANGRILA</h4>
                  <a class="btn btn-primary" href="/Shangrilla">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/lagoonlogo.png"  width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">HOTEL EAST LAGOON</h4>
                  <a class="btn btn-primary" href="/Lagoon">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/Araliya logo.png" width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">ARALIYA GREEN HILLS </h4>
                  <a class="btn btn-primary" href="/Araliya">View More</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/Mahoora logo.jpg" width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">MAHOORA SAFARI </h4>
                  <a class="btn btn-primary" href="/mahora">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/wildescope plonnaruwa logo.png" width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">WILDESCOPE </h4>
                  <a class="btn btn-primary" href="/wilde">View More</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block">
              <div class="card mb-2">
                <img class="card-img-top" src="/images/Logo/jetwinglogo.png" width="340" height="220"
                  alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">JETWING JAFFNA</h4>
                  <a class="btn btn-primary" href="/Jetwing">View More</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>




    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
@endsection
