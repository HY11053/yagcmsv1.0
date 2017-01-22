/**
 * Created by liang on 2016/9/22.
 */
$(".flat").each(function(h,p){
    //alert($(this).text())
   alert($(this).val);
});

function get_tags(h,p) {
    var obj_tags=Document.getElementsByClassName('flat');
    obj_tags.setAttribute('checked','checked')
}
$(function(){

    $(".clearfix.content2 img").addClass("img-responsive center-block").css('height','auto').css('border-radius','5px');
    Console.log(this);


});