/** FP Emplea JS
 * Author: Bruno Lorente
 * Company: Novadevs
 * Company URL: http://novadevs.com
 * Author URI: http://brunolorente.com
 * Version: 0.0.1
**/

//_________________________________________________________________________________________________________
//___________________________________________COMMON FUNCTIONS______________________________________________
//_________________________________________________________________________________________________________
function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email.toLowerCase());
}

function validateTerms(terms){
    if (terms == 1) {
        return true;
    } else {
        return false;
    }
}

function validatePass(pass){
    if (pass.length > 4) {
        return true;
    } else {
        return false;
    }
}

    //TIMING OUT ALERTS -       OK
function doSetTimeout(n) {
      setTimeout(function(){
        n.className += ' fadeout';
      }, 2500);

      setTimeout(function() { 
        var nParent =  n.parentNode;
        if(nParent){
            nParent.removeChild(n);
        }
    }, 3000);
}
    // This function is used to hidde "commit all" buttons  
window.addEventListener('load', function(){
    var actualAlerts = document.querySelectorAll('.alert.alert-success');
    for (var i = 0; i < actualAlerts.length; i++) {
        doSetTimeout(actualAlerts[i]);
    }
});
    // This function is used to reload page and repopulate 
    // with HTML from DB instead of re-populate everything with JS
function reloadPage(e){
    var flashbag = '<div class="alert alert-info alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Datos guardados satisfactoriamente</div>';
    $('header').append(flashbag);
    e.preventDefault();
    location.reload();
}
    //ADD SOCIAL NETWORK //falta en el caso de que la validación de fallo
$('#social_network_add').submit(function(e) {
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }

    e.preventDefault();

    var url, socialNetwork, userId, icon, flashbagMsg, delUrl;
    var urlInputs = document.getElementsByTagName('input');
    var form = $(this);
    var id =form.attr('id');
    var action = form.attr('action');
    var postData = $(this).serializeArray();
    var flashbag = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Red social agregada satisfactoriamente</div>';

    $.ajax({
        type: "POST",
        url: action,
        async: true,
        data: postData,
        success: function (data) {
            delUrl = "'" + data['data'].delPath + "'";
            socialNetwork = postData[0].value;

            switch(socialNetwork) {
                case '1':
                    icon = 'facebook';
                    break;
                case '2':
                    icon = 'twitter';
                    break;
                case '3':
                    icon = 'instagram';
                    break;
                case '4':
                    icon = 'youtube';
                    break;
                case '5':
                    icon = 'vimeo';
                    break;
                case '6':
                    icon = 'linkedin';
                    break;
                case '7':
                    icon = 'google';
                    break;
                default:
                    break;
            }

            url = postData[1].value;
            userId = postData[2].value;

            if (data['data'].result == 'OK') {
                $('header').append(flashbag);
            
                $('.social-list-edit').append('<span id="'+ userId +''+data['data'].relId+'" class="social-item">'
                    +'<a href="'+ url +'" class="socialLink">'
                        +'<i class="fa fa-'+ icon +' socialIcon '+ icon +'"></i> '
                        +'<span class="social-url">'+ url +'</span>'
                    +'</a>'
                    +'<button class="nobutton" onclick="deleteSn('+ data['data'].userId +', '+ data['data'].relId +', '+ delUrl +')">'
                        +'<i class="fa fa-close"></i>'
                    +'</button>'
                +'</span> ');

                $('.social-profiles').append('<a href="'+ url +'" class="socialLink disabled">'
                    +'<i class="fa fa-'+ icon +' socialIcon ' + icon +'"></i>'
                +'</a>');

                for(var i = 0; i < urlInputs.length; i++) {
                    if(urlInputs[i].type.toLowerCase() == 'url') {
                        urlInputs[i].value = 'http://';
                    }
                }
                $('p.empty').fadeOut();
                $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                    }, 'slow'
                );
                var actualAlerts = document.querySelectorAll('.alert');
                for (var i = 0; i < actualAlerts.length; i++) {
                    doSetTimeout(actualAlerts[i]);
                }

            } else {
                for(var i = 0; i < urlInputs.length; i++) {
                    if(urlInputs[i].type.toLowerCase() == 'url') {
                        urlInputs[i].value = 'http://';
                        urlInputs[i].className += ' border-red';
                        urlInputs[i].focus();
                        urlInputs[i].addEventListener('input', function(){
                            console.log(this.getAttribute('id'));
                            this.classList.remove("border-red");
                        });
                    }
                }
                console.log(data.data);
                var alertErrMsg = data.data.substring(data.data.lastIndexOf("n  ")+1,data.data.lastIndexOf("."));
                var flashbagErr = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'+alertErrMsg+'</div>';
                $('header').append(flashbagErr);
                $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                    }, 'slow'
                );
                $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                    }, 'slow'
                );
            }
        },
        error: function(data){
            console.log('error...');
            $('header').append(flashbagErr);

            for(var i = 0; i < urlInputs.length; i++) {
                if(urlInputs[i].type.toLowerCase() == 'url') {
                    urlInputs[i].value = 'http://';
                    urlInputs[i].className += ' border-red';
                    urlInputs[i].focus();
                }
            }
        }
    });

    $('#' + id)[0].reset();
});  
    //DELETE SOCIAL NETWORK -   FIXME
function deleteSn(idUser, id, route){
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }
    console.log(route);
    var flashbag = '<div class="alert alert-info alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Red social eliminada satisfactoriamente</div>';
    
    $.ajax({
        type: "POST",
        url:  route,
        async: true,
        data: { },
        success: function () {
            $('#home .social-item#'+idUser+id).fadeOut();
            $('#edit .social-item#'+idUser+id).fadeOut();
            // $('#social'+idUser+id).fadeOut();
            $('header').append(flashbag);
            console.log('success');
            $('html, body').animate({ 
                scrollTop: $('.alert').offset().top 
                }, 'slow'
            );
        }
    });
}
    //PASSWORD RECOVERY -       OK
$('#forgot-mail').click(function(){
    $('#pass-form').fadeIn(300);
});

