<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("div.body-content").removeClass("container");
        $(".body-content").removeClass("body-content");
    })
</script>
<div id="myCarousel" class="my-carousel carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <style>
        .carousel-inner > .item > img {
            width: 100%;
            height: 550px;
        }
    </style>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="{{'images\campus1.jpg'}}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider__content animated bounceInRight">
                                <h2 style="color:Black">Buy <span>Now </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="first-slide" src="{{'images\campus2.jpg'}}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider__content animated bounceInRight">
                                <h2 style="color:Black">Buy <span>Now </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="item">
            <img class="first-slide" src="{{'images\campus3.jpg'}}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider__content animated bounceInRight">
                                <h2 style="color:Black">Buy <span>Now </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="item">
            <img class="first-slide" src="{{'images\campus4.jpg'}}" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="slider__content animated bounceInRight">
                                <h2 style="color:Black">Buy <span>Now </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
