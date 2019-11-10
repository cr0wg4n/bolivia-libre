jQuery(document).ready(function($) {
  "use strict";

  //Contact
  $('form.contactForm').submit(function() {
    var f = $(this).find('.form-group'),
      ferror = false,
      emailExp = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

    f.children('input').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');
      var msg = '';
      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
              msg = "Este campo es requerido, rellénalo";
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
              msg = "Este campo no debe contener menos de "+exp+" caracteres.";
            }
            break;

          case 'maxlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
              msg = "Este campo no debe contener más de "+exp+" caracteres.";
            }
            break;

          case 'email':
            if (!emailExp.test(i.val())) {
              ferror = ierror = true;
              msg = "Inserta un correo electrónico válido"
            }
            break;

          case 'checked':
            if (! i.is(':checked')) {
              ferror = ierror = true;
            }
            break;

          case 'regexp':
            exp = new RegExp(exp);
            if (!exp.test(i.val())) {
              ferror = ierror = true;
            }
            break;
        }
       i.next('.validation').html((ierror ? (msg !== undefined ? msg : 'wrong Input') : '')).show('blind');
//        i.next('.validation').html((ierror ? (i.attr('data-msg') !== undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    f.children('textarea').each(function() { // run all inputs

      var i = $(this); // current input
      var rule = i.attr('data-rule');
      var msg = '';
      if (rule !== undefined) {
        var ierror = false; // error flag for current input
        var pos = rule.indexOf(':', 0);
        if (pos >= 0) {
          var exp = rule.substr(pos + 1, rule.length);
          rule = rule.substr(0, pos);
        } else {
          rule = rule.substr(pos + 1, rule.length);
        }

        switch (rule) {
          case 'required':
            if (i.val() === '') {
              ferror = ierror = true;
              msg = "Este campo es requerido, rellénalo";
            }
            break;

          case 'minlen':
            if (i.val().length < parseInt(exp)) {
              ferror = ierror = true;
              msg = "Este campo no debe contener menos de "+exp+" caracteres.";
            }
            break;
          case 'maxlen':
            if (i.val().length > parseInt(exp)) {
              ferror = ierror = true;
              msg = "Este campo no debe contener más de "+exp+" caracteres.";
            }
            break;
        }
        i.next('.validation').html((ierror ? (msg != undefined ? msg : 'wrong Input') : '')).show('blind');
//        i.next('.validation').html((ierror ? (i.attr('data-msg') != undefined ? i.attr('data-msg') : 'wrong Input') : '')).show('blind');
      }
    });
    if (ferror) return false;
    else var str = $(this).serialize();
    var action = $(this).attr('action');
    if( ! action ) {
      action = 'contactform/contactform.php';
    }
    $.ajax({
      type: "POST",
      url: action,
      headers: {
        'x-csrf-token': $("meta[name=csrf-token]").attr('content')
      },
      data: str,
      success: function(msg) {
        console.log(msg);
        if (msg.msg == 'OK') {
          $("#"+msg.name+"-validation").addClass("show");
          setTimeout(function(){$("#"+msg.name+"-validation").removeClass("show");}, 10000);
          $('.contactForm').find("input, textarea").val("");
        } else {
          // $("#sendmessage").removeClass("show");
          // $("#errormessage").addClass("show");
          // $('#errormessage').html(msg);
          if(msg.name == 'message'){
            $('#captcha-validation').html(msg.msg);
          }else{
            $('#captcha-validation-2').html(msg.msg);
          }
        }
        if(msg.name == 'message'){
          $('#captcha').children().attr('src','/captcha/default?'+Math.random());
        }else{
          $('#captcha-2').children().attr('src','/captcha/default?'+Math.random());
        }
      }
    });
    return false;
  });

});
