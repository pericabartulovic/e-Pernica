$(document).ready(function(){
   
  if(localStorage.getItem("prviPut")==null){
    alert("Ova aplikacija je samo informativnog karaktera i služi kao pripomoć u školi");
    localStorage.setItem("prviPut","done");
 }
 
  //alert('Ova aplikacija je samo informativnog karaktera i služi kao pripomoć u školi', 'jquery basic alert box');

    $('body').removeClass('prvaPoz').addClass('drugaPoz');

    $('[data-toggle="tooltip"]').tooltip();

    $(function () {
        $('[data-toggle="popover"]').popover()
      });


    
      $('[data-toggle="tooltip2"]').tooltip();

      $(function () {
          $('[data-toggle="popover2"]').popover()
        });

  /* $("#supozorenje2").click(function() {
      if (confirm("Jeste li sigurni da želite obristati raspored?")) {
        $("#retci_tablice").remove();
      } return false;
  }); */
  
});