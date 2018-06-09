

(function($) {

    //animations
    new WOW().init();

    //dropdown


    $('.dropdown-toggle').dropdown();
    $('[data-toggle="tooltip"]').tooltip();
    $('.collapse').collapse();

    $('.mdb-select').material_select();

})(jQuery);

var i = 0;
function toggleNav() {
    if(i===1)
    {
        console.log(i);
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("dashboard-shrinked").style.display= "none";
        document.getElementById("dashboard-expanded").style.display = "block";
        i = 0;

    }

    else
    {
        console.log(i);
        document.getElementById("mySidenav").style.width = "80px";
        document.getElementById("main").style.marginLeft= "80px";
        document.getElementById("dashboard-expanded").style.display= "none";
        document.getElementById("dashboard-shrinked").style.display = "block";
        i = 1;

    }
}

//Chart


