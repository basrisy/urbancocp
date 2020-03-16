<!DOCTYPE html>
<html lang="en">

<?php $this->load->view("_partials/head"); ?>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <?php $this->load->view("_partials/header"); ?>
    <!-- Header Area End -->    
    <?php $this->load->view("_partials/content"); ?>
    <!-- Footer Area Start -->
    <?php $this->load->view("_partials/footer"); ?>
    <!-- Footer Area End -->

    <!-- All JS Files -->
    <?php $this->load->view("_partials/js.php") ?>

</body>

</html>