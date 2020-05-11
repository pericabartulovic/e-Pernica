$(document).ready(function(){
   
  if(localStorage.getItem("prviPut")==null){
    alert("Ova aplikacija je samo informativnog karaktera i služi kao pripomoć u školovanju");
    localStorage.setItem("prviPut","done");
 }


    $('body').removeClass('prvaPoz').addClass('trecaPoz');


});