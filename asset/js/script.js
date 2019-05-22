
/*----------------------------------*/
/*      Always Start Body From Top If It IS Refresh
/*----------------------------------*/

    $(window).unload(function() {
        $('body').scrollTop(0);
    });


/*----------------------------------*/
/*      Adding classes to lists
/*----------------------------------*/

$(document).ready(function() {      
    $("ul > li:nth-child(even)").addClass("even");
    $("ul > li:nth-child(odd)").addClass("odd");
    $("ul li:first-child").addClass("first-child");
    $("ul li:last-child").addClass("last-child");
}); 



/*----------------------------------*/
/*      Fixed Main NAv
/*----------------------------------*/

