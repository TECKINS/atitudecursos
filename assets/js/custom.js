$(document).ready(function () {
    mainApp.main_fun();

    $('#menu-toggle').click(function(event) {
        $('.sidebar-menu').toggleClass('active');
    });
});
