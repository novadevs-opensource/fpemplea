/** FP Emplea JS
 * Author: Bruno Lorente
 * Company: Grub Solutions
 * Company URL: http://grubsolutions.es
 * Author URI: http://brunolorente.com
 * Version: 0.0.1
**/

/* Master document.ready()*/
$(document).ready(function (){

    $('#edit_img').submit(function(){
        var fileInput = document.getElementById("form_imagen").files[0];
        if (fileInput.type.match('image/jpeg') || fileInput.type.match('image/png')) {
          console.log(fileInput.type);
          console.log(fileInput.size);
          return true;
        } else if (fileInput.size > 150000) {
            alert('Tamaño máximo permitido 150KB.');
            return false
        } else {
          alert('Archivos de tipo ' +fileInput.type + ' no son permitidos.');
          return false;
        }
    });

    $('#profile-menu-btn').click(function(){
        $('aside.col-sm-5').toggleClass('show');
        $('aside.col-sm-5').css('transform: translateX(5%)');
        $('#profile-menu-btn i').toggleClass('fa-bars');
        $('#profile-menu-btn i').addClass('fa-close');
    });

    $('.col-sm-12').click(function(){
        if($('aside.col-sm-5').hasClass('show')){
            $('aside.col-sm-5').removeClass('show');
        }
    });
  
    jQuery.extend(jQuery.validator.messages, {
        required: "El campo es obligatorio",
        accept: "Únicamente los archivos de tipo imagen son válidos",
        email: "Porfavor, introduce una dirección de correo válida",
        url: "Porfavor, introduce una url válida"
    });

    //TO CONTROL REDIRECTIONS
    switch (location.hash) { 
        //COMPANY PROFILE
        case '#offers': 
            $('#home').removeClass('in');
            $('#home').removeClass('active');
            $('#offers').addClass('in');
            $('#offers').addClass('active');
            break;
        case '#alerts':
            $('#home').removeClass('in');
            $('#home').removeClass('active');
            $('#alerts').addClass('in');
            $('#alerts').addClass('active');
        default:
            break
    }

    $('#applicant_create').validate({
        rules: {
            'appbundle_perfilestudiante[imagen]': {accept: "image/*"}
        },
    });

    $('#applicant_edit').validate({
        rules: {
            // 'appbundle_perfilestudiante[imagen]': {accept: "image/*"}
        },
        errorPlacement: function(label, element) {
            label.addClass('error-wrap');
            label.insertAfter(element);
        },
        wrapper: 'span',
        highlight: function(element, errorClass, validClass) {
            $(element).addClass(errorClass).removeClass(validClass);
            $(element.form).find("span.error-wrap").addClass(errorClass);
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass(errorClass).addClass(validClass);
            $(element.form).find("label[for=" + element.id + "]").removeClass(errorClass);
        }
    });

    $.validator.setDefaults({ ignore: ":hidden:not(.chosen-select)" }) //for all select having class .chosen-select
    $('#school_create').validate({
        rules: {
            required: true,
            'appbundle_centroestudios[imagen]': {accept: "image/*"},
            'appbundle_centroestudios[familiaprof]': {required: true}
        },
    });
    
    $.validator.setDefaults({ ignore: ":hidden:not(.chosen-select)" }) //for all select having class .chosen-select
    $('#school_edit').validate({
        rules: {
            'appbundle_centroestudios[imagen]': {accept: "image/*"},
            'appbundle_centroestudios[familiaprof]': {required: true}
        },
    });

    $.validator.setDefaults({ ignore: ":hidden:not(.chosen-select)" }) //for all select having class .chosen-select
    $('#company_create').validate({
        rules: {
            'appbundle_perfilempresa[imagen]': {accept: "image/*"},
            'appbundle_perfilempresa[sector]': {required: true}
        },
    });

    $.validator.setDefaults({ ignore: ":hidden:not(.chosen-select)" }) //for all select having class .chosen-select
    $('#company_edit').validate({
        rules: {
            'appbundle_perfilempresa[imagen]': {accept: "image/*"},
        },
    });

    $.validator.setDefaults({ ignore: ":hidden:not(.chosen-select)" }) //for all select having class .chosen-select
    $('#create_offer').validate({
        rules: {
            'appbundle_ofertas[categoria]': {required: true}
        },
    });

    $(".chosen-select").chosen();

    //LOADER SETUP
    $('#preloader').fadeOut(600);
    $('body').css('overflow','visible');
    
    //DATEPICKER SETUP
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
    }); 

    // $('#appbundle_perfilestudiante_fechanacimiento').datepicker({ dateFormat: 'dd-mm-yy' }).val();
    $('.datepicker').datepicker({ dateFormat: 'dd-mm-yy' });


    //FORM ERRORS SETUP
    $('form label + ul').css('color', 'red');  
    $('form label + ul').css('display', 'inline');
    $('form label + ul').css('margin-left', '1em');
    $('form label + ul li').css('display', 'inline');

    //BURGER-BUTTON AND RESPONSIVE MAIN MENU TOGGLE
    $('.container-burger').click(function () {
        $(this).toggleClass('change');
        $('header nav').toggleClass('mobile-hidden');
    });
    
    ////////////////////////////////////////////////////////////////////////////////FIXME
    $('#reg-alumnos').click(function(){
       $('#alumnos').css('display', 'table'); 
    });

    $('#reg-empresas').click(function(){
       $('#alumnos').css('display', 'none'); 
    });

    $('i.fa-close').click(function(){
    	$(this).parent().fadeOut();
    });

    $(".next-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li.active');
        $('this').removeClass('active');
        $active.next().removeClass('disabled');
        $active.next().addClass('active');
    });

    $(".prev-step").click(function (e) {
        var $active = $('.wizard .nav-tabs li.active');
        $('this').removeClass('disabled');
        $active.prev().removeClass('disabled');
        $active.prev().addClass('active');
    });
    //END FIXME

});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}

