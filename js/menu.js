$(document).ready(function () {
    $('#menu ul').hide()
    $(document).click( function(event){
        $('#menu ul').slideUp("slow"); /*сворачивем меню при клике в любом месте доумента*/
        event.stopPropagation();
    });
    $('.menu-level-one-a').click(function() {
        $('#menu ul').slideUp("slow"); /*сворачивем меню при клике на любую другую ссылку меню первго уровня*/
        $(this).siblings().slideToggle("slow"); /*сврачиваем - разворачиваем меню при клике на ссылку меню первго уровня*/
        return false;
    });
})
