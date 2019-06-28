$("document").ready(function(){

    $('#quantite').val(1);
    $('#submit').attr('disabled', 'disabled');
    var value = '';
    var libelle = '';
    var id = 0;
    var prix = 0;

    $('#quantite').change(function(){
        var total = prix * $('#quantite').val();
        $('#total').val(total);
        if($('#quantite').val()<1){
            $('#submit').attr('disabled', 'disabled');
        }else{
            $('#submit').removeAttr('disabled');
        }
    });

    
        
        $('#total').val(0);
        value = $("#libelle").attr("value");
        // $('#libelle').val(libelle); 
        id = value.split('-')[0];
        prix = value.split('-')[1];

        if(value !=0 ){
            $('#total').val(prix);
            $('#submit').removeAttr('disabled');
        }else{
            $('#submit').attr('disabled', 'disabled');
        }

        
        $('#prix').val(prix);
    
});


// look the video 
