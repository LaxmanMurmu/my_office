<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        background-color: black;
    }
    
</style>

<body>

   <div style="display: flex;">
    <div  style=" position: fixed; background-color: gray; border-radius: 50%; height: 70px; width: 70px; display: flex; justify-content: center; align-items: center;" > <a href="home.php"><i class="fa fa-arrow-left" style="font-size:48px;color:white"></i></a> </div>
   </div>

   <div style="display: flex; position: absolute; right: 100px; bottom: 100px; z-index: 3;">
    <div  style=" position: fixed; border-radius: 50%; height: 90px; width: 90px; display: flex; justify-content: center; align-items: center;" > <a href="https://chat.whatsapp.com/FpUl3WEfI047OMCSm4Tywe"> <img class="img-fluid" src="images/whatsapp.png" alt=""> </a> </div>
   </div>


    <div class="outbox row" style="display: flex; justify-content: space-between;">


        <div class="col-md-8">

            
            <div class="container mt-5" style="max-width: 600px;">
                <h4 class="" style=" color: gray;">WEBSITE FEEDBACK</h4>
                <p style="color: gray;">Let us know what you think of the tcs.com experience. We welcome your suggestions, comments, and opinions.</p>
                <form class="mt-5">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-light">First Name</label>
                        <input type="email" class="form-control" placeholder="Enter your first name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-light">Last Name</label>
                        <input type="email" class="form-control"  placeholder="Enter your last name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
                        <input type="email" class="form-control"  placeholder="Enter your email address" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label text-light">How can we help you</label>
                        <textarea class="form-control"  placeholder="Plese Write Something" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>

                      <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label text-light" for="exampleCheck1">I concern to processsing of my Personal data entered above for the purpose of recording the feedback</label>
                      </div>

                      <div class="mb-3 mt-5">
                        <p class="text-light">For further details on how your personal data will be processed and how your consent can be managed, refer to the <h5><a style="color: gray;" href=""> TCS Privacy Notice.</a> </h5> ​</p>
                      </div>

                    <button type="submit" style="background-color: rgb(187, 187, 187); border-radius: 30px;" class="btn btn- px-5 py-3">Send</button>
                </form>
            </div>
        </div>

        <div class="col-md-4" style="position: fixed; right: 0;">
        
                <img  class="col-md-12" height="100%" src="images/man.png" alt="Conatct">
       
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>