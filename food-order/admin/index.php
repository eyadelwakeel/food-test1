<?php 

include('partials/menu.php')

?>

        <!-- main content section start -->
        <div class="main-content">
            <div class="wrapper">
                <h1>DASHBORD</h1><br><br><br>
                <?php
                if(isset($_SESSION['login'])){
                echo $_SESSION['login'];
                unset($_SESSION['login']);
                
            }
            ?><br><br><br>
                <div class="col-4 text-center">
                    <H1>5</H1>
                    Category
                </div>
                <div class="col-4 text-center">
                    <H1>5</H1>
                    Category
                </div>
                <div class="col-4 text-center">
                    <H1>5</H1>
                    Category
                </div>
                <div class="col-4 text-center">
                    <H1>5</H1>
                    Category
                </div>
               
            </div>
        </div>
        <!-- main content section end -->
        
        <?php include('partials/footer.php')?>