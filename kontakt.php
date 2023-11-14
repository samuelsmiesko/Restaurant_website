<?php include('template/header.php'); ?>
<div class="container text-center col-10 p-5">
    <h2>Pošlite nám spravu</h2>
  
  <form>
    <div class="form-group">
      <label for="usr">Email:</label>
      <input type="text" class="form-control m-1" id="usr">
    </div>
    
    <div class="form-group">
      <label for="comment">Správa:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
    <button type="button" class="btn btn-danger w-50 m-3">Odoslať</button>
  </form>
</div>
<?php include('template/footer.php'); ?>