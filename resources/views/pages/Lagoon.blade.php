


@extends('main')
<br>
<div class="box">

    <img class="img-responsive" width="100%" height="80%"src="/images/Hotels/Hotel East Lagoon.jpg" alt="header image" ></div>
<div class="img-title">
    <div class="text-dark">
        <h1 class="display-1" style="margin-top:250px ;" color="dark"><b>HOTEL EAST LAGOON</b> </h1>
    </div></div>


@section('content')
@section('title','|hotels')
<br><br><br>

<div class="row featurette">
    <div class="col-md-7 order-md-1"><br><br><br><br>
        <p class="lead"><b>Welcome to the delight of the eastern coast where you be enchanted by the beauty of the nature-wakes
                you up with the warmth of the dawning sun and end the day.  "Hotel East
                Lagoon" is located by the stunning lagoon that drift middle of the Batticaloa town and ends up the eatuary seen
                from the "Hotel East Lagoon". Easy access from the highway.
                <br>
                <br>
               <b><u>FACILITIES</u></b><br>
                # 45 well-equipped rooms and suites <br>
                # Restaurant conveniently located in our lobby<br>
                # State-of-the art meeting and event facilities<br>
                # Banquet Hall<br>
                # Swimming Pool and Baby Pool<br>
                # Wi-Fi Zone<br>
                # Cable TV Channels
            </b></p>
    </div>

    <div class="col-md-5 order-md-1">
        <img class="img-responsive" width="115%" height="65%"src="/images/Hotels/Hotel East Lagoon inside.jpg" alt="header image" >
    </div>
</div>

<br><br><br>

<div class="row featurette">

    <div class="container my-4">

        <!--photo gallery-->
        <hr class="my-4">
        <h1 class="text-dark" >Hotel <small>Gallery</small></h1><br>
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
                                <img class="card-img-top" src="/images/Lagoon/01.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Lagoon/02.webp" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Lagoon/03.jpg" width="490" height="300"
                                     alt="Card image cap">
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
                                <img class="card-img-top" src="/images/Lagoon/04.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Lagoon/05.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Lagoon/06.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Second slide-->
            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->
        <h1 class="text-dark" >Near Place For Visit</h1><br>
    </div>
    <!--vistin places -->
    <ol><strong>
            1-Batticaloa fort <br>
            2-Batticaloa lighthouse <br>
            3-Koneswaram Temple <br>
            4-Pasikuda Beach <br>
            5-Kallady Bridge <br>
            6-Kattankudy Heritage Museum
        </strong>
    </ol>
</div>
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
                        <img class="card-img-top" src="/images/Lagoon/batticaloa fort.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Lagoon/batticaloa lighthouse.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Lagoon/Koneswaram Temple.jpg" width="490" height="300"
                             alt="Card image cap">
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
                        <img class="card-img-top" src="/images/Lagoon/pasikuda Beach.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Lagoon/Kallady Bridge.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Lagoon/Kattankudy Heritage Museum.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>
            </div>
        </div>

        <!--/.Second slide-->
    </div>
    <!--/.Slides-->

</div>
<!--contact imformation-->
<div class="row featurette">
    <div class="col-md-4"  style="background-color:white;" >

        <h1 class="text-black-50"><small>Contact Information</small></h1>
        <hr style="height:1px;border:none;color:ffffff;background-color:ffffff;" />
        <!-- This is address-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <p class="text-blue">Munai Lane, Uppodai Lake Road, Sinna Uppodai, Batticaloa (30000), Sri Lanka.</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/loc.png" alt=""width="30" height="30">
            </div>
        </div>
        <!--end address-->

        <!-- This is Telephone Number-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <p class="text-blue">+94 65 222 9222 <br> +94 65 222 9223</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/tel.png" alt=""width="30" height="30">
            </div>
        </div>
        <!--end Telephone Number-->

        <!-- This is email-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <p class="text-blue">info@hoteleastlagoon.com</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/mail.png" alt=""width="30" height="30">
            </div>
        </div>

        <!--start web-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <a href="https://www.hoteleastlagoon.com/> <p class="text-blue">www.hoteleastlagoon.com</p></a>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/web.png" alt=""width="30" height="30">
            </div>
        </div>
        <hr style="height:1px;border:none;color:ffffff;background-color:ffffff;" />
    </div>
    <div class="container my-4">
<!--/.Carousel Wrapper-->
</div>

<!--visiting image-->







<hr class="featurette-divider">
@endsection