$('#pass-form').submit(function(e){
    e.preventDefault();
    $('.alert').fadeOut();
    var form = $(this);
    var id =form.attr('id');

    if ($('#mail-text').val().length < 1) {
        return false;        
    } else {
        console.log(form);
        action = putAction(form);
        form.attr('action', action);

        var postData = $(this).serializeArray();
        action = form.attr('action');
        console.log(action);
        $.ajax({
                type: "POST",
                url: action,
                async: true,
                data: postData,
                success: function (data) {
                    if (data['data']['status'] == 'OK') {
                        console.log(data['data']);
                        console.log(action);
                        var flashbag = '<div class="alert alert-info alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Tu contraseña se ha enviado por correo a '+ data['data']['arg'] +'</div>';
                        $('header').append(flashbag);
                    } else {
                        console.log(data);
                        console.log(action);
                        var flashbag = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>'+ data['data']['arg'] +' no existe en nuestra base de datos</div>';
                        $('header').append(flashbag);
                    }
                },
                error: function(action){
                    window.location = action;
                }
        });
    }
});
function putAction(form){
    var action = form.attr('action');
    action = action.substring(0, action.lastIndexOf("password/") + 9);
    action += $('#mail-text').val();
    return action;
}

//___________________________________APPLICANT PROFILE AJAX FUNCTIONS______________________________________
//_________________________________________________________________________________________________________
    //REGISTRATION -            OK
$('#applicant_reg').submit(function(e){
    e.preventDefault();
    var form = $('#applicant_reg');
    var id =form.attr('id');
    var postData = $('#applicant_reg').serializeArray();

    e.preventDefault();

    console.log(form);
    console.log(postData);
    console.log(validateEmail(postData[2].value));//mail
    console.log(validatePass(postData[4].value));//pass
    console.log(validateTerms(postData[6].value));//terms

    $.ajax({
        type: "GET",
        url: "../../alumnos.csv",
        dataType: "text",
        success: function(data) {
            if(validateEmail(postData[2].value) == false ){
                var mailError = "eMail no válido";
                form[0][2].parentNode.append(mailError);
                return false;

            } else if (validatePass(postData[4].value) == false) {
                var passError = "La contraseña debe tener una longitud de al menos 5 caracteres";
                form[0][4].parentNode.append(passError);
                return false;

            } else if (validateTerms(postData[6].value) == false) {
                var termsError = "Debes aceptar los términos y condiciones";
                form[0][6].parentNode.append(termsError);
                return false;
            }
            processData(data,postData[1].value);
        },
        error: function(){
            console.log('Error en petición AJAX csv');
        }
    });

    function processData(allText,nif) {
        console.log(nif);

        var allTextLines = allText.split(/\r\n|\n/);
        var headers = allTextLines[0].split(',');
        var lines = [];
        for (var i=0; i<allTextLines.length; i++) {
            var data = allTextLines[i].split(',');

            if (data.length == headers.length) {
                for (var j=0; j<headers.length; j++) {
                    lines.push(data[j]);
                }
            }
        }
        console.log(lines);
        if(lines.indexOf(nif) != -1){
            console.log('The form has been submited...');
            form.unbind('submit').submit();
        } else{
            console.log(lines);
            alert('NIF no permitido en fase beta.');
        }
    }
});
    //CREATE PROFILE -          OK
$('#applicant_create').submit(function(e) {
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }
    
    var form = $(this);
    var id =form.attr('id');
    var action = form.attr('action');
    var postData = $(this).serializeArray();

    $.ajax({
        type: "POST",
        url: action,
        async: true,
        data: postData,
        //The AJAX call has success if form validation fails
        success: function (data) {
            var alertInput, alertInputId, label, alertErrMsg, errorMsg, alertId, flashbag;
                alertInput = [];
                alertInputId = [];
                alertId = [];
                console.log(typeof data['data'] );
                if ( typeof data['data'] == 'undefined') {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();

                } else if ($('#applicant_create').valid() == false || $('#applicant_create').valid() == true){            
                //Parsing JSON array to values JS array
                var values = JSON.parse(data['data']);
                for (i = 0; i < values.length; i++) {
                    //Printing each "values" array value 
                    alertInputId[i] = values[i].substring(values[i].lastIndexOf(").")+2,values[i].lastIndexOf(":"));
                    alertInput[i] = document.getElementById('appbundle_perfilestudiante_'+alertInputId[i]);
                    console.log(alertInput[i]);
                    alertInput[i].focus();
                    alertInput[i].className += ' border-red';

                    label = alertInput[i].parentElement.getElementsByTagName('label');
                    label[0].className += ' color-red';

                    alertId[i] = 'alert' + alertInput[i].getAttribute('id');
                    alertErrMsg = values[i].substring(values[i].lastIndexOf(":")+1,values[i].lastIndexOf("."));
                    flashbag = '<div id="'+ alertId[i] +'" class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>' + alertErrMsg + '</div>';
                    $('header').append(flashbag);

                    alertInput[i].addEventListener('input', function(){
                        var tag = this.getAttribute('id');
                        console.log(this.getAttribute('id'));

                        this.classList.remove("border-red");
                        this.classList.remove("color-red");
                        $('#' + this.getAttribute('id')).siblings().removeClass('color-red');
                        $('#alert' + tag).fadeOut(300);
                    });
                }
                console.log('Form not validated...');
                $('html, body').animate({ 
                    scrollTop: $('.alert').offset().top 
                    }, 'slow'
                );
            }
        },
        error: function (data){
            if ($('#applicant_create').valid() == false ){
                console.log('Invalid form...');
                return false;
            } else {
                console.log(data);
            }
        }
    });

    e.preventDefault();

});
    //EDIT PROFILE -            OK
