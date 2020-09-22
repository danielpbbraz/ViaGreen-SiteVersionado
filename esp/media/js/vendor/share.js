var Share = (function(){
    var module = {};

    module.facebook = function(url){
         var winWidth = 566;
         var winHeight = 436;

         var winTop = (screen.height / 2) - (winHeight / 2);
         var winLeft = (screen.width / 2) - (winWidth / 2);
         
         window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width='+winWidth+',height='+winHeight);
    }

    module.twitter = function(url, descr){
        var winWidth = 660;
        var winHeight = 260;

        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('https://twitter.com/share?url=' + encodeURIComponent(url) + '&text=' + encodeURIComponent(descr), 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width='+winWidth+',height='+winHeight);
    }

    module.linkedin = function lkShare(url, title, descr){

        var winWidth = 626;
        var winHeight = 436;

        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('http://www.linkedin.com/shareArticle?mini=true&url='+encodeURIComponent(url)+'&title='+encodeURIComponent(title)+'&summary='+encodeURIComponent(descr), 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width='+winWidth+',height='+winHeight);
    }

    module.googleplus = function gpShare(url){

        var winWidth = 510;
        var winHeight = 436;

        var winTop = (screen.height / 2) - (winHeight / 2);
        var winLeft = (screen.width / 2) - (winWidth / 2);
        window.open('https://plus.google.com/share?url='+encodeURIComponent(url), 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width='+winWidth+',height='+winHeight);
    }

    return {
        facebook: module.facebook,
        twitter: module.twitter,
        linkedin: module.linkedin,
        googleplus: module.googleplus
    }
}());