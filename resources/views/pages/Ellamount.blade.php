


@extends('main')
<br>
<div class="box">

    <img class="img-responsive" width="100%" height="80%"src="/images/Hotels/Mountain Heavens.jpg" alt="header image" ></div>
<div class="img-title">
    <div class="text-dark">
        <h1 class="display-1" style="margin-top:250px ;" color="dark"><b>ELLA MOUNTAIN HEAVENS</b> </h1>
    </div></div>


@section('content')
@section('title','|hotels')
<br><br><br>

<div class="row featurette">
    <div class="col-md-7 order-md-1"><br><br><br><br>
        <p class="lead">"Ella Mount Heaven is a new luxurious addition to the hotel chain of Ella.
                It is distinctive, design-forward and styled for the contemporary traveler with its unique style.
                The accommodation suites define eye-catching boutique style hotel blending with magnificent hill country scenery".
                <br>
                <br>
                <u><b>Standard Features</b></u><br>
               - Unique, Stylish, and Comfortable rooms<br>
               - Internet facility<br>
               - LCD flat-screen High Definition TV with satellite TV<br>
               - Luxurious bed linens<br>
               - Luxury wooden furniture / cane furniture<br>
               - Private balconies with breathtaking panoramic view
            </b></p>
    </div>

    <div class="col-md-5 order-md-1">
        <img class="img-responsive" width="115%" height="65%"src="/images/Hotels/Mountain Heavens inside.jpg" alt="header image" >
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
                                <img class="card-img-top" src="/images/Ellamount/01.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Ellamount/02.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Ellamount/03.jpg" width="490" height="300"
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
                                <img class="card-img-top" src="/images/Ellamount/04.webp" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Ellamount/05.jpg" width="490" height="300"
                                     alt="Card image cap">
                            </div>
                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block">
                            <div class="card mb-2">
                                <img class="card-img-top" src="/images/Ellamount/06.jpg" width="490" height="300"
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
            1-Ella Rock <br>
            2-Dunhida water falls <br>
            3-Rawana Water falls <br>
            4-Lipton Seat <br>
            5-Little Adamspeak <br>
            6-Nine Arch
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
                        <img class="card-img-top" src="/images/Ellamount/Ella Rock.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Ellamount/Dunhida water falls.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Ellamount/Rawana Water falls.jpg" width="490" height="300"
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
                        <img class="card-img-top" src="/images/Ellamount/Lipton Seat.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Ellamount/Little Adamspeak.jpg" width="490" height="300"
                             alt="Card image cap">
                    </div>
                </div>

                <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                        <img class="card-img-top" src="/images/Ellamount/Nine Arch.jpg" width="490" height="300"
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
                <p class="text-blue">15 th mile post, Wellawaya Road, Ella 'Bandarawela', Sri Lanka.</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/loc.png" alt=""width="30" height="30">
            </div>
        </div>
        <!--end address-->

        <!-- This is Telephone Number-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <p class="text-blue">+94 72 4213731 <br> +94 72 4795902 <br> +94 57 4933 200 </p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/tel.png" alt=""width="30" height="30">
            </div>
        </div>
        <!--end Telephone Number-->

        <!-- This is email-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <p class="text-blue">ellamountheaven@gmail.com</p>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/mail.png" alt=""width="30" height="30">
            </div>
        </div>

        <!--start web-->
        <div class="row featurette">
            <div class="col-md-9 order-md-2">
                <a href="https://www.ellamountheaven.com/> <p class="text-blue">www.ellamountheaven.com</p></a>
            </div>
            <div class="col-md-2 order-md-1">
                <img src="/images/web.png" alt=""width="30" height="30">
            </div>
        </div>
        <hr style="height:1px;border:none;color:ffffff;background-color:ffffff;" />
    </div>
    <div class="container my-4">
<!--/.Crrousel Wrapper-->
</div>

<!--visiting image-->







<hr class="featurette-divider">
@endsection
