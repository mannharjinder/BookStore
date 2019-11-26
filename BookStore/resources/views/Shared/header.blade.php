<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page Book Store</title>
    <link rel="stylesheet" href="{{asset('lib\bootstrap\dist\css\bootstrap.css')}}" />
    <link rel="stylesheet" href="{{asset('css\site.css')}}" />
    <link rel="stylesheet" href="{{asset('css\animate.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-latest.js"></script>

    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
{{--    <script type="text/javascript" language="javascript">--}}
{{--        $(document).ready(function () {--}}
{{--            var count = 0;--}}
{{--            $.get("/mannh04/ContosoUniversity/ShoppingCart/ShoppingCartItem", function (data) {--}}
{{--                $("#item_count").text(data);--}}
{{--                count = data;--}}
{{--            });--}}
{{--            $(".glyphicon-shopping-cart").click(function () {--}}
{{--                var itemID = $(this).attr('id');--}}
{{--                $.post("/mannh04/ContosoUniversity/ShoppingCart/AddToCart", { "id": itemID })--}}
{{--                count += 1;--}}
{{--                $("#item_count").text(count);--}}
{{--            })--}}
{{--        })--}}
{{--    </script>--}}

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

    <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-2.2.0.min.js" crossorigin="anonymous" integrity="sha384-K+ctZQ+LL8q6tP7I94W+qzQsfRV2a+AfHIi9k8z8l9ggpc8X+Ytst4yBo/hH+8Fk">
    </script>
    <script>(window.jQuery||document.write("\u003Cscript src=\u0022\/mannh04\/ContosoUniversity\/lib\/jquery\/dist\/jquery.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-K\u002BctZQ\u002BLL8q6tP7I94W\u002BqzQsfRV2a\u002BAfHIi9k8z8l9ggpc8X\u002BYtst4yBo\/hH\u002B8Fk\u0022\u003E\u003C\/script\u003E"));</script>
    <script src="https://ajax.aspnetcdn.com/ajax/bootstrap/3.3.7/bootstrap.min.js" crossorigin="anonymous" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa">
    </script>
    <script>(window.jQuery && window.jQuery.fn && window.jQuery.fn.modal||document.write("\u003Cscript src=\u0022\/mannh04\/ContosoUniversity\/lib\/bootstrap\/dist\/js\/bootstrap.min.js\u0022 crossorigin=\u0022anonymous\u0022 integrity=\u0022sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\u0022\u003E\u003C\/script\u003E"));</script>
    <script src="{{'js\site.min.js?v=47DEQpj8HBSa-_TImW-5JCeuQeRkm5NMpJWZG3hSuFU'}}"></script>
</head>
