<?php
function renderTailorCard($src, $alt, $title, $desc, $ID)
{
    echo "
  <div class='col-3 m-3'>
  <div class='card' style='width:300px'>
<img class='card-img-top' src='$src' alt='$alt' style='width:300px; height:300px'>
<div class='card-body'>
  <h5 class='card-title'>$title</h5>
  <p class='card-text'>$desc</p>
  <a href='./actions/contract-phase-one-api.php?id=$ID' class='btn btn-primary'>Order Now!</a>
</div>
</div>
</div>
";
}