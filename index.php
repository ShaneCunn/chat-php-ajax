<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 12/02/2018
 * Time: 19:46
 */
//include 'DB/config.php';
include 'DB/setting.php';
//echo 'Hello shane';
include 'templates/header.blade.php';
include 'templates/nav.blade.php';
session_start();
$_SESSION['username'] = "Shane Cunningham";
//var_dump($_SESSION);
?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="starter-template">
                <h1><?php echo Project_Name ?></h1>


                <div id="wrapper">
                    <div class="chat_wrapper">

                        <div id="chat"></div>


                        <form method="POST" id="messageform">


                    <textarea name="message" class="textarea">



                    </textarea>
                        </form>
                    </div>

                </div>


            </div>

        </div>


    </div>
    </div>
    <!-- /.row -->


<?php include 'templates/footer.blade.php'; ?>