$(document).ready(() => {

    
    
$(document).click( () =>{
    
    // console.log(typeof($('select[name="paiement"] option').attr("value")));
    // console.log(typeof($('select[name="idClient"] option').attr("value")));
    // console.log($('select[name="paiement"] option').attr("value"));
    // console.log($('select[name="idClient"] option').attr("value"));
    // console.log($('tbody td').length);
    $('button[type="submit"]').text();
    if ($('tbody td').length > 1 && $('select[name="paiement"] option:selected').attr("value")!="0" && $('select[name="idClient"] option:selected').attr("value")!="0") {
        $('button[type="submit"]').removeAttr('disabled');            
    } else {
        $('button[type="submit"]').attr('disabled', 'disabled');
    }

});

// $('.squall').click( ()=>{
//     a=0;
//     while (a==0)
// });
    



});

