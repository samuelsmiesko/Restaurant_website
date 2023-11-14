<!-- Carousel -->
<?php include('template/header.php'); ?>

<style>
.carousel-control-prev-icon,
.carousel-control-next-icon {
  height: 100px;
  width: 100px;
  outline: black;
  background-size: 100%, 100%;
  border-radius: 10%;
  border: 2px solid whitesmoke;
  background-image: none;
}

.carousel-control-next-icon:after
{
  content: '>';
  font-size: 55px;
  color: red;
}

.carousel-control-prev-icon:after {
  content: '<';
  font-size: 55px;
  color: red;
}


</style>
<div style='background-color:antiquewhite;' class=" container-fluid text-center  p-5">
    <div  id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button style='background-color:brown;height:15px' type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active slider"></button>
        <button style='background-color:brown;height:15px' type="button" data-bs-target="#demo" data-bs-slide-to="1" class="slider"></button>
        <button style='background-color:brown;height:15px' type="button" data-bs-target="#demo" data-bs-slide-to="2" class="slider"></button>
        <button style='background-color:brown;height:15px' type="button" data-bs-target="#demo" data-bs-slide-to="3" class="slider"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div style="height:450px;" class="container carousel-inner ">
        <div class="carousel-item active">
        <img src="datas/fotos/album/1.jpg" alt="1" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <img src="datas/fotos/album/2.jpg" alt="2" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <img src="datas/fotos/album/3.jpg" alt="3" class="d-block w-100">
        </div>
        <div class="carousel-item">
        <img src="datas/fotos/album/4.jpg" alt="4" class="d-block w-100">
        </div>
    </div>

    <!-- Left and right controls/icons -->
      <div class="d-none d-md-block">
        <button class="carousel-control-prev " type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span  class="carousel-control-prev-icon "></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
      </div>

    </div>
    <button type="button" class="btn btn-secondary m-4" aria-label="Left Align">
      <i ><a class="dropdown-item " href="gallery.php"><span class="fa fa-book fa-lg m-1" aria-hidden="true"></span>Gallery</a></i>
    </button>
</div>
<?php include('template/footer.php'); ?>