$('#applicant_edit').submit(function(e) {
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }
    e.preventDefault();
    
    var form = $(this);
    var id =form.attr('id');
    var action = form.attr('action');
    var postData = $(this).serializeArray();

    $.ajax({
        type: "POST",
        url: action,
        async: true,
        data: postData,
        dataType: 'json',
        //The AJAX call has success if form validation fails
        success: function (data) {
            var alertInput, alertInputId, label, alertErrMsg, flashbag, alertId;
                alertInput = [];
                alertInputId = [];
                alertId = [];

            if ( typeof data['data'] == 'undefined') {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();

                } else if ($('#applicant_edit').valid() == false || $('#applicant_edit').valid() == true){            
                
                //Parsing JSON array to values JS array
                var values = JSON.parse(data['data']);
                for (i = 0; i < values.length; i++) {
                    //Printing each "values" array value 
                    console.log(data);
                    alertInputId[i] = values[i].substring(values[i].lastIndexOf(").")+2,values[i].lastIndexOf(":"));
                    alertInput[i] = document.getElementById('appbundle_perfilestudiante_'+alertInputId[i]);
                    console.log(alertInput[i]);
                    alertInput[i].focus();
                    alertInput[i].className += ' border-red';

                    label = alertInput[i].parentElement.getElementsByTagName('label');
                    label[0].className += ' color-red';

                    alertId[i] = 'alert' + alertInput[i].getAttribute('id');
                    alertErrMsg = values[i].substring(values[i].lastIndexOf(":")+1,values[i].lastIndexOf("."));
                    flashbag = '<div id="'+ alertId[i] +'" class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>' + alertErrMsg + '</div>';
                    $('header').append(flashbag);

                    alertInput[i].addEventListener('input', function(){
                        var tag = this.getAttribute('id');
                        console.log(this.getAttribute('id'));

                        this.classList.remove("border-red");
                        this.classList.remove("color-red");
                        $('#' + this.getAttribute('id')).siblings().removeClass('color-red');
                        $('#alert' + tag).fadeOut(300);
                    });
                    $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                        }, 'slow'
                    );

                }
                console.log('Form not validated...');
                //Debug AREA
                console.log(postData);
                console.log(data['data']);
                return false;
            }
        },
        //The AJAX call has error/empty data when form is properly submited (imageless)
        error: function (data){
            if ($('#applicant_edit').valid() == false ){
                console.log('Invalid form...');
                return false;
            } else {
                console.log('The form has been submited...');
                form.unbind('submit').submit();
            }
        }
    });
});
    //ADD WORK EXPERIENCE -     OK
var select, chosen, defaultOpt, actualVal;
// Getting DB default values
defaultOpt = $('#appbundle_applicanthasworkexp_company.chosen-select').text();
// Cache the select element as we'll be using it a few times
select = $("#appbundle_applicanthasworkexp_company.chosen-select");
// Init the chosen plugin
select.chosen({ no_results_text: 'Pulsa enter para gregar una nueva opción:' });
// Get the chosen object
chosen = select.data('chosen');
// Checking if company select exists
if (chosen) {
    // Bind the keyup event to the search box input
    chosen.dropdown.find('input').on('keyup', function(e)
    {
        // If we hit Enter and the results list is empty (no matches) add the option
        if (e.which === 13 && chosen.dropdown.find('li.no-results').length > 0)
        {
            var option = $("<option>").val(this.value).text(this.value);
            // Add the new option
            select.prepend(option);
            // Automatically select it
            select.find(option).prop('selected', true);
            // Trigger the update
            select.trigger("chosen:updated");

            actualVal = $('#appbundle_applicanthasworkexp_company.chosen-select').text();
            // If the selected company already exists in DB
            if(isFinite(String($('#appbundle_applicanthasworkexp_company.chosen-select').val()))){
                console.log('Si incluye');
                $('#appbundle_applicanthasworkexp_otherCompany').val(0);
            } else {
                console.log('No incluye');
                $('#appbundle_applicanthasworkexp_otherCompany').val($('#appbundle_applicanthasworkexp_company.chosen-select').val());
                $('#appbundle_applicanthasworkexp_company.chosen-select').val(null);
                select.trigger("chosen:updated");
            }
        }
    });
    // Putting values to hidden field that will be stored in database field 'other_company'
    $('#appbundle_applicanthasworkexp_company.chosen-select').on('change', function(evt, params) {
        actualVal = $('#appbundle_applicanthasworkexp_company.chosen-select').text();
        // If the selected company already exists in DB
        if(isFinite(String($('#appbundle_applicanthasworkexp_company.chosen-select').val()))){
            console.log('Si incluye');
            $('#appbundle_applicanthasworkexp_otherCompany').val(0);
        } else {
            console.log('No incluye');
            $('#appbundle_applicanthasworkexp_otherCompany').val($('#appbundle_applicanthasworkexp_company.chosen-select').val());
            $('#appbundle_applicanthasworkexp_company.chosen-select').val(null);
        }
    });
}

$('#applicant_work_add').submit(function(e) {
    e.preventDefault();

    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }

    var form = $(this);
    var id =form.attr('id');
    var action = form.attr('action');

    var postData = $(this).serializeArray();
    var flashbag = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Experiencia agregada satisfactoriamente</div>';
    var flashbagErr = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>La fecha de inicio debe ser menor a la de fin</div>'
    
    var workForm = document.getElementById('applicant_work_add');
    var dates = workForm.getElementsByClassName('datepicker');
    var datesToClear = $('.datepicker').datepicker();

    for (i = 0; i < dates.length; i++){
        dates[i].addEventListener('click', function(){
            this.classList.remove("border-red");
            this.classList.remove("color-red");
        })
    }

    if (dates[0].value > dates[1].value) { 
        $('header').append(flashbagErr);
        val0 = dates[0].value;
        val1 = dates[1].value;
        datesToClear.datepicker('setDate', null);

        dates[0].value = val0;
        dates[1].value = val1;

        dates[0].className += ' border-red color-red';
        dates[1].className += ' border-red color-red';

        label0 = dates[0].parentElement.getElementsByTagName('label');
        label0[0].className += ' color-red';
        label1 = dates[1].parentElement.getElementsByTagName('label');
        label1[0].className += ' color-red';

        $('.datepicker').datepicker().on('changeDate', function() {
            dates = workForm.getElementsByClassName('datepicker');
            if (dates[0].value < dates[1].value) { 
                $('div label.color-red').removeClass('color-red')
                $('.datepicker').removeClass('border-red color-red');
                $('.alert-danger').fadeOut(300);
                $('.alert-danger').remove();
            }
        });

        console.log('Error, la primera es mayor.');
        console.log(dates);

    } else {
        console.log('lasegunda es mayor');
        $.ajax({
            type: "POST",
            url: action,
            async: true,
            data: postData,
            success: function (data, postData, form) {
                console.log(postData);
                console.log(form);
                console.log(data);
                $('header').append(flashbag);
                //Preparing URL
                var url = "'" + data['data'].delPath + "'";
                //Adding HTML
                $('#workExpList').append('<li class="formacionlist color-green clearfix" id="work-delete'+data['data'].relId+''+data['data'].userId+'">'
                    + '<span>'
                        +'<i class="fa fa-bookmark-o"></i> '+data['data'].company
                    + '</span> '
                    + '-' 
                    + '<span>'
                        + dates[0].value
                    + '</span>'
                    + '-'
                    + '<span>'
                        + dates[1].value
                    + '</span>'
                    + '<button class="nobutton pull-right" onclick="applicantWorkDelete('+ data['data'].relId +', '+ data['data'].userId + ', '+ url +')">'
                        + '<i class="fa fa-close"></i>'
                    + '</button>'
                + '</li>');
                var actualAlerts = document.querySelectorAll('.alert.alert-success');
                for (var i = 0; i < actualAlerts.length; i++) {
                    doSetTimeout(actualAlerts[i]);
                }
                datesToClear.datepicker('setDate', null);
                $('#' + id)[0].reset();
                console.log('Success!');
            },
            error: function(data){
                console.log('Inicio: ' + postData[2]);
                console.log('Fin: ' + postData[3]);
                console.log(data['data']);
            }
        });
    }
});
    //ADD EDUCATION -           OK
