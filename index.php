<?php
/**
 * Created by PhpStorm.
 * User: shane
 * Date: 12/02/2018
 * Time: 19:46
 */
include 'DB/config.php';
//echo 'Hello shane';
include 'templates/header.blade.php';
include 'templates/nav.blade.php';

?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="starter-template">
                <h1><?php echo Project_Name ?></h1>


                <div id="wrapper">
                    <div class="chat_wrapper">

                        <div id="chat">


                            <form method="POST">


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