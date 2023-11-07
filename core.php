<?php include('template/header.php'); ?>
<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="get">
<div class="container justify-center mt-5">
    <div class="row">
        <div class="col-8">
            <?php
                $attnum = 1;
            ?>
            <div class="card" >
            <img class="card-img-top" src="" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $attnum ?></h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            
            <div class="btn-group-vertical h-100">
                
                    <button type="button" name="minus" class="btn btn-secondary">Predošlá</button>
                    <button type="button"  name="plus" class="btn btn-outline-secondary">Ďalšia</button>
                
            </div>
            
        </div>
    </div>
</div>
</form>
<?php include('template/footer.php'); ?>