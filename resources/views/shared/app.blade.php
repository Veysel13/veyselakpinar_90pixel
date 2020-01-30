
<!DOCTYPE html>
<html>
<head>
    <title>90 Pixel</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">

    <style>
        html,body{
            height: 100%;
            margin: 0;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(149,199,20,1) 0%, rgba(0,212,255,1) 96%);

        }

        .myForm{
            background-color: rgba(0,0,0,0.5) !important;
            padding: 15px !important;
            border-radius: 15px !important;
            color: white;

        }

        input{
            border-radius:0 15px 15px 0 !important;

        }
        input:focus{
            outline: none;
            box-shadow:none !important;
            border:1px solid #ccc !important;

        }

        .br-15{
            border-radius: 15px 0 0 15px !important;
        }

        #add_more{
            color: white !important;
            background-color: #fa8231 !important;
            border-radius: 15px !important;
            border: 0 !important;

        }
        #remove_more{
            color: white !important;
            background-color: #fc5c65 !important;
            border-radius: 15px !important;
            border: 0 !important;
            display: none;

        }

        .submit_btn{
            border-radius: 15px !important;
            background-color: #95c714 !important;
            border: 0 !important;
        }
    </style>
    @yield('css')
</head>

<body>


@yield('content')


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<script src="js/js.js"></script>
@yield('jss')
</body>
</html>


