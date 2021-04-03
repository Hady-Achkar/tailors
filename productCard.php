<?php
function renderProductCard($name,$src,$id,$price,$color){
  echo "
    <div class='col-4'>
<div class='card bg-dark text-primary m-3'>
  <div class='card-header bg-light text-dark '>
    <h5>$name</h5>
  </div>
  <div class='card-body p-0' style='height: 250px; width: 100%'>
    <img
      class='card-img'
      style='width: 100%; height: 100%; object-fit: fill'
      src='./images/$src'
    />
  </div>
  <div class='card-body text-dark bg-light'>
    <div class='row align-items-center'>
      <div class='col'>
        <strong>$price $</strong>
      </div>
      <div class='col'>
        <a href='./product.php?id=$id' name='add-to-cart' class='btn btn-primary w-100'
          >View Details</a
        >
      </div>
    </div>
  </div>
</div>
</div>
"; } ?>
