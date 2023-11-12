<!-- Carousel -->
<?php include('template/header.php'); ?>
<div class=" container-fluid  justify-center mt-5">
    <div  id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    </div>
</div>
<?php include('template/footer.php'); ?>