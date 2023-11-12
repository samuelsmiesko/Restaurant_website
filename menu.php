
<?php include('template/header.php'); ?>
<style>


.menuboxH{
  position: relative;
  left:250%;
  overflow: hidden;
}
.menuboxA{
  background-image: linear-gradient(to right, rgb(238, 186, 155) , rgb(241, 235, 227));
  box-shadow: 0px 10px 20px 1px grey;
  position: relative;
  overflow: hidden;
  animation-name: op;
  animation-duration: 1s;

}


@keyframes op {
  0%   {left:250%;}
  100% {left:0}
}

</style>


<div class="overflow-hidden container-fluid justify-center mt-5">

    <div style="height:1400px;" class=" col-md-8 col-lg-4 col-xl-4 mx-auto mb-md-0 mb-4">
      <div  style="height:350px;">
        <div id="menu1"  onclick="menuSK()" class="menuboxH text-center p-5"> 
          <h6><i class="fa fa-book" style="font-size:48px;color:black;margin-right:20px;"></i>Jedalny lístok_SK</h6>
        </div> 
      </div>
      <div style="height:350px">
        <div id="menu2" onclick="menuSKveg()"  class="text-center p-5 menuboxH"> 
          <h6><i class="fa fa-book" style="font-size:48px;color:black;margin-right:20px"></i>Jedalny lístok_vegetarianský_SK</h6>
          </div> 
      </div> 
      <div style="height:350px">
        <div id="menu3" onclick="menuEN()" class="text-center p-5 menuboxH">   
          <h6><i class="fa fa-book" style="font-size:48px;color:black;margin-right:20px"></i>Jedalny lístok_EN</h6>
          </div> 
      </div>  
      <div style="height:350px">  
        <div id="menu4" onclick="menuENveg()" class="text-center p-5 menuboxH">  
          <h6><i class="fa fa-book" style="font-size:48px;color:black;margin-right:20px"></i>Jedalny lístok_vegetarianský_EN</h6>
        </div>
      </div>
    </div> 

</div>


<script type="text/javascript">
window.addEventListener('scroll', function(event) {
  const scrollPosition = window.scrollY;
  const heightW = window.screen.height;
  const offsetTop1 = document.getElementById("menu1").offsetTop;
  const offsetTop2 = document.getElementById("menu2").offsetTop;
  const offsetTop3 = document.getElementById("menu3").offsetTop;
  const offsetTop4 = document.getElementById("menu4").offsetTop;

  if((heightW+scrollPosition>1000)){

    var elem1=document.querySelector('#menu1');
    elem1.classList.remove("menuboxH")
    elem1.classList.add("menuboxA")
  }

  if((heightW+scrollPosition>1350)){

    var elem2=document.querySelector('#menu2');
    elem2.classList.remove("menuboxH")
    elem2.classList.add("menuboxA")
    
  }

  if((heightW+scrollPosition>1700)){

    var elem3=document.querySelector('#menu3');
    elem3.classList.remove("menuboxH")
    elem3.classList.add("menuboxA")
    
  }

  if((heightW+scrollPosition>2050)){

  var elem4=document.querySelector('#menu4');
  elem4.classList.remove("menuboxH")
  elem4.classList.add("menuboxA")

  }

});
</script>

<script type="text/javascript">
  function menuSK(){
    window.location.href = "download.php?file=data/file/menu_sk.pdf";
  }

  function menuSKveg(){
    window.location.href = "download.php?file=data/file/menu_sk_veg.pdf";
  }

  function menuEN(){
    window.location.href = "download.php?file=data/file/menu_en.pdf";
  }

  function menuENveg(){
    window.location.href = "download.php?file=data/file/menu_en_veg.pdf";
  }
</script>
<?php include('template/footer.php'); ?>