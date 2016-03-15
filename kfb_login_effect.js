$(document).ready(function(){

  //  alert("Document is ready");
   $("#show_login").click(function(){
    showpopup();
   });
   $("#close_login").click(function(){
    hidepopup();
   });

});


function showpopup()
{


    //alert("showpopup()");


    $( "#dialog" ).dialog("open");
    $("#dialog").css({"visibility":"visible","display":"block"});
    //alert("showpopup()");
    $("#dialog").fadeIn();

    var show = $( "#dialog" ).dialog( "option", "show" );

}

function hidepopup()
{
   $("#dialog").fadeOut();
   $("#dialog").css({"visibility":"hidden","display":"none"});
   $( "#dialog" ).dialog("close");
}