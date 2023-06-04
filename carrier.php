<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="media.css">

</head>

<body>

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        .simple_style {
            background: url('image/dark1 (1).jpg') no-repeat;
            background-size: 100%;
        }

        #myVideo {
            position: fixed;
            z-index: -1;
            left: 0;
            top: 0;
            width: 100vw;
            height: auto;
            bottom: 0;
            object-fit: cover;
            filter: brightness(0.2);
        }

        ::-webkit-scrollbar {
            display: none;
        }

        .flip-container {
            perspective: 1000px;
        }

        .flipper {
            position: relative;
            width: 350px;
            height: 550px;
            transform-style: preserve-3d;
            transition: transform 0.5s;
        }

        .flip-container:hover .flipper {
            transform: rotateY(180deg);
        }

        .front,
        .back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .back {
            transform: rotateY(180deg);
        }

        /* ==================head default  */
        #carrier_head_con {
            height: 100vh;
        }

        .head_topic {
            font-size: 80px;
            font-weight: bold;
        }

        /* ==========================================Carrier Video Area media query=================================================== */


        @media screen and (max-width: 1000px) {
            #carrier_head_con {
                height: 76vh;
            }

            .carrier_head_innercon {

                height: 40vh;
            }

            .head_topic {
                font-size: 65px;
            }

            .head_btn {
                padding: 13px 18px;
            }
        }


        @media screen and (max-width: 989px) {
            #carrier_head_con {
                height: 70vh;
            }

            .carrier_head_innercon {
                height: 45vh;
            }

            .head_topic {
                font-size: 52px;
            }


        }

        @media screen and (max-width: 785px) {
            #carrier_head_con {
                height: 62vh;
            }

            .carrier_head_innercon {
                height: 42vh;
            }

            .head_topic {
                font-size: 46px;
            }

            .head_btn {
                padding: 11px 18px;
            }
        }

        @media screen and (max-width: 701px) {
            #carrier_head_con {
                height: 57vh;
            }

            .carrier_head_innercon {
                height: 42vh;
            }

            .head_topic {
                font-size: 35px;
            }

            .head_btn {
                padding: 11px 18px;
            }
        }


        @media screen and (max-width: 630px) {
            #carrier_head_con {
                height: 51vh;
            }

            .carrier_head_innercon {
                height: 39vh;
            }

            .head_topic {
                font-size: 28px;
            }

            .head_btn {
                padding: 11px 18px;
            }
        }


        @media screen and (max-width: 558px) {
            #carrier_head_con {
                height: 43vh;
            }

            .carrier_head_innercon {
                height: 38vh;
            }

            .head_topic {
                font-size: 22px;
            }

            .head_btn {
                padding: 11px 18px;
            }
        }


        @media screen and (max-width: 498px) {
            #carrier_head_con {
                height: 38vh;
            }

            .carrier_head_innercon {
                height: 23vh;
            }

            .head_topic {
                font-size: 50px;
            }

            .head_para {
                display: none;
            }

            .head_btn {
                padding: 9px 18px;
            }
        }

        @media screen and (max-width: 409px) {
            #carrier_head_con {
                height: 31vh;
            }

            .carrier_head_innercon {
                height: 23vh;
            }

            .head_topic {
                font-size: 36px;
            }

            .head_para {
                display: none;
            }

            .head_btn {
                padding: 4px 18px;
            }
        }
    </style>

    <body>

        <?php include "partials/_navbar.php"?>


        <video autoplay muted loop id="myVideo">
            <source src="images/blog_bg_video.mp4" type="video/mp4">
        </video>

        <!-- video header -->

        <div id="carrier_head_con" class="container  "
            style=" display: flex; justify-content: center; align-items: center;">
            <div class="carrier_head_innercon">
                <p class="text-light text-center head_topic">Carrier in Cloud</p>
                <p class="text-light text-center head_para">Lorem ipsum consectetur
                    minima quasi libero sunt fugit dolore laboriosam impedit esse modi iste. Placeat! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis Placeat!
                    Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. </p>
                <div class="" style="display: flex; justify-content: center; align-items: center; gap: 15px; ">
                    <a style="border-radius: 4px; background-color: #ff1996; opacity: 0.7;" class="btn head_btn   px-4"
                        href="#apply_form">Apply here</a>
                    <a style="border-radius: 4px; background-color: black; opacity: 0.8; border: 2px solid white;"
                        class="btn text-light head_btn  px-4" href="contact.php">Contact us</a>
                </div>
            </div>

        </div>



        <!-- =======================================================row 1=====================================/ -->


        <div class="oneImg_with_side_Cont"
            style="display: flex; flex-wrap: wrap-reverse; justify-content: space-around; align-items: center; background-color: white; padding: 90px 0px;">


            <div class="box2 " style="width: 650px;">
                <h2 class=" px-2 mt-3" style="color: brown;">We build greater futures through innovation and collective
                    knowledge.
                </h2>
                <p class="text-dark px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab
                    perspiciatis
                    exercitationem
                    quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas hic!
                    Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores uo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!Voluptatem eum quibusdam
                    sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores uo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
            </div>

            <div class="box2"><img style="width: 355px; height: 355px; object-fit: cover;" src="images/glass_girl.jpg"
                    alt="">
            </div>

        </div>
        <!-- ============================================================Job Vaccency====================================== -->
        <div class="mt-1" style="background-color: black;">

            <div class="py-5 px-4">
                <p class="text-light  " style="font-size: 40px; font-weight: bold;">Job vaccency</p>
                <p class="text-light " style="font-size: 15px;;">Lorem ipsum consectetur
                    minima quasi libero sunt fugit dolore laboriosam impedit esse modi iste. Placeat! Lorem ipsum dolor
                    sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis doloribus,sit
                    amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis doloribus, sit
                    amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis doloribus, sit
                    amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis doloribus, sit
                    amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis doloribus,
                    amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis doloribus,
                    amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis doloribus,</p>

            </div>

            <!-- ============================================================Flipers====================================== -->
            <div class="sliders"
                style=" padding-bottom: 100px; display: flex; justify-content: space-between; gap:15px; overflow: scroll; background-color: black;">


                <div class="flip-container">
                    <div class="flipper">

                        <div class="front" style="display: flex; justify-content: center;align-items: center;">
                            <div class="text-light" style="position: absolute; z-index: 1;">
                                <h1 class="text-center">Computer <br> Graphics</h1>
                            </div>
                            <img style="filter: brightness(0.3);" src="images/Untitled design (1).png" alt=""
                                width="350px" height="530px">
                        </div>

                        <div class="back"
                            style="background-color: rgb(0, 255, 221); box-shadow: 22px 22px 22px #aaaaaa;">
                            <p class="text-dark text-center mt-5" style="font-size: 30px; font-weight: bold;">Job
                                vaccency</p>
                            <p class="text-dark text-center px-4" style="font-size: 15px; font-weight: bold;">Lorem
                                ipsum
                                consectetur
                                minima quasi libero sunt fugit dolore laboriosam impedit esse modi iste. Placeat! Lorem
                                ipsum dolor
                                sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis
                                doloribus,sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. doloribus,sit amet
                                consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. </p>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <a class="btn btn-light py-2 px-4" href="">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="flip-container">
                    <div class="flipper">
                        <div class="front" style="display: flex; justify-content: center;align-items: center;">
                            <div class="text-light" style="position: absolute; z-index: 1;">
                                <h1 class="text-center">Software<br>engineer</h1>
                            </div>
                            <img style="filter: brightness(0.3);" src="images/Untitled design (2).png" alt=""
                                width="350px" height="530px">
                        </div>
                        <div class="back"
                            style="background-color: rgb(0, 255, 221); box-shadow: 22px 22px 22px #aaaaaa;">
                            <p class="text-dark text-center mt-5" style="font-size: 30px; font-weight: bold;">Job
                                vaccency</p>
                            <p class="text-dark text-center px-4" style="font-size: 15px; font-weight: bold;">Lorem
                                ipsum
                                consectetur
                                minima quasi libero sunt fugit dolore laboriosam impedit esse modi iste. Placeat! Lorem
                                ipsum dolor
                                sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis
                                doloribus,sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. doloribus,sit amet
                                consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. </p>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <a class="btn btn-light py-2 px-4" href="">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="flip-container">
                    <div class="flipper">
                        <div class="front" style="display: flex; justify-content: center;align-items: center;">
                            <div class="text-light" style="position: absolute; z-index: 1;">
                                <h1 class="text-center">Web<br>Developer</h1>
                            </div>
                            <img style="filter: brightness(0.3);" src="images/Untitled design (3).png" alt=""
                                width="350px" height="530px">
                        </div>
                        <div class="back"
                            style="background-color: rgb(0, 255, 221); box-shadow: 22px 22px 22px #aaaaaa;">
                            <p class="text-dark text-center mt-5" style="font-size: 30px; font-weight: bold;">Job
                                vaccency</p>
                            <p class="text-dark text-center px-4" style="font-size: 15px; font-weight: bold;">Lorem
                                ipsum
                                consectetur
                                minima quasi libero sunt fugit dolore laboriosam impedit esse modi iste. Placeat! Lorem
                                ipsum dolor
                                sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis
                                doloribus,sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. doloribus,sit amet
                                consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. </p>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <a class="btn btn-light py-2 px-4" href="">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="flip-container">
                    <div class="flipper">
                        <div class="front" style="display: flex; justify-content: center;align-items: center;">
                            <div class="text-light" style="position: absolute; z-index: 1;">
                                <h1 class="text-center">Digital<br>Marketing</h1>
                            </div>
                            <img style="filter: brightness(0.3);" src="images/Untitled design.jpg" alt="" width="350px"
                                height="530px">
                        </div>
                        <div class="back"
                            style="background-color: rgb(0, 255, 221); box-shadow: 22px 22px 22px #aaaaaa;">
                            <p class="text-dark text-center mt-5" style="font-size: 30px; font-weight: bold;">Job
                                vaccency</p>
                            <p class="text-dark text-center px-4" style="font-size: 15px; font-weight: bold;">Lorem
                                ipsum
                                consectetur
                                minima quasi libero sunt fugit dolore laboriosam impedit esse modi iste. Placeat! Lorem
                                ipsum dolor
                                sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis
                                doloribus,sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. doloribus,sit amet
                                consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. </p>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <a class="btn btn-light py-2 px-4" href="">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="flip-container">
                    <div class="flipper">
                        <div class="front" style="display: flex; justify-content: center;align-items: center;">
                            <div class="text-light" style="position: absolute; z-index: 1;">
                                <h1 class="text-center">App<br>Developer</h1>
                            </div>
                            <img style="filter: brightness(0.3);" src="images/Untitled design (1).png" alt=""
                                width="350px" height="530px">
                        </div>
                        <div class="back"
                            style="background-color: rgb(0, 255, 221); box-shadow: 22px 22px 22px #aaaaaa;">
                            <p class="text-dark text-center mt-5" style="font-size: 30px; font-weight: bold;">Job
                                vaccency</p>
                            <p class="text-dark text-center px-4" style="font-size: 15px; font-weight: bold;">Lorem
                                ipsum
                                consectetur
                                minima quasi libero sunt fugit dolore laboriosam impedit esse modi iste. Placeat! Lorem
                                ipsum dolor
                                sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta perspiciatis
                                doloribus,sit amet consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. doloribus,sit amet
                                consectetur adipisicing elit. Aliquid sint, beatae veniam soluta
                                perspiciatis doloribus, sit amet consectetur adipisicing elit. </p>

                            <div style="display: flex; justify-content: center; align-items: center;">
                                <a class="btn btn-light py-2 px-4" href="">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
        <!-- ============================================================Flippers End====================================== -->



        <!-- =======================================================row 1=====================================/ -->
        <div class="oneImg_with_side_Cont"
            style="display: flex; flex-wrap: wrap; justify-content: space-around; align-items: center; background-color: white; padding: 60px 0px;">

            <div class="box2"><img style="width: 355px; height: 355px; object-fit: cover;" src="images/glass_girl.jpg"
                    alt="">
            </div>

            <div class="box2" style="width: 650px;">
                <h2 class="px-2 mt-3" style="color: brown;">build greater futures through innovation and collective
                    knowledge.
                </h2>
                <p class="text-dark px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab
                    perspiciatis
                    exercitationem
                    quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas hic!
                    Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores uo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!Voluptatem eum quibusdam
                    sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores uo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
            </div>

        </div>


        <!-- =======================================================row 1=====================================/ -->


        <div class="oneImg_with_side_Cont"
            style="display: flex; flex-wrap: wrap-reverse; justify-content: space-around; align-items: center; background-color: white; padding: 60px 0px;">


            <div class="box2" style="width: 650px;">
                <h2 class=" px-2 mt-3" style="color: brown;">We build greater futures through innovation and collective
                    knowledge.
                </h2>
                <p class="text-dark px-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab
                    perspiciatis
                    exercitationem
                    quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas hic!
                    Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores uo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!Voluptatem eum quibusdam
                    sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores uo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
            </div>

            <div class="box2"><img style="width: 355px; height: 355px; object-fit: cover;" src="images/glass_girl.jpg"
                    alt="">
            </div>

        </div>


        <!-- ============================================================Simple Style in middle====================================== -->


        <div class="simple_style"
            style="display: flex; padding: 100px 0px; background-image: url('images/slide3.jpg'); filter: brightness(0.7);">

            <div class="box2 container">
                <h1 class=" mt-3 text-center" style="color: white; font-weight: bold;">build greater futures through
                    innovation and collective
                    knowledge.
                </h1>

            </div>

        </div>


        <!-- ============================================================Form Area====================================== -->


        <div id="apply_form" class=" py-5" style="background-color: white; display: flex;">
            <div class="container row py-2" style="margin: auto;">

                <div class="form_row col-md-6">
                    <p class="text-dark text- " style="font-size: 40px; font-weight: bold;">Apply Now & be part of
                        muskowl family 2023?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab perspiciatis
                        exercitationem
                        quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas
                        hic!
                        Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur
                        adipisicing
                        elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis
                        placeat
                        maiores quo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
                </div>
                <div class="form_row col-md-6 py-5 px-5"
                    style="border: 2px solid black; box-shadow: 16px 12px 6px; border-radius: 5px;">


                    <form id="input_form">
                    <div class="alert alert-success d-none" id="alert" role="alert">
                        Registered Successfully
                    </div>

                        <div class="mb-3 col-md-12">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="email"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Contact Number</label>
                            <input name="phone" type="text" class="form-control" id="phone"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Applied For</label>
                            <input name="designation" type="text" class="form-control" id="designation"
                                aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                            <textarea name="address" class="form-control" id="address" rows="3"></textarea>
                        </div>


                        <div class="mb-3 col-md-12">
                            <button type="submit" id="submit" value="submit" name="submit"
                                class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <?php include "partials/_footer.php"?>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
            </script>


<script>
     $(document).ready(function() { 

        function clearFormFields() {
            $('#name').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#address').val('');
        }

          // *************************************************Insert form data*********************************************
          $("#input_form").submit(function(event) {
            event.preventDefault(); // Prevent form submission

            $.ajax({
                type: "POST",
                url: "controller.php?type=insert",
                data: $(this).serialize(),
                success: function(response) {
                    console.log(response); // Display the response in the browser console
                    // Reload the table data
                    clearFormFields(); // Clear the form fields
                    $('#alert').removeClass('d-none'); // Show the alert message
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText); // Display any error message in the browser console
                }
            });
        });
       });

</script>



    </body>

</html>