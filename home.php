<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    .front {
        margin-top: 120px;
    }

    .circle_box_con {
        margin-top: 43%;
    }

    ::-webkit-scrollbar {
        display: none;
    }
    
</style>

<body>
    <div style="background-color: rgb(52, 52, 52);">
        <?php include "partials/_navbar.php"?>
    </div>

    <div style="display: flex; position: absolute; right: 100px; bottom: 100px; z-index: 3;">
        <div
            style=" position: fixed; border-radius: 50%; height: 90px; width: 90px; display: flex; justify-content: center; align-items: center;">
            <a href="https://chat.whatsapp.com/FpUl3WEfI047OMCSm4Tywe"> <img class="img-fluid" src="images/whatsapp.png"
                    alt=""> </a> </div>
    </div>




    <div class="" style="position: fixed; z-index: -1; display: flex; justify-content: center; width: 100%;">
        <div class="container  front" style="display: flex; justify-content: space-between;">
            <div class="box1">
                <div class="head mt-5">
                    <h1 style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-weight: bold;" class="">Welcome to my office Develop Anything</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, asperiores! Esse distinctio
                        libero magnam cum excepturi accusamus nulla dicta asperiores architecto molestias, itaque
                        saepe Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi asperiores nisi, provident
                        ut totam libero expedita? Reprehenderit commodi id obcaecati optio, </p>
                    <a class="btn btn-primary px-4 py-3 mx-2" href="">View all pages</a>
                    <a class="btn btn-light px-4 py-3" href="">View all pages</a>
                </div>
            </div>


            <div class="box2"><img src="images/group-business-people.jpg" alt="Client" width="650px"></div>
        </div>
    </div>

    <div class="" style="background-color: white;">



        <!-- =======================================================row 1=====================================/ -->

        <div class="circle_box_con py-5" style="background-color:  #222325;;">
            <div class="container">
                <h1 class="text-light py-4">Emplyoees</h1>
            </div>

            <div style="display: flex; justify-content: space-around; flex-wrap: wrap;">

                <div style="width: 150px; height: 150px; ">
                    <img src="images/images (1).jfif"
                        style="object-fit: cover; width: 100%; height: 100%; border-radius: 50%;" />
                    <div class="mt-2" style="display: flex; justify-content: center;">
                        <h5 class="text-light">Jhon</h5>
                    </div>
                </div>

                <div style="width: 150px; height: 150px; ">
                    <img src="images/images (2).jfif"
                        style="object-fit: cover; width: 100%; height: 100%; border-radius: 50%;" />
                    <div class="mt-2" style="display: flex; justify-content: center;">
                        <h5 class="text-light">Marry</h5>
                    </div>
                </div>

                <div style="width: 150px; height: 150px; ">
                    <img src="images/images.jfif"
                        style="object-fit: cover; width: 100%; height: 100%; border-radius: 50%;" />
                    <div class="mt-2" style="display: flex; justify-content: center;">
                        <h5 class="text-light">Abrhem</h5>
                    </div>
                </div>

                <div style="width: 150px; height: 150px; ">
                    <img src="images/credit-client.png"
                        style="object-fit: cover; width: 100%; height: 100%; border-radius: 50%;" />
                    <div class="mt-2" style="display: flex; justify-content: center;">
                        <h5 class="text-light">djen</h5>
                    </div>
                </div>

                <div class="mb-3" style="width: 150px; height: 150px; ">
                    <img src="images/credit-client.png"
                        style="object-fit: cover; width: 100%; height: 100%; border-radius: 50%;" />
                    <div class="mt-2" style="display: flex; justify-content: center;">
                        <h5 class="text-light">djen</h5>
                    </div>
                </div>

            </div>
            <div class="mt-5 text-light" style="padding: 0px 100px;">
                <h3 style="color: grey;">Todays growing youth__</h3>
                <p class="text-light"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis amet quia
                    animi rem harum, quod veniam officiis vero quaerat vel quidem dignissimos saepe ea non temporibus
                    itaque quam sit assumenda? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati dolor
                    vero fuga dolorum, necessitatibus corrupti veniam ipsa quisquam alias beatae, mollitia laboriosam
                    saepe ratione temporibus tenetur quaerat asperiores nam quos! Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Repellendus, expedita pariatur quibusdam qui vel sit nihil provident,
                    eius illum quis corrupti doloribus neque perferendis, iure dicta ipsa! Reiciendis, sint harum.</p>
            </div>

        </div>






        <!-- =======================================================row 2=====================================/ -->

        <div class="box2_con py-5"
            style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap-reverse;">
            <div class="box2 " style="width: 650px;">
                <h2>We build greater futures through innovation and collective knowledge.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab perspiciatis exercitationem
                    quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas hic!
                    Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores quo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
            </div>

            <div class="box2"><img style="width: 450px; height: 450px; object-fit: cover;" src="images/hand_shake.jpg"
                    alt="">
            </div>
        </div>

        <!-- =======================================================row 3=====================================/ -->

        <div class="box2_con py-4"
            style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
            <div class="box2"><img style="width: 450px; height: 450px; object-fit: cover;" src="images/group_fun.jpg"
                    alt="">
            </div>
            <div class="box2 " style="width: 650px;">
                <h2>We build greater futures through innovation and collective knowledge.</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ab perspiciatis exercitationem
                    quas dolore error dolorum sequi expedita modi, reprehenderit amet anim sapiente voluptas hic!
                    Voluptatem eum quibusdam sint mollitia! asds Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Sapiente hic modi architecto temporibus praesentium, ratione deserunt odio quis placeat
                    maiores quo ipsa aspernatur optio tempora id. Dolores mollitia commodi illum!</p>
            </div>


        </div>

        <!-- =======================================================row 4=====================================/ -->

        <div class="mt-" style="background-color:  #222325; padding: 80px 10px; overflow: scroll;">
            <div class="container" style="max-width: 1400px;">
                <h1 class="text-light">Service</h1>
            </div>

            <div class="sliders mt-5" style="display: flex; justify-content: space-evenly; gap: 10px; ">
                <div>
                    <div class="slide_image " style="filter: brightness(0.6);" onmouseover="light(this)"
                        onmouseout="dark(this)"><img style="border-radius: 13px;" src="images/Untitled design (2).png"
                            alt="" width="300px" height="300px">
                    </div>
                    <div class="text-light mt-3 " style="display: flex; justify-content: center;">
                        <h3>Cloud</h3>
                    </div>
                </div>

                <div>
                    <div class="slide_image" style="filter: brightness(0.6);" onmouseover="light(this)"
                        onmouseout="dark(this)"><img style="border-radius: 13px;" src="images/Untitled design (3).png"
                            alt="" width="300px" height="300px" style="">
                    </div>
                    <div class="text-light mt-3" style="display: flex; justify-content: center;">
                        <h3>Coginative Buissness</h3>
                    </div>
                </div>


                <div>
                    <div class="slide_image" style="filter: brightness(0.6);" onmouseover="light(this)"
                        onmouseout="dark(this)"><img style="border-radius: 13px;" src="images/Untitled design.jpg"
                            alt="" width="300px" height="300px" style="">
                    </div>
                    <div class="text-light mt-3" style="display: flex; justify-content: center;">
                        <h3>Consulting</h3>
                    </div>
                </div>


                <div>
                    <div class="slide_image" style="filter: brightness(0.6);" onmouseover="light(this)"
                        onmouseout="dark(this)"><img style="border-radius: 13px;" src="images/Untitled design.png"
                            alt="" width="300px" height="300px" style="">
                    </div>
                    <div class="text-light mt-3" style="display: flex; justify-content: center;">
                        <h3>Cyber Security</h3>
                    </div>
                </div>



            </div>

            <div class="mt-5" style="display: flex; justify-content: center;">
                <a href="" class="btn btn-light py-2 px-4" style="border-radius: 140px;">
                    <p>View More</p>
                </a>
            </div>

        </div>


        <!-- =======================================================row 5=====================================/ -->

        <div class="mt-0" style="display: flex; justify-content: space-between; flex-shrink: 4;">

            <div class="img_text_collapse" style="max-width: 70%;"> <img class="img-fluid" src="images/kids.jpg" alt="">
            </div>

            <div style="display: flex; align-items: center; flex-shrink: 4;">

                <div class="img_text_collapse p-5" style="width:55%; position: absolute; right: 0%; background-color: white;">
                    <h5>WHO WE ARE</h5>
                    <p style="font-size: 40px; color: brown;">We build greater futures through innovation and collective
                        knowledge.
                    </p>
                    <p style="font-size: 20px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
                        debitis expedita dolore, esse unde similique iure consequuntur ad libero, laudantium ut, aliquid
                        rerum repudiandae quaerat nemo culpa fuga quas magnam! </p>
                    <a href="" class="btn btn-dark py-3"> Get to know us</a>
                </div>

            </div>

        </div>






        <!-- =======================================================row 6=====================================/ -->
        <!-- 
        <div class="sliders mt-5" style="display: flex; justify-content: space-between; gap: 40px; overflow: scroll;">

            <div class="slide_image"><img src="images/Untitled design (2).png" alt="" width="350px" height="550px">
            </div>

            <div class="slide_image"><img src="images/Untitled design (3).png" alt="" width="350px" height="550px">
            </div>

            <div class="slide_image"><img src="images/Untitled design.jpg" alt="" width="350px" height="550px"></div>

            <div class="slide_image"><img src="images/Untitled design.png" alt="" width="350px" height="550px"></div>

            <div class="slide_image"><img src="images/Untitled design (1).png" alt="" width="350px" height="550px">
            </div>

            <div class="slide_image"><img src="images/Untitled design (2).png" alt="" width="350px" height="550px">
            </div>

        </div> -->


    </div>
    <?php include "partials/_footer.php"?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        function light(element) {
            element.style.filter = "brightness(1)";
        }

        function dark(element) {
            element.style.filter = "brightness(0.6)";
        }
    </script>
</body>

</html>