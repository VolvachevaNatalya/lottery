<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" href="/css/buttons.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <!-- Custom styles for this template -->
    <!--<link href="signin.css" rel="stylesheet">-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">

    @if( Session::has('sm') )
        <div class="row sm-box">
            <div class="col-md-12">
                <div class="alert alert-success" role="alert">
                    <p>{{ Session::get('sm') }}</p>
                </div>
            </div>
        </div>
    @endif

    <form method="post" action="/save" class="form-signin" role="form">
        <h2 class="form-signin-heading">Lottery</h2>
        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">
                <input type="text" name="full_name" class="form-control" placeholder="Full name" required autofocus>
                <input type="email" name="email" class="form-control" placeholder="Email address" required >
                <input type="hidden" name="numbers" id="numbers">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

            </div>
            <div class="col-6 col-md-4"></div>


        </div>

        <h4>Choose 3 numbers:
        <span class="error"></span>
        </h4>

        <div class="row">
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="1" class="button1 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="2" class="button2 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="3" class="button3 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="4" class="button4 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="5" class="button5 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="6" class="button6 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="7" class="button7 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="8" class="button8 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="9" class="button9 cli" ></div>
            <div class="col-xs-4 col-sm-3 col-md-1"><input type="button" value="10" class="button10 cli" ></div>

        </div>



        <div class="row">
            <div class="col-6 col-md-4"></div>
            <div class="col-6 col-md-4">
                <button class="btn btn-lg btn-primary btn-block send" type="submit">Submit</button>
            </div>
            <div class="col-6 col-md-4"></div>
        </div>


    </form>

    <script type="text/javascript">


        $('.cli').click(function () {

            if ($(this).hasClass('button_active')) {
                $(this).removeClass('button_active')
            }


            else if($('.button_active').length <3 && !$(this).hasClass('button_active')) {

                $(this).addClass('button_active')
            }


        })



        $('.send').click(function (event) {
            if($('.button_active').length <3){
                $('.error').text('You should choose 3 numbers!!!').css('color','red');
                event.preventDefault();
            }
            else
            {
                $('.error').text('');
                var numbers = "";
                $.each($('.button_active'), function (index, element) {
                    numbers = numbers + $(element)[0].value;
                });

                $('#numbers').val(numbers);

            }
        })

        $(".alert").delay(2000).slideUp(200, function() {
            $(this).alert('close');
        });


    </script>

</div>

</body>
</html>