// $('#success').hide();     
// $('#error').hide();     

var ejemplo = "# Título\n"+
"## Subtítulo\n"+
"Parrafo Sencillo...\n\n"+
"* item1\n"+
"* item2\n"+
"* item3\n\n"+
"![](https://ichef.bbci.co.uk/news/660/cpsprodpb/419E/production/_109589761_af84dc67-0a7e-4d53-b148-bb2f23209a3e.jpg)\n\n"+
"[ejemplo de enlace](http://bolivialibre.com)\n\n"+
"**Nota**\n"+
"No es el mejor editor de textos, pero es posible redactar cualquier tipo de texto siguiendo el anterior formato.\n"+
"Es recomendable llenar este formulario a través de una computadora, en la parte superior existen herramientas, que te permiten previsualizar este documento.\n\n"+
"> Cabe resaltar que por el momento no es posible subir archivos por la poca disponibilidad de espacio y el tiempo de desarrollo que toma incrementar esa carácteristica.";

var simplemde = new SimpleMDE();
simplemde.toolbar.push(
    {
        name: "refresh",
        action: function customFunction(){
            mde.value(ejemplo);
        },
        className: "fa fa-refresh",
        title: "Cargar Contenido de Ejemplo"
    }
);
simplemde.toolbar.push(
    {
        name: "upload",
        action: function customFunction(){
            alert("Esta característica aún no esta disponible");
        },
        className: "fa fa-upload",
        title: "Subir Archivos"
    }
);
var tools = simplemde.toolbar;
simplemde.toTextArea();
simplemde = null;
var mde = new SimpleMDE({
    element: document.getElementById("editor1"),
    spellChecker: false,
    initialValue: ejemplo,
    autosave: {
        enabled: true,
        unique_id: "editor",
    },
    toolbar: tools,
});
var icon = $("a[title='Subir Archivos']")[0];
icon.style.backgroundColor= "#ade8ad"; 

mde.codemirror.on("refresh",function(event){
    
});
mde.codemirror.on("changes",function(){
    $('#evidence-content').val(mde.value());
});
$('#change-captcha').click(function(){
    $('#captcha').children().attr('src','/captcha/default?'+Math.random());
});

$('#evidence-form').submit(function (event) {
    //event.preventDefault();
    var action = $(this).attr('action');
    var str = $(this).serialize();
    $.ajax({
        type: "POST",
        url: action,
        headers: {
          'x-csrf-token': $("meta[name=csrf-token]").attr('content')
        },
        data: str,
        success: function(msg) {
            console.log(msg);
            $('#success').hide();     
            if(msg.success=="yes"){
                $('#success').show();
                $("#error").hide();
            }else{
                $("#error").find("ul").remove();
                $("#error").append("<ul></ul>");
                $("#error").show();
                for (const value in msg.errors) {
                    if (msg.errors.hasOwnProperty(value)) {
                        var element = msg.errors[value];
                        if(element=="El campo contenido es obligatorio."){
                            element = "Redacta algo nuevo.";
                        }
                        $("#error").find("ul").append('<li>'+element+'</li>');
                    }
                }
            }
            $('#captcha').children().attr('src','/captcha/default?'+Math.random());
        }
      });
    return false;
});