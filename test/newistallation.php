<?php
include 'header.php';
?>
<div class="container mt-5 mr-5" style="background-color:white;">
<form>
  <div class="form-row p-1">
    <div class="form-group col-md-6">
     
    <input type="text" class="form-control" placeholder="Name" id="name">
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Contact" id="contact">
      </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      
    <input type="text" class="form-control" placeholder="Registration" id="regis">
    </div>
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Chasis" id="chasis">
    </div>
  </div>
  
  
  
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Make" id="make">
    </div>
    <div class="form-group col-md-4">
     
      <select id="inputState" class="form-control">
        <option selected>Serial...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      
    <input type="text" class="form-control" placeholder="Comment" id="model">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" placeholder="Model" id="ins">
    </div>
    <div class="form-group col-md-4">
     
      <select id="inputState" class="form-control">
        <option selected>Service type...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
    <input type="text" class="form-control"  value="New Installation">
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary p-1 mb-1">Submit</button>
</form>
</div>