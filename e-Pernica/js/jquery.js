$(document).ready(function(){
    
    // alert('Ova aplikacija je samo informativnog karaktera i kao pomoć u školi', 'jquery basic alert box');

    $('body').removeClass('prvaPoz').addClass('drugaPoz');

    $('[data-toggle="tooltip"]').tooltip();

    $(function () {
        $('[data-toggle="popover"]').popover()
      })





});