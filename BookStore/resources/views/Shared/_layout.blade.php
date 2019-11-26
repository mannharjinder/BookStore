<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page Book Store</title>



    <link rel="stylesheet" href="{{"lib\bootstrap\dist\css\bootstrap.css"}}" />
    <link rel="stylesheet" href="/mannh04/ContosoUniversity/css/site.css" />
    <link rel="stylesheet" href="/mannh04/ContosoUniversity/css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" language="javascript">
        $(document).ready(function () {
            var count = 0;
            $.get("/mannh04/ContosoUniversity/ShoppingCart/ShoppingCartItem", function (data) {
                $("#item_count").text(data);
                count = data;
            });
            $(".glyphicon-shopping-cart").click(function () {
                var itemID = $(this).attr('id');
                $.post("/mannh04/ContosoUniversity/ShoppingCart/AddToCart", { "id": itemID })
                count += 1;
                $("#item_count").text(count);
            })
        })
    </script>

    <script type="text/javascript">
        function getFileName() {
            var thefile = document.getElementById('fileUpload');
            var inputF = document.getElementById('input_image');


            inputF.value = getFile(thefile.value);
        }

        function getFile(filePath) {
            return filePath.substr(filePath.lastIndexOf('\\') + 1);
        }
    </script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/mannh04/ContosoUniversity">
                <img style="max-height:35px" src="/mannh04/ContosoUniversity/images/bookstore_logo.png" alt="Book Store" />
            </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="/mannh04/ContosoUniversity">Home</a></li>
                <li><a href="/mannh04/ContosoUniversity/Home/Book">Books</a></li>
                <li><a href="/mannh04/ContosoUniversity/Home/About">Contact Us</a></li>

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="/mannh04/ContosoUniversity/Account/Register">Register</a></li>
                <li><a href="/mannh04/ContosoUniversity/Account/Login">Log in</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="/mannh04/ContosoUniversity/ShoppingCart/Default"><span id="item_count">0 </span><span class="glyphicon glyphicon-shopping-cart"></span> Trolley</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container body-content">
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
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="/mannh04/ContosoUniversity/images/campus1.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider__content animated bounceInRight">
                                    <h2 style="color:azure">Buy <span>your </span>favourite <span>Book </span>from <span>Here </span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="first-slide" src="/mannh04/ContosoUniversity/images/campus2.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider__content animated bounceInRight">
                                    <h2 style="color:azure">Buy <span>your </span>favourite <span>Book </span>from <span>Here </span></h2>
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
    <div class="row books-search">
        <div class="container">

            <form method="get" action="/mannh04/ContosoUniversity/Home/Book">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <input value="" type="text" class="form-control" id="keyword" placeholder="Book Title" name="SearchString" />
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="btn-group">
                        <select class="custom-select custom-select-sm form-control" id="Category" name="Category">
                            <option value="">Categories</option>
                            <option>Arts &amp; Music</option>
                            <option>Business</option>
                            <option>Maori Culture</option>
                            <option>Sports</option>
                        </select>
                    </div>
                </div>
                <div class="clearfix visible-sm"></div>
                <div class="col-sm-6 col-md-3">
                    <div class="btn-group">
                        <select class="custom-select custom-select-sm form-control" id="Supplier" name="Supplier">
                            <option value="">Authors</option>
                            <option>Harold Robbins</option>
                            <option>William Shakespeare</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="hidden" />
                        <button type="submit" value="" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Search
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container books">
        <div class="row all_products text-center section_title">
            <h2>OUR <span>LATEST</span> ADVENTURES</h2>
            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/book5.png" alt="book5.png" class="product-img" />
                    <h2 class="book_title">Concert At The Hub</h2>
                    <h2 class="price">$ 2.00</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="1"> Add to cart</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/book2.jpg" alt="book2.jpg" class="product-img" />
                    <h2 class="book_title">Millennial Style</h2>
                    <h2 class="price">$ 2.00</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="2"> Add to cart</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/book3.jpg" alt="book3.jpg" class="product-img" />
                    <h2 class="book_title">The Encore Talent Show</h2>
                    <h2 class="price">$ 2.00</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="3"> Add to cart</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/book4.jpg" alt="book4.jpg" class="product-img" />
                    <h2 class="book_title">Mark Jason Lim</h2>
                    <h2 class="price">$ 2.00</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="4"> Add to cart</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/5j42ecrh.zns.png" alt="5j42ecrh.zns.png" class="product-img" />
                    <h2 class="book_title">Brazilian Blend Coffee</h2>
                    <h2 class="price">$ 5.50</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="5"> Add to cart</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/yuhxpq35.ksb.png" alt="yuhxpq35.ksb.png" class="product-img" />
                    <h2 class="book_title">Classroom Rules</h2>
                    <h2 class="price">$ 5.20</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="6"> Add to cart</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/251hedvj.u20.png" alt="251hedvj.u20.png" class="product-img" />
                    <h2 class="book_title">The Encore Talent Show</h2>
                    <h2 class="price">$ 6.50</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="7"> Add to cart</button>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="img-container product_price_box product_home_page thumbnail">
                    <img src="/mannh04/ContosoUniversity/images/qykysngt.deb.png" alt="qykysngt.deb.png" class="product-img" />
                    <h2 class="book_title">Millennial Style</h2>
                    <h2 class="price">$ 3.30</h2>
                    <button class="btn btn-success glyphicon glyphicon-shopping-cart book-btn fa-shoopping-cart" role="button" id="8"> Add to cart</button>
                </div>
            </div>
        </div>
    </div>

    <hr />
    <footer style="border-top: solid 1px #ccc; padding: 10px; text-align: center">
        <p>&copy; 2019 - Book Store, All right reserved</p>
    </footer>
</div>



<script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js" crossorigin="anonymous" integrity="sha384-K+ctZQ+LL8q6tP7I94W+qzQsfRV2a+AfHIi9k8z8l9ggpc8X+Ytst4yBo/hH+8Fk">
</script>
<script>(window.jQuery||document.write("\u003Cscript src=\u0022\/mannh04\/ContosoUniversity\/lib\/jquery\/dist\/jquery.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-K\u002BctZQ\u002BLL8q6tP7I94W\u002BqzQsfRV2a\u002BAfHIi9k8z8l9ggpc8X\u002BYtst4yBo\/hH\u002B8Fk\u0022\u003E\u003C\/script\u003E"));</script>
<script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa">
</script>
<script>(window.jQuery && window.jQuery.fn && window.jQuery.fn.modal||document.write("\u003Cscript src=\u0022\/mannh04\/ContosoUniversity\/lib\/bootstrap\/dist\/js\/bootstrap.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\u0022\u003E\u003C\/script\u003E"));</script>
<script src="/mannh04/ContosoUniversity/js/site.min.js?v=47DEQpj8HBSa-_TImW-5JCeuQeRkm5NMpJWZG3hSuFU"></script>



</body>
</html>
