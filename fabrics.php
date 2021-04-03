<?php include './header.php'?>
<head>
  <title>Fabric</title>
</head>
<section>
<div style="background-color: gray;min-height: 77.5vh;" >
  <div class="row" >
  <?php 
  include './fabricPagination.php';
  if (isset($_GET['page'])) {
    $actualPage=$_GET['page']+1;
    $page=$_GET['page']-1;
    $qty=$page*4;
    $query="SELECT * FROM fabric WHERE fabric_id > $qty LIMIT 4";
    $result=mysqli_query($conn,$query);
    while ($row=mysqli_fetch_assoc($result)) {
      $title=$row['fabric_title'];
      $desc=$row['fabric_desc'];
      $img=$row['fabric_img'];
      $link=$row['fabric_link'];
      renderFabricCard($title,$link,$img,$desc);
    }
  }else{
    header('Location:./index.php');
  }
  ?>
    
</div>
</div>

<nav style="background-color: gray;margin-top: -20px;">
  <ul class="pagination justify-content-center bottom mb-0" style="background-color: gray"> 
    <li class="page-item disabled" title="Previous">
      <a class="page-link rounded-circle m-1" href="">
        <i class="fas fa-chevron-left text-primary"></i></a></li>
        <?php 
        $qtyQuery="SELECT COUNT(*) FROM fabric";
        $qtyResult=mysqli_query($conn,$qtyQuery);
        $counter=1;
        $qrtRow=mysqli_fetch_assoc($qtyResult);
        $count=($qrtRow['COUNT(*)']/4);
        $thisCounter=0;
        for ($i=0; $i < $count; $i++) { 
          $thisCounter=$i+1;
          echo '<li class="page-item active"><a class="page-link rounded-circle m-1" href="fabrics.php?page='.$thisCounter.'">'.$thisCounter.'</a></li>';
        }
        ?>
        <li class="page-item" title="Next">
      <a class="page-link rounded-circle m-1" href="./fabrics.php?page=<?php echo $actualPage?>">
        <i class="fas fa-chevron-right text-primary "></i></a></li>
 
  </ul>
</nav>
</section>
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark"></a>Tailor Studio</a>
  </div>


