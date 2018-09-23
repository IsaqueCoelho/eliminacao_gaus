$(document).ready(function(e) {

    var vectorA = [];
    var vectorB = [];

    $('.sidenav').sidenav();

    $("input[type=text]").keyup(function(){
        $(this).val($(this).val().replace(/[^0-9]/g,''));
    });

    $(".btnResultCalc").on('click', function(){

        getData();

        if(validateForms() == true){
            sendData();
        }

    })

    function getData(){

        $('.matrixA input[type=text]').each(function(){
            vectorA.push($(this).val());
        });

        $('.vectorB input[type=text]').each(function(){
            vectorB.push($(this).val());
        });

    }

    function validateForms(){

        var invalidInput = null;

        $('input[type=text]').each(function(){
            
            invalidInput = ( $(this).val() == null || $(this).val() == "" ) ? (invalidInput + 1) : (invalidInput + 0);
        });

        return ( invalidInput == 0 ) ? true : false;
    }

    function sendData(){

        $.ajax({
            url: "class/calculate.php",
            type: 'POST',
            dataType: 'json',
            data: { 'vectorA[]' : vectorA, 'vectorB[]' : vectorB},
            beforeSend : function(){
                disableForm();
            }
        })
        .done(function(data){

            enableForm();
            popupateModel(data);
        });

    }

    function popupateModel(data){

        $('.result').each(function(index, element){

            $(this).text(data.result[index + 1]);
        });

        M.toast({html: data.message, classes: 'rounded'});

        callModel();
    }

    function callModel(){

        $('.modal').modal();
        //now you can open modal from code
        $('#resultCalc2').modal('open');
        //or by click on trigger
        $('.trigger-modal').modal();
    }


    function disableForm(){
        $('.matrixA input[type=text]').each(function(){
            $(this).prop('disabled', true);
        });

        $('.vectorB input[type=text]').each(function(){
            $(this).prop('disabled', true);
        });

        $('.btnResultCalc').html("Enviando...");
        $('.btnResultCalc').prop('disabled', true);
    }

    function enableForm(){
        $('.matrixA input[type=text]').each(function(){
            $(this).prop('disabled', false);
        });

        $('.vectorB input[type=text]').each(function(){
            $(this).prop('disabled', false);
        });

        $('.btnResultCalc').html("Calcular");
        $('.btnResultCalc').prop('disabled', false);

        vectorA = [];
        vectorB = [];
    }

});