$('#applicant_education_add').submit(function(e) {
    e.preventDefault();
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }

    var relId, applicantId, form, id, action, postData, flashbag, flashbagErr, title, category, school, finished, educationForm, dates, datesToClear, label0, label1, jsonResponse;
    form = $(this);
    id = form.attr('id');
    action = form.attr('action');
    postData = $(this).serializeArray();
    flashbag = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Educación agregada satisfactoriamente</div>';
    flashbagErr = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>La fecha de inicio debe ser menor a la de fin</div>'
    title = $('#appbundle_perfilestudiantehasformacion_formacion').find(":selected").text();
    school = $('#appbundle_perfilestudiantehasformacion_school').find(":selected").text();
    finished = $('#appbundle_perfilestudiantehasformacion_finished').is(':checked');
    if( finished == true) {
        finished = 'Finalizado';
    }else{
        finished = 'No finalizado';
    }

    educationForm = document.getElementById('applicant_education_add');
    dates = educationForm.getElementsByClassName('datepicker');
    datesToClear = $('.datepicker').datepicker();

    // for (i = 0; i < dates.length; i++){
    //     dates[i].addEventListener('click', function(){
    //         this.classList.remove("border-red");
    //         this.classList.remove("color-red");
    //     })
    // }

    if (dates[0].value > dates[1].value) { 
        $('header').append(flashbagErr);
        val0 = dates[0].value;
        val1 = dates[1].value;
        datesToClear.datepicker('setDate', null);

        dates[0].value = val0;
        dates[1].value = val1;

        dates[0].className += ' border-red color-red';
        dates[1].className += ' border-red color-red';

        label0 = dates[0].parentElement.getElementsByTagName('label');
        label0[0].className += ' color-red';
        label1 = dates[1].parentElement.getElementsByTagName('label');
        label1[0].className += ' color-red';

        $('.datepicker').datepicker().on('changeDate', function() {
            console.log($(this).datepicker('getDate'));
            dates = educationForm.getElementsByClassName('datepicker');
            if (dates[0].value < dates[1].value) { 
                $('div label.color-red').removeClass('color-red')
                $('.datepicker').removeClass('border-red color-red');
                $('.alert-danger').fadeOut(300);
                $('.alert-danger').remove();
            }
        });

        console.log('Error, la primera es mayor.');
        console.log(dates);

    } else {
        $.ajax({
            type: "POST",
            url: action,
            async: true,
            data: postData,
            success: function (form, data, response) {
                var url = JSON.parse(response.responseText);
                url = "'" + url['data'].delPath + "'";
                $('header').append(flashbag);
                console.log(url);

                datesToClear.datepicker('setDate', null);

                $('#' + id)[0].reset();

                relId = JSON.parse(response.responseText);
                relId = relId['data'].relId;
                jsonResponse = JSON.parse(response.responseText);
                applicantId = jsonResponse['data'].userId;
                category = jsonResponse['data'].category;
                console.log(category);

                $('.education-list .container-fluid').append('<div class="row color-green" id="'+ relId +''+ applicantId +'">'
                    + '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">' 
                        + '<span>' 
                            + school
                        + '</span> ' 
                    + '</div>' 
                    + '<div class="col-lg-4 col-md-3 col-sm-6 col-xs-12">' 
                        + '<span>' 
                            + title 
                        + '</span>' 
                    + '</div>' 
                    + '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">' 
                        + '<span>' 
                            + category
                        + '</span>' 
                    + '</div>' 

                    + '<div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">' 
                        + '<span>' 
                            + finished 
                        + '</span>' 
                        + ' '
                        + '<button class="nobutton" onclick="applicantEducationDelete(' + relId +', '+ applicantId +', ' + url +')">'
                            + '<i class="fa fa-close"></i>'
                        + '</button>'
                    + '</div>' 
                + '</div>');
                var actualAlerts = document.querySelectorAll('.alert.alert-success');
                for (var i = 0; i < actualAlerts.length; i++) {
                    doSetTimeout(actualAlerts[i]);
                }
            }
        });
    }
});
    //ADD SKILL -               OK
$('#applicant_skill_add').submit(function(e){
    e.preventDefault();
    var form, action, postData, label, alertInput, alertInputId, errorMsgs, flashbagErr, flashbag;

    form = $(this);
    action = form.attr('action');
    postData = $(this).serializeArray();
    flashbag = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Educación agregada satisfactoriamente</div>';

    var arr = [];
    var val = document.querySelectorAll('#applicant_skill_add .search-choice');
    for(i = 0; i < val.length; i++){
        arr[i] = val[i].textContent;
        console.log(arr[i]);
        $('.clearfix.skill-list-new').append('<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><span class="disabled"><i class="fa fa-gear" aria-hidden="true"></i>'+ arr[i] + '</span></div>');
        $('header').append(flashbag);
        var actualAlerts = document.querySelectorAll('.alert.alert-success');
        for (var i = 0; i < actualAlerts.length; i++) {
            doSetTimeout(actualAlerts[i]);
        }
    }

    //Geting "chosen select values" y have the number of times that is needed the for loop
    var selectVal = $(".chosen-select").val();
    for(var i = 0; i < selectVal.length; i++){
        $.ajax({
            type: "POST",
            url: action,
            async: true,        //postData.lenght -1 is the form token (needed)
            data: [postData[i], postData[postData.length -1]],
            success: function (data) {
                console.log('Success!');
                return false;
            },
            error: function (data) {
                console.log('Error!');
                console.log(data);
                console.log(postData);
            }
        });
    }
});
    //DELETE WORK EXPERIENCE -  OK
