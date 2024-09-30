<header class="header bg-primary text-white text-center py-4 mb-5">
        <?php
        if (isset($_SESSION['header'])){
            echo '<div class="container">
                    <h1 class="mb-0">Logueado como:'. $_SESSION['header'].'</h1>
                    </div>';
        }else{
            echo '<div class="container">
                    <h1 class="mb-0">TP PARTE 1</h1>
                    </div>';
        }
        ?>


</header>