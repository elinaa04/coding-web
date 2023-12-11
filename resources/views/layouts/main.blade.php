<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>IslamiQ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Modak&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Modak&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">

    <style>
        @media (max-width: 575px) {
            .col-md-12 {
                flex-direction: column;
                align-items: center;
            }
            .profil-img {
                margin: 0 !important;
            }

            .card-footer a{
                margin: 0 !important;
            }
            .delete{
                align-items: center;
                margin: 0 !important;
            }
        }
        @media (max-width:767px) {
            .delete{
                align-items: center;
                margin: 0 !important;
            }

        }
        @media (max-width:868px) {
            .col-md-12{
                width: 80%;
                margin: 0 auto;
            }
        }
    </style>
</head>

<body style="margin: 0; padding: 0; height: 100%; background-color: #F4F1F1;">
    @yield('navbar')

    @yield('content')
</body>
</html>