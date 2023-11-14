<?php include('template/header.php'); ?>
<style>
    img{
        width: 75%;
        box-shadow: 0px 10px 20px 1px grey;
        transition: width 2s;
        transition: height 2s;
    }

    img:hover {
        width: 80%;
        height: auto;
        
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<div class="container text-center p-5">
    <h1>Photo gallery</h1>
    <div class="container">
    <?php 

    $directory = "datas/fotos/album";

    $files = scandir($directory);
    
    $output = array_slice($files, 2); 

    foreach($output  as $file) {
        
        echo "<div class='justify-center';'><img class='m-4' src=datas/fotos/album/$file></div>";
    }


    $num_files = count($files)-2;



    ?>
    </div>
</div>
<?php include('template/footer.php'); ?>