<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 12/02/2018
 * Time: 19:46
 */
include 'DB/config.php';
echo 'Hello shane';
include 'templates/header.blade.php';
include 'templates/nav.blade.php';

?>

<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="starter-template">
            <h1><?php echo Project_Name ?></h1>

            <p class="lead">Complete with pre-defined CDN paths!</p>

            <p><a href="http://getbootstrap.com/getting-started/">http://getbootstrap.com/getting-started/</a></p>
        </div>
    </div>
    <!-- /.row -->
</div>


<?php include 'templates/footer.blade.php';?>