
jQuery(function($){
$("#protocol").change(function(){
var html="";
if($(this).val()=="email"){
$("span#label").text("Your Email :");
$("#field").attr("placeholder","eg: name@example.com");
$("#field").removeAttr("maxlength");
}else{
$("span#label").text("Your Phone :");
$("#field").attr("placeholder","eg: 7028982545");
$("#field").attr("maxlength","10");

}
});
});