function applicantWorkDelete(id, idUser, route){
    var flashbag = '<div class="alert alert-info alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Experiencia eliminada satisfactoriamente</div>';
    $.ajax({
        type: "POST",
        url: route,
        async: true,
        data: { },
        success: function () {
            $('#work-delete'+id+idUser).fadeOut();
            $('#work-list'+id+idUser).fadeOut();
            $('header').append(flashbag);
            var actualAlerts = document.querySelectorAll('.alert.alert-info');
            for (var i = 0; i < actualAlerts.length; i++) {
                doSetTimeout(actualAlerts[i]);
            }
            console.log('Success!');
        }
    });
}
    //DELETE EDUCATION -        OK
function applicantEducationDelete(id, idUser, route){
    var flashbag = '<div class="alert alert-info alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Formación eliminada satisfactoriamente</div>';
    $.ajax({
        type: "POST",
        url:  route,
        async: true,
        data: { },
        success: function () {
            $('#'+id+idUser).fadeOut();
            $('#education'+id+idUser).fadeOut();
            $('header').append(flashbag);
            var actualAlerts = document.querySelectorAll('.alert.alert-info');
            for (var i = 0; i < actualAlerts.length; i++) {
                doSetTimeout(actualAlerts[i]);
            }
            console.log('Success!');
        }
    });
}
    //DELETE SKILL -            OK    
function applicantSkillDelete(id, idUser, route){
    var flashbag = '<div class="alert alert-info alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Competencia eliminada satisfactoriamente</div>';
    $.ajax({
        type: "POST",
        url:  route,
        async: true,
        data: { },
        success: function () {
            $('#'+id+idUser).fadeOut();
            $('#education'+id+idUser).fadeOut();
            $('header').append(flashbag);
            var actualAlerts = document.querySelectorAll('.alert.alert-info');
            for (var i = 0; i < actualAlerts.length; i++) {
                doSetTimeout(actualAlerts[i]);
            }
            console.log('Success!');
            $('.skill'+ id + idUser).fadeOut();
        }
    });
}
//___________________________________SCHOOL PROFILE AJAX FUNCTIONS______________________________________
//______________________________________________________________________________________________________
    //REGISTRATION -            OK
$('#school_reg').submit(function(e){
    e.preventDefault();
    var form = $('#school_reg');
    var id =form.attr('id');
    var postData = $('#school_reg').serializeArray();

    console.log(form);
    console.log(postData);
    console.log(validateEmail(postData[2].value));//mail
    console.log(validatePass(postData[4].value));//pass
    console.log(validateTerms(postData[6].value));//terms

    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "../../centros.csv",
        dataType: "text",
        success: function(data) {

            if(validateEmail(postData[2].value) == false ){
                var mailError = "eMail no válido";
                form[0][2].parentNode.append(mailError);
                return false;

            } else if (validatePass(postData[4].value) == false) {
                var passError = "La contraseña debe tener una longitud de al menos 5 caracteres";
                form[0][4].parentNode.append(passError);
                return false;

            } else if (validateTerms(postData[6].value) == false) {
                var termsError = "Debes aceptar los términos y condiciones";
                form[0][6].parentNode.append(termsError);
                return false;
            } 

            processData(data,postData[1].value);


        },
        error: function(){
            console.log('Error en petición AJAX csv');
        }
     });

    function processData(allText,nif) {
        console.log(nif);

        var allTextLines = allText.split(/\r\n|\n/);
        var headers = allTextLines[0].split(',');
        var lines = [];
        for (var i=0; i<allTextLines.length; i++) {
            var data = allTextLines[i].split(',');

            if (data.length == headers.length) {
                for (var j=0; j<headers.length; j++) {
                    lines.push(data[j]);
                }
            }
        }
        console.log(lines);
        if(lines.indexOf(nif) != -1){
            console.log('The form has been submited...');
            form.unbind('submit').submit();
        } else{
            console.log(lines);
            alert('NIF no permitido en fase beta.');
        }
    }
});
    //CREATE PROFILE -          OK
$('#school_create').submit(function(e){
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }
    // Removing old labels with errors
    var oldLabels = document.querySelectorAll('label.color-red');
    for (var i = 0; i < oldLabels.length; i++) {
        oldLabels[i].classList.remove("color-red");
    }

    var form, action, postData, label, alertInput, alertInputId, errorMsgs, flashbagErr;
    form = $(this);
    action = form.attr('action');
    postData = $(this).serializeArray();
    flashbagErr = [];
    alertInput = [];
    alertInputId = [];

    $.ajax({
            type: "POST",
            url: action,
            async: true,
            data: postData,
            success: function (data) {
                var alertInput, alertInputId, label, alertErrMsg, errorMsg, alertId, flashbag;
                alertInput = [];
                alertInputId = [];
                alertId = [];
                if ( typeof data['data'] == 'undefined') {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();

                } else if ($('#school_create').valid() == false || $('#school_create').valid() == true){            
                    //Parsing JSON array to values JS array
                    var values = JSON.parse(data['data']);
                    for (i = 0; i < values.length; i++) {
                        //Printing each "values" array value 
                        alertInputId[i] = values[i].substring(values[i].lastIndexOf(").")+2,values[i].lastIndexOf(":"));
                        alertInput[i] = document.getElementById('appbundle_centroestudios_'+alertInputId[i]);
                        console.log(alertInput[i]);
                        alertInput[i].focus();
                        alertInput[i].className += ' border-red';

                        label = alertInput[i].parentElement.getElementsByTagName('label');
                        label[0].className += ' color-red';

                        alertId[i] = 'alert' + alertInput[i].getAttribute('id');
                        alertErrMsg = values[i].substring(values[i].lastIndexOf(":")+1,values[i].lastIndexOf("."));
                        flashbag = '<div id="'+ alertId[i] +'" class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>' + alertErrMsg + '</div>';
                        $('header').append(flashbag);

                        alertInput[i].addEventListener('input', function(){
                            var tag = this.getAttribute('id');
                            console.log(this.getAttribute('id'));
                            this.classList.remove("border-red");
                            this.classList.remove("color-red");
                            $('#' + this.getAttribute('id')).siblings().removeClass('color-red');
                            $('#alert' + tag).fadeOut(300);
                            $('#alert' + tag).remove();
                            console.log(tag);
                        });
                    }
                    console.log('Form not validated...');
                    //Debug AREA
                    console.log(postData);
                    console.log(data['data']);
                    $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                        }, 'slow'
                    );
                    return false;
                }
            },
            error: function (data) {
                if ($('#school_create').valid() == false ){
                    console.log('Invalid form...');
                    return false;
                }
            }
    });

    e.preventDefault();

});
    //EDIT PROFILE -            OK
