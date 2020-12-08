<?php  

    $leeftijd = 19;
?>
<html>
<head>
</head>
<body>

    <div class="menu">
        <?php include 'menu.php'; ?> 
    </div>

    <div id="isMeerderJarig">
        <?php
            if($leeftijd > 18 ){
                echo "<h4>Je bent oud genoeg om deze pagina te bezoeken</h4>";
            }
        ?>
    </div>

</body>
</html>