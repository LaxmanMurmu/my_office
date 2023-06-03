<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            z-index: -1;
            right: 0;
            top: 0;
            width: 100%;
            height: auto;
            bottom: 0;
            object-fit: cover;
            filter: brightness(0.4);
        }
    </style>

    <body>
        <?php include "partials/_navbar.php"?>
        <video autoplay muted loop id="myVideo">
            <source src="images/bg_blog.webm" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

    <div class="container border" style="height: 88vh; display: flex;">
        <div class="container" style="max-width: 900px; margin-top: 200px;">
       <p class="text-light text-center border" style="font-size: 80px; font-weight: bold;"> Welcome to Blogs Page Zudio</p>
    </div>
    </div>


        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>