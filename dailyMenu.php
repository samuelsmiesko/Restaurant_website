<?php include('template/header.php'); ?>

<?php

    header("Content-type: text/html");

    $file = fopen("datas/DailyMenu.txt","r") or die("Error");

    ?>


    <div class="container-fluid text-center mt-5">
    <?php
        while(($info = fgets($file)) != false) {

            $row = explode('/n',$info);

                ?>
                <table class="container table ">
                
                <tbody>
                    <tr>
                    <?php
                        while(($info = fgets($file)) != false) {
                            
                            $row = explode(';',$info);
                            echo "<tr>";
                                    foreach($row as $data) {
                                        if(trim($data) == 'Pondelok' or trim($data) == 'Utorok' 
                                        or trim($data) == 'Streda' 
                                        or trim($data) == 'Štvrtok' 
                                        or trim($data) == 'Piatok'){
                                            echo "<td><h4 class='text-center mt-5 mb-4'>".htmlspecialchars($data)."</h4></td>";
                                        }else{
                                            echo "<td>".htmlspecialchars($data)."</td>";
                                        } 
                                        
                                    };
                            echo "</tr>\n";
                        }
                        
                        ?>
                    </tr>
                </tbody>
            </table>
            <?php    
            }      

        fclose($file);
    ?>
    </div>
<?php include('template/footer.php'); ?>