<?php
include './header.php';
require './db-connect.php';
include './tailor-card.php';
if (isset($_POST['submit'])) {
    $length = $_POST['search-bar'];
    if (!empty($length)) {
        echo '<div class="bg-light" style="min-height:80vh;padding-top:1.5rem;">
    <div class="container">
    ';
        $search = mysqli_real_escape_string($conn, $_POST['search-bar']);
        $tailorsQuery = "SELECT * FROM tailors WHERE tailor_name LIKE '%$search%' OR tailor_email LIKE '%$search%'
        OR tailor_phone LIKE '$search' LIMIT 3";
        $premadesQuery = "SELECT * FROM premades WHERE premade_name LIKE '%$search' OR premade_size LIKE '%$search' OR premade_description LIKE '%$search' OR premade_size LIKE '%$search' LIMIT  3";
        $fabricQuery = "SELECT * FROM fabric WHERE fabric_title LIKE '%$search' OR fabric_desc LIKE '%$search' LIMIT 3";
        $tailorsResult = mysqli_query($conn, $tailorsQuery);
        $premadesResult = mysqli_query($conn, $premadesQuery);
        $fabricResult = mysqli_query($conn, $fabricQuery);
        $tailorsResultLength = mysqli_num_rows($tailorsResult);
        $premadesResultLength = mysqli_num_rows($premadesResult);
        $fabricResultLength = mysqli_num_rows($fabricResult);
        if ($tailorsResultLength == 0 && $premadesResultLength == 0 && $fabricResultLength == 0) {
            echo '<h2>Whtever here</h2>';
        } else {
            echo "<h1>Tailors</h1>";
            echo '<div class="row">';
            while ($tailorsRow = mysqli_fetch_assoc($tailorsResult)) {
                $tailorName = $tailorsRow['tailor_name'];
                $tailorPhone = $tailorsRow['tailor_phone'];
                $tailor_email = $tailorsRow['tailor_email'];
                $tailorImg = $tailorsRow['tailor_img'];
                $tailorID = $tailorsRow['tailor_id'];
                $tailorAddress = $tailorsRow['tailor_address'];
                $alt = "$tailorName Image";
                renderTailorCard($tailorImg, $alt, $tailorName, $tailorAddress, $tailorID);
            }

            echo "</div>";
            echo '<div class="h-divider">
</div>';
            echo "<h1>Premades</h1>";
            echo "<div class='row'>";
            while ($premadesRow = mysqli_fetch_assoc($premadesResult)) {
                $premadeName = $premadesRow['premade_name'];
                $premadeDesc = $premadesRow['premade_description'];
                $premadeImg = $premadesRow['premade_img'];
                $premadeID = $premadesRow['premade_id'];
                $alt = "$premadeName Image";
                renderTailorCard($premadeImg, $alt, $premadeName, $premadeDesc, $tailorID);

            }
            echo "</div>";
            echo "<h1>Fabric</h1>";
            echo "<div class='row'>";
            function truncate($text, $length)
            {
                if ($length >= \strlen($text)) {
                    return $text;
                }
                return preg_replace(
                    "/^(.{1,$length})(\s.*|$)/s",
                    '\\1...',
                    $text
                );
            }

            while ($fabricRow = mysqli_fetch_assoc($fabricResult)) {
                $fabricTitle = $fabricRow['fabric_title'];
                $fabricDesc = $fabricRow['fabric_desc'];
                $fabricImg = $fabricRow['fabric_img'];
                $fabricID = $fabricRow['fabric_id'];
                $link = $fabricRow['fabric_link'];
                $alt = "$fabricTitle Image";
                $edittedText = truncate($fabricDesc, 60);
                renderTailorCard($fabricImg, $alt, $fabricTitle, $edittedText, $link);

            }
            echo "</div>";
            echo '<div class="h-divider">
</div>';

            echo '
      </div>
      </div>';

        }
    } else {
        //incase the user presses the button without entering search terms
        header("Location: index.php?Please enter a search term2");
    }
} else {
    //incase user manipulated the URL directly!
    header("Location: index.php?Please enter a search term");
}