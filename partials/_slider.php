<style>
.slider{
    position: absolute;
  left: 0px;
  top: 0px;
  z-index: -1;
}
.next_prev{
  position: absolute;
  top: 300px;
  z-index: -1;
}
.head{
  position: absolute;
  left: 9%;
  top: 35%;
  z-index: 0;
  /* display: inline-block; */
  width: 50%;

}
</style>

<div class=" head"><h1 class="">Welcome to my office <br> Develop Anything</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt, <br> asperiores! Esse distinctio libero magnam cum  excepturi accusamus <br> nulla dicta asperiores architecto molestias, itaque saepe sequi. Aut dolorum assumenda tenetur velit!</p>
<a class="btn btn-primary mx-2" href="">View all pages</a>
<a class="btn btn-light" href="">View all pages</a>
</div>

<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators next_prev">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <div class="carousel-inner slider" style="height: 80vh;">
    <div class="carousel-item active">
      <img src="images/slide4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slide2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/slide1.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev next_prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next next_prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>