$('#school_edit').submit(function(e){
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }

    e.preventDefault();

    var form, action, postData, label, alertInput, alertInputId, errorMsgs, flashbagErr, alertId, flashbagSucc;
    form = $(this);
    action = form.attr('action');
    postData = $(this).serializeArray();
    flashbagErr = [];
    flashbagSucc = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> Cambios guardados correctamente </div>';
    alertInput = [];
    alertInputId = [];
    alertId = [];

    $.ajax({
            type: "POST",
            url: action,
            async: true,
            data: postData,
            dataType: 'json',
            success: function (data) {
                if (data['data'] == 'OK') {
                    console.log('Submitted form.');
                    console.log(postData[2]);
                    $('header').append(flashbagSucc);
                    $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                        }, 'slow'
                    );
                    var actualAlerts = document.querySelectorAll('.alert');
                    for (var i = 0; i < actualAlerts.length; i++) {
                        doSetTimeout(actualAlerts[i]);
                    }
                } else {
                    console.log('Some errors...');
                    console.log(data);
                    console.log(data['data']);
                    errorMsgs = JSON.parse(data['data']);

                    for (i = 0; i < errorMsgs.length; i++) {
                        alertInputId[i] = errorMsgs[i].substring(errorMsgs[i].lastIndexOf(").")+2,errorMsgs[i].lastIndexOf(":"));
                        alertInput[i] = document.getElementById('appbundle_centroestudios_'+alertInputId[i]);
                        
                        alertInput[i].focus();
                        alertInput[i].className += ' border-red color-red';

                        label = alertInput[i].parentElement.getElementsByTagName('label');
                        label[0].className += ' color-red';

                        alertId[i] = 'alert' + alertInput[i].getAttribute('id');
                        flashbagErr[i] = '<div id="'+ alertId[i] +'" class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>' + errorMsgs[i].substring(errorMsgs[i].lastIndexOf(":")+1,errorMsgs[i].lastIndexOf(".")) +'</div>';
                        $('header').append(flashbagErr[i]);

                        alertInput[i].addEventListener('input', function(){
                            var tag = this.getAttribute('id');
                            console.log(this.getAttribute('id'));

                            this.classList.remove("border-red");
                            this.classList.remove("color-red");
                            $('#' + this.getAttribute('id')).siblings().removeClass('color-red');
                            $('#alert' + tag).fadeOut(300);
                        })
                    }
                    $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                        }, 'slow'
                    );
                    var actualAlerts = document.querySelectorAll('.alert-success');
                    for (var i = 0; i < actualAlerts.length; i++) {
                        doSetTimeout(actualAlerts[i]);
                    }
                }
            },
            error: function (data) {
                if ($('#school_edit').valid() == false ){
                    console.log('Invalid form...');
                    return false;
                } else {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();
                }
            }
    });
});
    //ADD EDUCATION -           OK
$('#school_education_add').submit(function(e){
    var form, action, postData, flashbagErr, flashbag, newContent;
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }

    e.preventDefault();

    form = $(this);
    action = form.attr('action');
    postData = $(this).serializeArray();
    flashbag = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Educación agregada satisfactoriamente</div>';
    $.ajax({
            type: "POST",
            url: action,
            async: true,        //postData.lenght -1 is the form token (needed)
            data: postData,
            success: function (data) {
                if (data.data.error) {
                    console.log(data.data.error);
                    flashbagErr = '<div class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a> Ya tienes esta formación, elige otra diferente</div>'
                    form.prepend(flashbagErr);

                    return false;
                } else {
                    var url = "'" + data.data.delPath + "'";
                    newContent = '<li id="'+ data.data.id +''+ data.data.userId +'" class="formation-list disabled clearfix">'
                                    + '<span>' + data.data.edTitle + '</span>' 
                                    + '<span>'+ data.data.edCategory +'</span>'
                                    + '<button class="nobutton" onclick="schoolEducationDelete('+ data.data.id +', '+ data.data.userId +', '+ url +')">'
                                        + '<i class="fa fa-close"></i>'
                                    + '</button>'
                                +'</li>'
                    console.log('Success!');
                    $('header').append(flashbag);
                    $('.schoolEducationList').append(newContent);
                    $('html, body').animate({ 
                            scrollTop: $('.alert').offset().top 
                        }, 'slow'
                    );
                    var actualAlerts = document.querySelectorAll('.alert');
                    for (var i = 0; i < actualAlerts.length; i++) {
                        doSetTimeout(actualAlerts[i]);
                    }
                }
            },
            error: function (data) {
                console.log('Error!');
                console.log(data['data']);
                console.log(data);
                console.log(postData);
            }
        });
});

function schoolEducationDelete(id, idUser, route){
    var flashbag = '<div class="alert alert-info alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Educación eliminada satisfactoriamente</div>';
    $.ajax({
        type: "POST",
        url:  route,
        async: true,
        data: { },
        success: function () {
            $('#edit #'+id+idUser).fadeOut();
            $('#home #'+id+idUser).fadeOut();
            $('header').append(flashbag);

            var actualAlerts = document.querySelectorAll('.alert');
            for (var i = 0; i < actualAlerts.length; i++) {
                doSetTimeout(actualAlerts[i]);
            }
            console.log('.formationListEdit#'+id+idUser);
            console.log('Success!');

            $('html, body').animate({ 
                    scrollTop: $('.alert').offset().top 
                }, 'slow'
            );
            var actualAlerts = document.querySelectorAll('.alert');
            for (var i = 0; i < actualAlerts.length; i++) {
                doSetTimeout(actualAlerts[i]);
            }
        }
    });
}
//___________________________________COMPANY PROFILE AJAX FUNCTIONS______________________________________
//_______________________________________________________________________________________________________
    //REGISTER      -           OK
