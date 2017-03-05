        $(document).ready(function(){
            $('.popupSimple .close_window, .overlaySimple').click(function (){
                $('.popupSimple, .overlaySimple').css({'opacity':'0', 'visibility':'hidden'});
            });
            $('a.open_window').click(function (e){
                $('.popupSimple, .overlaySimple').css({'opacity':'1', 'visibility':'visible'});
               /* $('#wrapper').css({'filter':'blur(3px)'});*/
                e.preventDefault();
            });
        });