/*http://usefulscript.ru/spoiler_smooth_opening_new.php*/


$(document).ready(function(){
 $('.spoiler_links').click(function(){
  $(this).next('.spoiler_body').toggle('normal');
  return false;
 });
});



/*
$(document).ready(function(){
 $('.spoiler_links').click(function(){
    if ($(this).next('.spoiler_body').css("display")=="none") {
    $('.spoiler_body').hide('normal');
    $(this).next('.spoiler_body').toggle('normal');
 }
 else $('.spoiler_body').hide('normal');
 return false;
 });
});
*/