$('#company_reg').submit(function(e){
    e.preventDefault();
    var form = $('#company_reg');
    var id =form.attr('id');
    var postData = $('#company_reg').serializeArray();

    console.log(form);
    console.log(postData);
    console.log(validateEmail(postData[2].value));//mail
    console.log(validatePass(postData[4].value));//pass
    console.log(validateTerms(postData[6].value));//terms

    e.preventDefault();
    $.ajax({
        type: "GET",
        url: "../../empresas.csv",
        dataType: "text",
        success: function(data) {

            if(validateEmail(postData[2].value) == false ){
                var mailError = "eMail no válido";
                form[0][2].parentNode.append(mailError);
                return false;

            } else if (validatePass(postData[4].value) == false) {
                var passError = "La contraseña debe tener una longitud de al menos 5 caracteres";
                form[0][4].parentNode.append(passError);
                return false;

            } else if (validateTerms(postData[6].value) == false) {
                var termsError = "Debes aceptar los términos y condiciones";
                form[0][6].parentNode.append(termsError);
                return false;
            } 

            processData(data,postData[1].value);


        },
        error: function(){
            console.log('Error en petición AJAX csv');
        }
     });

    function processData(allText,nif) {
        console.log(nif);

        var allTextLines = allText.split(/\r\n|\n/);
        var headers = allTextLines[0].split(',');
        var lines = [];

        for (var i=0; i<allTextLines.length; i++) {
            var data = allTextLines[i].split(',');
            if (data.length == headers.length) {

                var tarr;
                for (var j=0; j<=headers.length; j++) {
                    lines.push(data[j]);
                }
            }
        }
        console.log(lines);
        if(lines.indexOf(nif) != -1){
            console.log('The form has been submited...');
            form.unbind('submit').submit();
        } else{
            console.log(lines);
            alert('NIF no permitido en fase beta.');
        }
    }
});
    //CREATE PROFILE -          OK
$('#company_create').submit(function(e){

    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }
    // Removing old labels with errors
    var oldLabels = document.querySelectorAll('label.color-red');
    for (var i = 0; i < oldLabels.length; i++) {
        oldLabels[i].classList.remove("color-red");
    }

    var form, action, postData, label, alertInput, alertInputId, errorMsgs, flashbagErr, alertId;
    form = $(this);
    action = form.attr('action');
    postData = $(this).serializeArray();
    flashbagErr = [];
    alertInput = [];
    alertInputId = [];
    alertId = [];

    $.ajax({
            type: "POST",
            url: action,
            async: true,
            data: postData,
            success: function (data) {
                if ( typeof data['data'] == 'undefined') {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();

                } else if ($('#company_create').valid() == false || $('#company_create').valid() == true){    
                    if (data['data'] == 'OK') {
                        console.log('Submitted form.');
                    } else {
                        errorMsgs = JSON.parse(data['data']);

                        for (i = 0; i < errorMsgs.length; i++) {
                            alertInputId[i] = errorMsgs[i].substring(errorMsgs[i].lastIndexOf(").")+2,errorMsgs[i].lastIndexOf(":"));
                            alertInput[i] = document.getElementById('appbundle_perfilempresa_'+alertInputId[i]);
                            console.log(data['data']);
                            console.log(alertInputId[i]);
                            console.log(alertInput[i]);
                            alertInput[i].focus();
                            alertInput[i].className += ' border-red color-red';

                            label = alertInput[i].parentElement.getElementsByTagName('label');
                            label[0].className += ' color-red';
                            
                            alertId[i] = 'alert' + alertInput[i].getAttribute('id');

                            flashbagErr[i] = '<div id="'+ alertId[i] +'" class="alert alert-danger alert-dismissable" tabindex="1"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>' + errorMsgs[i].substring(errorMsgs[i].lastIndexOf(":")+1,errorMsgs[i].lastIndexOf(".")) +'</div>';
                            $('header').append(flashbagErr[i]);

                            alertInput[i].addEventListener('input', function(){
                                var tag = this.getAttribute('id');
                                console.log(this.getAttribute('id'));
                                this.classList.remove("border-red");
                                this.classList.remove("color-red");
                                $('#' + this.getAttribute('id')).siblings().removeClass('color-red');
                                $('#alert' + tag).fadeOut(300);
                                $('#alert' + tag).remove();
                                console.log(tag);
                            });
                        }
                        $('html, body').animate({ 
                            scrollTop: $('.alert').offset().top 
                            }, 'slow'
                        );
                    }
                }
            },
            error: function (data) {
                if ($('#company_create').valid() == false ){
                    console.log('Invalid form...');
                    return false;
                } else {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();
                }
            }
    });

    e.preventDefault();

});
    //EDIT PROFILE -            OK
$('#company_edit').submit(function(e){
    e.preventDefault();

    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }
    // Removing old labels with errors
    var oldLabels = document.querySelectorAll('label.color-red');
    for (var i = 0; i < oldLabels.length; i++) {
        oldLabels[i].classList.remove("color-red");
    }


    var form, action, postData, label, alertInput, alertInputId, errorMsgs, flashbagErr, alertId;
    var flashbag = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Datos guardados satisfactoriamente</div>';
    form = $(this);
    action = form.attr('action');
    postData = $(this).serializeArray();
    flashbagErr = [];
    alertInput = [];
    alertInputId = [];
    alertId = [];

    console.log(action);
    $.ajax({
            type: "POST",
            url: action,
            async: true,
            data: postData,
            success: function (data) {
                if ( typeof data['data'] == 'undefined') {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();

                } else if ($('#company_edit').valid() == false || $('#company_edit').valid() == true) {    
                    // if (data['data'] == 'OK') {
                    //     console.log('The form has been submited...');
                    //     $('header').append(flashbag);
                    //     var actualAlerts = document.querySelectorAll('.alert.alert-success');
                    //     for (var i = 0; i < actualAlerts.length; i++) {
                    //         doSetTimeout(actualAlerts[i]);
                    //     }
                    // } else {
                    console.log(data['data']);
                    console.log('Error...');
                    errorMsgs = JSON.parse(data['data']);

                    for (i = 0; i < errorMsgs.length; i++) {
                        alertInputId[i] = errorMsgs[i].substring(errorMsgs[i].lastIndexOf(").")+2,errorMsgs[i].lastIndexOf(":"));
                        alertInput[i] = document.getElementById('appbundle_perfilempresa_'+alertInputId[i]);
                        
                        alertInput[i].focus();
                        alertInput[i].className += ' border-red color-red';

                        label = alertInput[i].parentElement.getElementsByTagName('label');
                        label[0].className += ' color-red';
                        
                        alertId[i] = 'alert' + alertInput[i].getAttribute('id');

                        flashbagErr[i] = '<div id="'+ alertId[i] +'" class="alert alert-danger alert-dismissable" tabindex="1"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>' + errorMsgs[i].substring(errorMsgs[i].lastIndexOf(":")+1,errorMsgs[i].lastIndexOf(".")) +'</div>';
                        $('header').append(flashbagErr[i]);

                        alertInput[i].addEventListener('input', function(){
                            var tag = this.getAttribute('id');
                            console.log(this.getAttribute('id'));
                            this.classList.remove("border-red");
                            this.classList.remove("color-red");
                            $('#' + this.getAttribute('id')).siblings().removeClass('color-red');
                            $('#alert' + tag).fadeOut(300);
                            $('#alert' + tag).remove();
                            console.log(tag);
                        });
                    }

                    var actualAlerts = document.querySelectorAll('.alert.alert-success');

                    for (var i = 0; i < actualAlerts.length; i++) {
                        doSetTimeout(actualAlerts[i]);
                    }

                    $('html, body').animate({ 
                        scrollTop: $('.alert').offset().top 
                        }, 'slow'
                    );
                }
            },
            error: function (data) {
                if ($('#company_edit').valid() == false ){
                    console.log('Invalid form...');
                    return false;
                } else {
                    console.log('The form has been submited...');
                    form.unbind('submit').submit();
                }
            }
    });
});
    //CREATE OFFER -            OK
