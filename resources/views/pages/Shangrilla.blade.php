


@extends('main')
<br>
<div class="box">

    <img class="img-responsive" width="100%" height="80%"src="/images/Hotels/shangrila.jpg" alt="header image" ></div>
<div class="img-title">
    <div class="text-dark">
        <h1 class="display-1" style="margin-top:250px ;" color="dark"><b>SHANGRILA</b> </h1>
    </div></div>


@section('content')
@section('title','|hotels')
<br><br><br>

<div class="row featurette">
    <div class="col-md-7 order-md-1"><br><br><br><br>
        <p class="lead"><b>A personal tropical sanctuary that is perfect for escaping the city, Shangri-La Hotel,
                Colombo overlooks the Indian Ocean in the heart of the business district and the capital’s buzzing social scene,
                with direct access to the most extensive international shopping mall in Sri Lanka, Shangri-La’s own One Galle
                Face Mall. The hotel offers the finest accommodation in Colombo, with 500 luxurious guest rooms and suites,
                and 41 serviced apartments. It brings an exciting new dining and social scene to the city, featuring.
                <br>
                <br>
               - 541 rooms and suites <br>
               - 4 restaurants & bars <br>
               - Unrivalled shopping experience in Sri Lanka’s leading shopping mall <br>
               - Largest events space in Colombo
            </b></p>
    </div>

    <div class="col-md-5 order-md-1">
        <img class="img-responsive" width="115%" height="65%"src="/images/Hotels/shangrilainside.jpg" alt="header image" >
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
                                <img class="card-img-top" src="/images/Shangrila/01.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Shangrila/02.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Shangrila/03.jpg" width="490" height="300"
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
                                <img class="card-img-top" src="/images/Shangrila/04.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Shangrila/05.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Shangrila/06.jpg" width="490" height="300"
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
            1-Colombo Lotus Tower <br>
            2-Galle Face beach <br>
            3-National Art Gallery <br>
            4-Kelaniya Raja Maha Vihara <br>
            5-National Museum <br>
            6-Bally’s Casino
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
                        <img class="card-img-top" src="/images/Shangrila/Colombo Lotus Tower.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Shangrila/Galle Face beach.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Shangrila/National Art Gallery.jpg" width="490" height="300"
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
                        <img class="card-img-top" src="/images/Shangrila/Kelaniya Raja Maha Vihara.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Shangrila/National Museum.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Shangrila/Bally’s Casino.jpg" width="490" height="300"
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
                <p class="text-blue"> 1 Galle Face, Colombo 2, Sri Lanka.</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/loc.png" alt=""width="30" height="30">
            </div>
        </div>
        <!--end address-->

        <!-- This is Telephone Number-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <p class="text-blue">+94 11 788 8288</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/tel.png" alt=""width="30" height="30">
            </div>
        </div>
        <!--end Telephone Number-->

        <!-- This is email-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <p class="text-blue">slcb@shangri-la.com</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/mail.png" alt=""width="30" height="30">
            </div>
        </div>

        <!--start web-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <a href="https://www.shangri-la.com/> <p class="text-blue">www.shangri-la.com</p></a>
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
