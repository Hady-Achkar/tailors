<?php
function renderTailorCard($src, $alt, $title, $desc, $ID)
{
    echo "
  <div class='col-3 m-3'>
  <div class='card' style='width:300px'>
<img class='card-img-top' src='$src' alt='$alt' style='width:300px; height:300px'>
<div class='card-body'>
  <h5 class='card-title'>$title</h5>
  <p class='card-text'>$desc</p>";
    if (isset($_SESSION['login']) && $_SESSION['user_type'] === 'customer') {
        echo "
    <form action='./actions/contract-phase-one-api.php' method='POST' enctype='multipart/form-data'>
    <input type='file' name='image' required/>
    <input type='text' name='id' value='$ID' hidden/>
    <input type='submit' name='submit' value='Order Now!' class='btn btn-primary mt-2 w-100'/>
    </form>
    ";
    }
    echo "
</div>
</div>
</div>
";
}