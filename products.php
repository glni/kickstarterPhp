<?php
/**
 * @var db $db
 */

require "settings/init.php";
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">
    
    <title>Sigende titel</title>
    
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container">
    <div class="row g-3">
        <?php
        $produkter = $db->sql("SELECT * FROM produkter");
        foreach($produkter as $produkt) {
            ?>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <?php
                        echo $produkt->prodNavn;
                        ?>
                    </div>
                    <div class="card-body">
                        <?php
                        // Indsæt andet felt fra database
                        ?>
                    </div>
                    <div class="card-footer">
                        <?php
                        // Indsæt andet felt fra database
                        ?>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
