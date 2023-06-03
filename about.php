<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="media.css">
</head>
<style>
        /* =========Video z-index-1================= */
    #myVideo {
        position: fixed;
        z-index: -1;
        left: 0;
        top: 0;
        width: 100vw;
        height: auto;
        bottom: 0;
        object-fit: cover;
        filter: brightness(0.3);
    }
    /* =========Video Heading================= */
    #video_head {
        position: fixed;
        z-index: -1;
        width: 60%;
        top: 0;
        bottom: 0;
        object-fit: cover;
        display: flex;
        align-items: center;
        justify-content: center;
    }

        /* =========Default css of heading p================= */
    #video_head p {
        max-width: 700px;
        font-size: 100px;
        margin: 0 auto;
        text-align: center;
        color: #fff;
    }


    /* =========Default css of About Page How Do You poster ================= */
    .how_do_you_innercon {
        font-size: 50px;
    }

    .oneImg_with_side_Content {
        margin-top: 100vh;
    }

 
</style>

<body>

    <?php include "partials/_navbar.php"?>


    <!-- =====================================================Into Head============================================================ -->

    <video autoplay muted loop id="myVideo">
        <source src="images/AdobeStock_558616749_Video_4K_Preview.mov" type="video/mp4">
    </video>

    <div id="video_head" class="container">
        <p id="head_text" class="text-light ">Build a future you believe in</p>

    </div>

    <!-- =====================================================Row 1============================================================ -->

    <div class="oneImg_with_side_Content"
        style="display: flex; flex-wrap: wrap-reverse; justify-content: space-around; align-items: center; background-color: black; padding: 80px 0px;">

        <div class="box2" style="width: 650px;">
            <h2 class="text-light px-4 mt-3">We build greater futures through innovation and collective knowledge.</h2>
            <p class="text-light px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab
                perspiciatis
                exercitationem
                quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas hic!
                Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                maiores uo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
        </div>

        <div class="box2"><img style="width: 355px; height: 355px; object-fit: cover;" src="images/glass_girl.jpg"
                alt="">
        </div>


    </div>


    <!-- =======================================================row 1=====================================/ -->

    <div id="work" class="circle_box_con px-3"
        style="background-color: white; padding-top: 50px; padding-bottom: 50px; ">
        <div class="px-4">
            <h1 class="pb-4" style="color: brown;">Work together grow together</h1>
        </div>

        <div style="display: flex; justify-content: space-around; flex-wrap: wrap; ">

            <div class="my-2" style="width: 350px; height: 450px;">
                <img src="images/colorhd (1).jpg" style="object-fit: cover; width: 100%; height: 70%;" />
                <div class="mt-2" style="display: flex; justify-content: center;">
                    <h5 class="text-dark">molestias ipsum aut error pariatur fugiat similique id, quibusdam consequuntur
                        neque accusantium repellendus laboriosam labore.</h5>
                </div>

            </div>

            <div class="my-2" style="width: 350px; height: 450px; ">
                <img src="images/colorhd (2).jpg" style="object-fit: cover; width: 100%; height: 70%;" />
                <div class="mt-2" style="display: flex; justify-content: center;">
                    <h5 class="text-dark">molestias ipsum aut error pariatur fugiat similique id, quibusdam consequuntur
                        neque accusantium repellendus laboriosam labore.</h5>
                </div>
            </div>

            <div class="my-2" style="width: 350px; height: 450px; ">
                <img src="images/colorhd (3).jpg" style="object-fit: cover; width: 100%; height: 70%;" />
                <div class="mt-2" style="display: flex; justify-content: center;">
                    <h5 class="text-dark">molestias ipsum aut error pariatur fugiat similique id, quibusdam consequuntur
                        neque accusantium repellendus laboriosam labore.</h5>
                </div>
            </div>

            <div class="my-2" style="width: 350px; height: 450px; ">
                <img src="images/colorhd (4).jpg" style="object-fit: cover; width: 100%; height: 70%;" />
                <div class="mt-2" style="display: flex; justify-content: center;">
                    <h5 class="text-dark">molestia ipsum aut error pariatur fugiat similique id, quibusdam consequuntur
                        neque accusantium repellendus laboriosam labore.</h5>
                </div>
            </div>


        </div>


    </div>

    <!-- =====================================================Row 2============================================================ -->
    <div class="how_do_yoy_con "
        style="background-color: white; display: flex; justify-content: center; align-items: center;">


        <div id="" class="container how_con how_do_you_innercon  px-5"
            style="position: absolute; display: flex; z-index: 1;">
            <img src="images/vertical.jpg" alt="" width="5px" style="border-radius: 9px;">
            <p class="how_do_you text-light">How do you create a remarkable change? By hiring,
                celebrating and nurturing the best people from all walks of life.</p>
        </div>


        <div class="how_img">
            <img style="filter: brightness(0.5);" src="images/leadership-banner.jpg" class="img-fluid" alt="">
        </div>


    </div>

    <!-- =====================================================Row 3============================================================ -->
    <div class="py-5" style="display: flex; justify-content: center; align-items: center;background-color: white;">

        <div id="how_do_you" class="container how_do_you_innercon">
            <p class="px-4" style="font-size: 30px; color: black; font-weight: bold;">How do you create a remarkable
                change? </p>
            <p class="px-4 how_do_you" style="color: brown;">How do you create a remarkable change? By hiring,
                celebrating and nurturing the best people from all walks of life people from all walks of life.
                people
                from all walks of life.people from all walks of life.people from all walks of life.</p>
        </div>

    </div>




    <!-- =====================================================Row 1============================================================ -->

    <div class=""
        style="display: flex; justify-content: space-around; flex-wrap: wrap; align-items: center; background-color: #1b1b1b;">

        <div class="box2"><img style="width: 355px; height: 355px; object-fit: cover;"
                src="images/home-footer-careers-updated_Extra-Medium.jpg" alt="">
        </div>

        <div class="box2" style="width: 650px;">
            <h2 class="text-light px-4 mt-3">We build greater futures through innovation and collective knowledge.</h2>
            <p class="text-light px-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab
                perspiciatis
                exercitationem
                quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas hic!
                Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                maiores quo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
        </div>
    </div>


    <?php include "partials/_footer.php"?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>