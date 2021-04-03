<?php
function renderFabricCard($title, $link, $img, $desc)
{
    echo "<div class='col-6 p-4'>
  <div class='card' style='width: 100%;height: 100%;'>
     <div class='card-body' >
       <div class='row'>
         <div class='col-6'>
           <img src='./images/$img' class='card-img-top' alt='...' style='width: 100%;height: 100%;'>
          </div>
          <div class='col-6'>
             <h1 >$title</h1>
             <div style='min-height:300px;'>
             <p style='color:black'>$desc</p>
             </div>
            </div>
         </div>
       </div>
  </div>
</div>
";
}