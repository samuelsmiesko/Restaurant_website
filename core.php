<style>


.event:hover{
    background-image: linear-gradient(to right, LightGray , white);
  

}


</style>
<?php

header("Content-type: text/html");

$file = fopen("datas/events.txt","r") or die("Error");

?>
<?php include('template/header.php'); ?>
<form action="<? echo $_SERVER['PHP_SELF']; ?>" method="get">
<div class="container justify-center mt-5">

    <h2 class="text-center mt-5 mb-5">Pripravované akcie</h2>
    
    <?php
        while(($info = fgets($file)) != false) {?>

                    
                    
                    <?php
                        $row = explode('/n',$info);
                        $Day = null;
                        foreach($row as $dataTd) {
                            
                           
                            
                            $Day = $dataTd;
                            
                            $row2 = explode(';',$info);
                              

                                if(isset($row2[1])){
                                    
                                    
                                    
                                    echo "<div class='event p-4 border-top'>
                                        <div class='row'>
                                            <div class='col-6'>
                                                <h4>".$row2[0]."</h4>".
                                                "<h5 class='mt-5'>Začiatok podujatia ".$row2[1]."</h5>".
                                                "<h5 class='mt-5'>Dátum podujatia ".$row2[2]."</h5>".
                                                "<p style='font-size:1.5rem'class='mt-5 text-muted'>".$row2[3]."</p>
                                                
                                            </div>
                                            <div class='col-6'>
                                                <img style='width: 100%;'src=datas/fotos/$row2[4]>
                                                
                                            </div>
                                        </div>
                                    </div>";

                                }else{
  
                                        echo "<h2 >".$Day."</h2>";
  
                                }

                        }
                        ?>

            <?php    
            }      

        fclose($file);
    ?>

</div>
</form>
<?php include('template/footer.php'); ?>