<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<style>
    body {
        background-image: url("images/back1.jpg");
        /* The image used */
        background-color: #cccccc;
        /* Used if the image is unavailable */
        height: auto;
        /* You must set a specified height */
        background-repeat: no-repeat;
        /* Do not repeat the image */
        background-size: cover;
        /* Resize the background image to cover the entire container */
        /* backdrop-filter: brightness(0.3); */
        background-attachment: fixed;
    }


    .main_con {
        max-width: 1000px;
    }

    ::-webkit-scrollbar {
        display: none;
    }

    .slide_auto {
        flex-shrink: 0;
    }

    #slider {
        animation: slide 20s linear infinite;
    }

    @keyframes slide {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-2000px);
        }
    }
</style>

<body>
<?php include "partials/_navbar.php"?>

 <div style="display: flex;">
    <div  style=" position: fixed; background-color: white; border-radius: 50%; height: 70px; width: 70px; display: flex; justify-content: center; align-items: center;" > <a href="home.php"><i class="fa fa-arrow-left" style="font-size:48px;color:black"></i></a> </div>
   </div>

   <div style="display: flex; position: absolute; right: 100px; bottom: 100px; z-index: 3;">
        <div  style=" position: fixed; border-radius: 50%; height: 90px; width: 90px; display: flex; justify-content: center; align-items: center;" > <a href="https://chat.whatsapp.com/FpUl3WEfI047OMCSm4Tywe"> <img class="img-fluid" src="images/whatsapp.png" alt=""> </a> </div>
       </div>


    <div class="main_con container out_container ">
        <div class="first_row" style=" padding: 130px 100px; background-color: black; opacity: 0.6;">
            <div class="firstbox">
                <p class="text-center text-light " style="font-size: 60px;">Build one-page sites for pretty much
                    anything </p>
                <p class="text-center text-light " style="padding: 0px 100px;">Whether it's a personal profile, a
                    landing page to capture emails,
                    or something a bit more elaborate, a landing page to capture emails,
                    or something a bit more elaborate a bit more elaborate a bit more elaborate </p>
            </div>
        </div>



        <div class="second_row" style="display: flex; justify-content: space-between; overflow: hidden;">
            <div id="slider" style="display: flex;">
                <img id="slide_auto1" class="slide_auto" src="images/site-1.jpg" alt="" width="650px" height="500px">
                <img id="slide_auto2" class="slide_auto" src="images/site-2.jpg" alt="" width="650px" height="500px">
                <img id="slide_auto3" class="slide_auto" src="images/site-3.jpg" alt="" width="650px" height="500px">
                <img id="slide_auto4" class="slide_auto" src="images/site-4.jpg" alt="" width="650px" height="500px">
                <img id="slide_auto5" class="slide_auto" src="images//site-5.jpg" alt="" width="650px" height="500px">
            </div>
        </div>


    </div>




    <div class="main_con container out_container " style="margin-top: 200px;">

        <div class="main_con container out_container ">
            <div class="third_row row">
                <div style="display: flex; justify-content: center; align-items: center; background-color: white; "
                    class="two_box col-md-6 text-light"><img class="img-fluid" src="images/6155808.jpg" alt=""></div>
                <div style="display: flex; justify-content: center; align-items: center; background-color: black; opacity: 0.6;"
                    class="two_box col-md-6 text-light">
                    <h1>Hello</h1>
                </div>
            </div>
        </div>


        <div class="main_con container out_container ">
            <div class="forth_row row">
                <div style="height: 450px; display: flex; justify-content: center; align-items: center; background-color: black; opacity: 0.6;"
                    class="two_box col-md-6 text-light">
                    <h1>Hello</h1>
                </div>
                <div style="height: 450px; display: flex; justify-content: center; align-items: last baseline; background-color: #f7f7f7; "
                    class="two_box col-md-6 text-light"><img class="img-fluid"
                        src="images/smiling-confident-businesswoman-posing-with-arms-folded.jpg" alt="">
                </div>
            </div>
        </div>

    </div>


    <div class="main_con container out_container " style="margin-top: 200px; opacity: 0.9;">

        <div class="fifth_row container" style="background-color: black; border: 1px solid black; ">
            <p class="text-center text-light "
                style=" margin-top: 120px; margin-left: 100px; margin-right: 100px; font-size: 35px;">Optional: Go Pro!
            </p>
            <p class="text-center text-light " style="padding: 0px 100px; margin-bottom: 77px;">Whether it's a personal
                profile, a
                landing page to capture emails,
                or something a bit more elaborate, a landing page to capture emails,
                or something a bit more elaborate a bit more elaborate a bit more elaborate </p>
        </div>




        <div class="main_con container out_container" style="opacity: 0.6;">
            <div class="row">
                <div class="col-md-6 text-light " style="background-color: black; padding: 50px ;">
                    <h3>1. Domain</h3>
                    <p style="padding-left: 26px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia
                        tempore
                        repellendus quasi velit. Rem corporis, repellendus facere, earum, dolor minus atque vel illum
                        dicta
                        error praesentium expedita voluptatum! Officiis, temporibus.</p>
                </div>

                <div class="col-md-6 text-light " style="background-color: black; padding: 50px ;">
                    <h3>2. More Sites</h3>
                    <p style="padding-left: 26px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia
                        tempore
                        repellendus quasi velit. Rem corporis, repellendus facere, earum, dolor minus atque vel illum
                        dicta
                        error praesentium expedita voluptatum! Officiis, temporibus.</p>
                </div>

                <div class="col-md-6 text-light " style="background-color: black; padding: 50px ;">
                    <h3>3. Forms</h3>
                    <p style="padding-left: 26px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia
                        tempore
                        repellendus quasi velit. Rem corporis, repellendus facere, earum, dolor minus atque vel illum
                        dicta
                        error praesentium expedita voluptatum! Officiis, temporibus.</p>
                </div>

                <div class="col-md-6 text-light " style="background-color: black; padding: 50px ;">
                    <h3>4. Widgets + Embeds</h3>
                    <p style="padding-left: 26px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia
                        tempore
                        repellendus quasi velit. Rem corporis, repellendus facere, earum, dolor minus atque vel illum
                        dicta
                        error praesentium expedita voluptatum! Officiis, temporibus.</p>
                </div>

                <div class="col-md-6 text-light " style="background-color: black; padding: 50px ;">
                    <h3>5. Google Analytics</h3>
                    <p style="padding-left: 26px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia
                        tempore
                        repellendus quasi velit. Rem corporis, repellendus facere, earum, dolor minus atque vel illum
                        dicta
                        error praesentium expedita voluptatum! Officiis, temporibus.</p>
                </div>

                <div class="col-md-6 text-light " style="background-color: black; padding: 50px ;">
                    <h3>16. No Branding</h3>
                    <p style="padding-left: 26px;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia
                        tempore
                        repellendus quasi velit. Rem corporis, repellendus facere, earum, dolor minus atque vel illum
                        dicta
                        error praesentium expedita voluptatum! Officiis, temporibus.</p>
                </div>
            </div>
        </div>









    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
    <script>
        gsap.from("#slide_auto4", {
            duration: 6,
            opacity: 0,
            x: 8000
        });

        var slider = document.getElementById('slider');

        function startSlider() {
            slider.style.animationPlayState = 'running';
        }

        function stopSlider() {
            slider.style.animationPlayState = 'running';
        }

        // Start the slider when the page loads
        window.addEventListener('load', startSlider);

        // Stop the slider when the user interacts with the slider
        slider.addEventListener('mouseover', stopSlider);
        slider.addEventListener('touchstart', stopSlider);

        // Resume the slider when the user stops interacting with the slider
        slider.addEventListener('mouseleave', startSlider);
        slider.addEventListener('touchend', startSlider);





    </script>
</body>

</html>