$(document).ready(function ()
{
  $("#login").click(function(){
        showpopup();
  });
});

function showpopup()
{
    $("#loginform").fadeIn();
    $("#loginform").css({"visibility": "visible", "display": "block"});
}
