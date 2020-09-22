$(function(){

    $("ul.dropdown li").hover(function(){
    
        $('ul:first',this).fadeIn('fast');
    
    }, function(){
    
        $('ul:first',this).fadeOut('fast');
    
    });
    
    $("ul.dropdown li ul li:has(ul)").find("a:first").append(" &raquo; ");

});