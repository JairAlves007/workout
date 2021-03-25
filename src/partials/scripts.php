    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/75b7fa3d71.js"></script>
    <script src="assets/js/materialize.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/slider.js"></script>
    <script src="assets/js/sidenav.js"></script>
    <script src="assets/js/cart.js"></script>
    <script src="assets/js/favorite.js"></script>

    <script>
        <?php
            if(isset($_SESSION['msg'])):
        ?>

            M.toast({html: '<?php echo $_SESSION['msg']; ?>', classes: 'rounded'});
        
        <?php
            endif;
            unset($_SESSION['msg']);
        ?>
    </script>
</body>

</html>