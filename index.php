<?php 
session_start();
require('templates/header.php');
?>

<?php  
//соединение с бд
    require('connect.php');
//подключение к бд
    if(!isset($_SESSION['sql'])){
        $_SESSION['sql'] = "SELECT * FROM `tickets`";
    }
    $sql_text = $_SESSION['sql'];
    $sql=$link->query($sql_text); 


    $page=$_GET['page'];

    if (!isset($page)) {
        require('templates/main.php');
    }  elseif ($page == 'index') {
        require('templates/main.php');
    } elseif ($page == 'flight') {
        require('flight.php');
    } elseif ($page == 'profile') {
        require('profile.php');
    } elseif ($page == 'login') {
        if ($_SESSION['user']) {
            require('profile.php');
        }else{
            require('login.php');
        }
    } elseif ($page == 'register') {
        require('register.php');
    } elseif ($page == 'yourcart') {
        require('checkout-yourcart.php');
    } elseif ($page == 'checkcustomer') {
        require('checkout-customer.php');
    } elseif ($page == 'checkcomplete') {
        require('checkout-complete.php');
    } elseif ($page == 'detail') {
        $idg = $_GET['id'];
        $good = [];
        
        foreach ($sql as $ticket) {
            if($ticket['id'] == $idg) {
                $good=$ticket;
                break;
            }
        }

        
    require('flight-detail.php');

    //категории
}
?>



<?php 
require('templates/footer.php');
?>


    <!-- REVOLUTION DEMO -->
    <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript">
            $('.timepicker-24-hr').wickedpicker({now: '0:00', twentyFour: true, title:
                    'Heure', showSeconds: false});
            var timepickers = $('.timepicker-24-hr').wickedpicker(); 
            console.log(timepickers.wickedpicker('time', 1));// pour avoir la valeur d'un des timepicker
        </script>
    <script type="text/javascript">
        if($('#slider-revolution').length) {
            $('#slider-revolution').show().revolution({
                ottedOverlay:"none",
                delay:10000,
                startwidth:1600,
                startheight:650,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                                        
                simplifyAll:"off",

                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",
                nextSlideOnWindowFocus:"off",

                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                drag_block_vertical: false,
                
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                                        
                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner2",
                                        
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",
                
                
                
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
        }
    </script>