$('#create_offer').submit(function(e) {
    //Removing old alerts for each submit
    var oldAlerts = document.querySelectorAll('.alert.alert-danger');
    for (var i = 0; i < oldAlerts.length; i++) {
        oldAlerts[i].style.display = 'none';
    }

    e.preventDefault();

    var flashbagMsg, alertInput, alertInputId, dates, label, newAlert;
    var urlInputs = document.getElementsByTagName('input');
    var form = $(this);
    var id =form.attr('id');
    var action = form.attr('action');
    var postData = $(this).serializeArray();

    label = [];

    var createForm = document.getElementById('create_offer');
    dates = createForm.getElementsByClassName('datepicker');
    datesToClear = $('.datepicker').datepicker();

    for (i = 0; i < dates.length; i++){
        dates[i].addEventListener('click', function(){
            this.classList.remove("border-red");
            this.classList.remove("color-red");
            $('label.color-red').removeClass('color-red');
        });
    }

    console.log(dates);

    if (dates[0].value > dates[1].value) { 
        val0 = dates[0].value;
        val1 = dates[1].value;
        datesToClear.datepicker('setDate', null);

        dates[0].value = val0;
        label[0] = dates[0].parentElement.getElementsByTagName('label');

        dates[1].value = val1;
        label[1] = dates[1].parentElement.getElementsByTagName('label');

        dates[0].className += ' border-red color-red';
        label[0][0].className += ' color-red';

        dates[1].className += ' border-red color-red';
        label[1][0].className += ' color-red';

        console.log('Error, la primera es mayor.');
        return false;

    } else if ($('#create_offer').valid() == false) {
        console.log('Error...');
        return false;

    } else {
        $.ajax({
            type: "POST",
            url: action,
            async: true,
            data: postData,
            success: function (data) {         
                    newAlert = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 offer newOffer">'      
                        +'<p>'
                            + postData[0].value
                        +'</p>'
                        +'<p>'
                            +'Inscritos: 0'
                        +'</p>'
                        +'<p class="color-yellow">'
                            +'<i class="fa fa-clock-o" aria-hidden="true"></i> Pendiente de validación.'
                        +'</p>'
                        +'<div>'
                            +'<a class="button cta-1" href="'+ data['data']['route'] +'">'
                                +'Gestionar'
                            +'</a>'
                        +'</div>'
                        +'<p class="disabled">'
                            +'<em><i class="fa fa-info"></i> Recuerda que debes asignar tus ofertas a un centro o varios para que sean verificadas</em>'
                        +'</p>'
                    +'</div>'

                    if (data['data']['result'] == 'OK') {
                        console.log('Submitted form...');
                        var flashbag = '<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>Oferta de trabajo creada satisfactoriamente</div>';
                        $('header').append(flashbag);
                        $('html, body').animate({ 
                                scrollTop: $('.alert').offset().top 
                            }, 'slow'
                        );

                        $('#createOffer').removeClass('active');
                        $('#createOffer').removeClass('in');
                        $('#offers').addClass('active');
                        $('#offers').addClass('in');

                        $('#offers section#mod_b6 .company-offers').prepend(newAlert);
                        var actualAlerts = document.querySelectorAll('.alert-success');
                        for (var i = 0; i < actualAlerts.length; i++) {
                            doSetTimeout(actualAlerts[i]);
                        }
                        $('.empty-offers').fadeOut;
                    } else {
                        console.log(postData);
                        console.log(data['data']);

                        var alertInput, alertInputId, label, alertErrMsg, flashbag;
                        //Parsing JSON array to values JS array
                        var values = data['data'];
                        for (i = 0; i < values.length; i++) {
                            //Printing each "values" array value 
                            alertInputId = values[i].substring(values[i].lastIndexOf(").")+2,values[i].lastIndexOf(":"));
                            alertInput = document.getElementById('appbundle_ofertas_'+alertInputId);
                            alertInput.focus();
                            alertInput.className += ' border-red';

                            label = alertInput.parentElement.getElementsByTagName('label');
                            label[0].className += ' color-red';

                            alertErrMsg = values[i].substring(values[i].lastIndexOf(":")+1,values[i].lastIndexOf("."));
                            flashbag = '<div id="alert_appbundle_ofertas_'+alertInputId+'" class="alert alert-danger alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>' + alertErrMsg + '</div>';
                            $('header').append(flashbag);

                            alertInput.addEventListener('input', function(){
                                var tag = this.getAttribute('id');
                                console.log(this.getAttribute('id'));

                                this.classList.remove("border-red");
                                this.classList.remove("color-red");
                                $('#' + this.getAttribute('id')).siblings().removeClass('color-red');
                                $('#alert_' + tag).fadeOut(300);
                            })
                        }
                        $('html, body').animate({ 
                            scrollTop: $('.alert').offset().top 
                            }, 'slow'
                        );
                        //Timing out alerts
                        //Removing marks on each input
                        // $('.border-red').on('input',function(){
                        //     $(this).removeClass('border-red');
                        //     $(this).removeClass('color-red');
                        //     $(this).siblings().removeClass('color-red');
                        //     $('alert').fadeOut();
                        // });
                    }
                    return false;

            }
        });
    }
});