<header class=" bg-danger bg-gradient header text-white text-center py-4 mb-5">
        <div class="">
                <?php
                        // el @ hace un bypass a cualquir error
                        @session_start();
                        // echo $_SESSION['header'];
                        if (isset($_SESSION['header'])){
                                echo '<div class="container">
                                        <h1 class="">Logueado como: '. $_SESSION['header'].'</h1>
                                        </div>';

                                // unset($_SESSION['header']);
                        }
                        else
                        {
                        echo '<div class="">
                                <h1 class="mb-0">ChongueAR</h1>
                                </div>';
                        }
                ?>
        </div>
</header>