function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}

//Custom Formfy by Bruno Lorente
var nodeToDrop = document.getElementById('site-content');
var inputs = document.getElementsByTagName("input");
var cbs = [];

for (var i = 0; i < inputs.length; i++) {

    inputs[i].parentElement !== nodeToDrop && inputs[i].type == "checkbox" ? cbs.push(inputs[i]) : false;
}

for (var i = 0; i < cbs.length; i++) {
    // console.log(cbs[i].parentNode.parentNode.parentNode.parentNode.id);

    // if (cbs[i].parentNode.parentNode.parentNode.parentNode.id = 'alumnosregs') {
    //     cbs[i].id = 'applicant_terms_accepted';
    // } else if (cbs[i].parentNode.parentNode.parentNode.parentNode.id = 'schoolReg') {
    //     cbs[i].id = 'company_terms_accepted';
    // } else if (cbs[i].parentNode.parentNode.parentNode.parentNode.id = document.URL + "/register-school") {
    //     cbs[i].id = 'school_terms_accepted';
    // }

    cbs[i].checked ? cbs[i].parentElement.className += " checked" : cbs[i].parentElement.className += " unchecked";

    cbs[i].addEventListener( 'change', function() {
        if(this.checked) {
            console.log('checado');
            this.parentElement.className += " checked";
            this.checked = true;
            this.parentElement.classList.remove("unchecked");
        } else {
            console.log('deschecado');
            this.parentElement.className += " unchecked";
            this.checked = false;
            this.parentElement.classList.remove("checked");
        }
    });
}

// Create cross browser requestAnimationFrame method:
// FIXME
window.requestAnimationFrame = window.requestAnimationFrame
 || window.mozRequestAnimationFrame
 || window.webkitRequestAnimationFrame
 || window.msRequestAnimationFrame
 || function(f){setTimeout(f, 1000/60)}
 
var bubble1 = document.getElementById('mod_a1')
// var bubble2 = document.getElementById('bubbles2')
 
function scrollParallax(){
 var scrolltop = window.pageYOffset // get number of pixels document has scrolled vertically 
 bubble1.style.backgroundPositionY = -scrolltop * .2 + 'px' // move bubble1 at 20% of scroll rate
 bubble1.style.backgroundPositionY = -scrolltop * .5 + 'px' // move bubble2 at 50% of scroll rate
}
 
window.addEventListener('scroll', function(){ // on page scroll
    if (bubble1){
        requestAnimationFrame(scrollParallax) // call parallaxbubbles() on next available screen paint
    }
}, false)


