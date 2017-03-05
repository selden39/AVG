<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Галерея ателье | Ателье авторской одежды Алины Гусаровой</title>
        <meta charset="utf-8" />   

        <meta name="robots" content="all" />
        <meta name="keywords" content="галерея ателье   " />   
        <meta name="description" content="  " /> 

        <meta name="viewport" content="width=device-width, initial-scale=1" />           

        <link rel="stylesheet" href="http://alinavgusarova.ru/unitegallery/css/unite-gallery.css"/>
        
        <link rel="stylesheet" href="http://alinavgusarova.ru/css/reset.css" /> 
        <link rel="stylesheet" href="http://alinavgusarova.ru/css/style.css" />
        <link rel="stylesheet" href="http://alinavgusarova.ru/css/styleMedia.css" /> 
        
        <?php  include  'zzzFontsAndFavicon.php';  ?> 
        <script src="http://alinavgusarova.ru/unitegallery/js/unitegallery.min.js"></script>    
        <script src="http://alinavgusarova.ru/unitegallery/themes/carousel/ug-theme-carousel.js"></script>        
                
    </head>
    <body >
        <div id="body">
<!-- HEAD -->
            <?php  include  'zzzHead.php';       ?>
<!-- /HEAD -->            
            <div id="content">
                <div class="containerContent"> 
                    <div class="center">
                        <h1>Галерея ателье</h1>
                    </div> <!-- center -->

                    <div class="center">
                        <input type="button" value="Свернуть все" onclick=$('.spoiler_body').hide('normal')>
                        <input type="button" value="Открыть все" onclick=$('.spoiler_body').show('normal')>
                    </div>  
                    
                    <div class="lineheight20px">

                        <?php  include  'zzzGalleryWedding.php';       ?>

                        <?php  include  'zzzGalleryArt-gymnastics.php';       ?>                           
                        
                        <?php  include  'zzzGalleryShow.php';       ?>                             
                        
                        <?php  include  'zzzGalleryElegant.php';       ?>

                        <?php  include  'zzzGallerySchool.php';       ?>
                        
                        <?php  include  'zzzGalleryDance.php';       ?>       

                        <?php  include  'zzzGalleryChildren.php';       ?>
       
                    </div> <!-- lineheight20px -->
                </div> <!-- containerContent -->       
            </div> <!-- content --> 
<!-- FOOTER -->                 
            <?php
                include  'zzzFooter.php';
            ?>
<!-- /FOOTER --> 
            <script src="http://alinavgusarova.ru/js/spoiler.js"></script>                      
        </div>  <!-- body -->  
        <!-- Yandex.Metrika counter -->
            <script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter26881182 = new Ya.Metrika({ id:26881182, clickmap:true, trackLinks:true, accurateTrackBounce:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="https://mc.yandex.ru/watch/26881182" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
        <!-- /Yandex.Metrika counter -->
    </body>
</html>
