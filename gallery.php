<?php include('template/header.php'); ?>
<style>
    img{
        width: 75%;
        box-shadow: 0px 10px 20px 1px grey;
        transition: width 2s;
        transition: height 2s;
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
        
        echo "<div class='justify-center';'><img 
        data-bs-toggle='modal' 
        data-bs-target='#myModal' 
        class='m-4' 
        src=datas/fotos/album/$file></div>";
    }


    $num_files = count($files)-2;



    ?>
    <div  class="modal fade" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Foto</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <img  id="selected" src="example(this)">
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Zavrieť</button>
            </div>

            </div>
        </div>
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function example(source){
          $("img").click(function(){
            var source = $(this).attr("src");
            
            document.getElementById("selected").src=source;
            
          });
});
</script>

<?php include('template/footer.php'); ?>