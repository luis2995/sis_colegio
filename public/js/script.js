var primaria = ["primero", "segundo", "tercero", "cuarto", "quinto", "sexto"];
var secundaria = ["primero", "segundo", "tercero", "cuarto", "quinto"];
function conver_option(nivel) {
    var codigo = "";
    for (var i = 0; i < nivel.length; i++) {
        codigo += "<option value='" + nivel[i] + "'>" + nivel[i] + "</option>";
    }
    return codigo;
}
function  obtenerareas(nivel, grado) {
    var areas = ["Matematica", "Comunicacion", "Historia"];
    return areas;
}
function  obtenercursos(area, nivel, grado) {
    var areas = ["Aritmetica", "Algebra", "Trigonometria", "Geometria"];
    return areas;
}

$(document).ready(function () {
     $('#guardar').fadeOut(1000);
    $('#ver').change(function () {
       

        var nivela = $('input[name=nivel]:radio:checked').val();
        switch (nivela) {
            case "Primaria":
                $('#selecgrado').html(conver_option(primaria));

                break;
            case "Secundaria":
                $('#selecgrado').html(conver_option(secundaria));
                break;
            default:
                break;
        }
        $('#selecgrado').css({
            'display': 'block',
        });
        $('#group_Grado').css({
            'display': 'block',
        });
    });

    $('select[name=grado]').change(function () {
        var nivela = $('input[name=nivel]:radio:checked').val();
        var grado = $('select[name=grado]').val();
        $('#selecarea').html(conver_option(obtenerareas(nivela, grado)));
        $('#selecarea').css({
            'display': 'block',
        });
        $('#group_Area').css({
            'display': 'block',
        });
    });
    $('select[name=area]').change(function () {
        var nivela = $('input[name=nivel]:radio:checked').val();
        var grado = $('select[name=grado]').val();
        var area = $('select[name=area]').val();
        $('#seleccurso').html(conver_option(obtenercursos(area, nivela, grado)));
        $('#seleccurso').css({
            'display': 'block',
        });
        $('#group_curso').css({
            'display': 'block',
        });
        $('#guardar').show(500);

    });
//    $('#gcodigo').keypress(function () {
//
//        $('#gcodigo').addClass('has-success').addClass('has-feedback');
//        $('#ccodigo').html($('#ccodigo').html() + "<span class='glyphicon glyphicon-ok form-control-feedback' aria-hidden='true'></span>\n\
//<span id='inputSuccess3Status' class='sr-only'>(success)</span>");
//    });

}
);
function myFunction() {
    var porId = $('input:radio[name=reg_cargo]:checked').val();
    if (porId == "Auxiliar") {
        document.getElementById("demo").innerHTML = "<label for='cargo' class='control-label col-sm-3'>Nivel  </label> <div class='btn-group col-sm-9' data-toggle='buttons'> <label class='btn btn-primary active'>  <input type='radio' autocomplete='off' checked name='reg_nivel' value='Primaria' > Primaria </label><label class='btn btn-primary'><input type='radio' autocomplete='off' name='reg_nivel' value='Secundaria'> Secundaria</label></div>";
    } else {
        document.getElementById("demo").innerHTML = "";
    }

}
function editartabla(fila) {
    var codigo = $('#example tr:eq(' + fila + ') td:eq(1)').text();
    var nombre = $('#example tr:eq(' + fila + ') td:eq(2)').text();
    var appat = $('#example tr:eq(' + fila + ') td:eq(3)').text();
    var apmat = $('#example tr:eq(' + fila + ') td:eq(4)').text();
    var edad = $('#example tr:eq(' + fila + ') td:eq(5)').text();
    var tefl = $('#example tr:eq(' + fila + ') td:eq(6)').text();
    var nac = $('#example tr:eq(' + fila + ') td:eq(7)').text();
    $('#edreg_codigo').val(codigo);
    $('#edreg_nombres').val(nombre);
    $('#edreg_apellidos_p').val(appat);
    $('#edreg_apellidos_m').val(apmat);
    $('#edreg_edad').val(edad);
    $('#edreg_telf').val(tefl);
    $('#edreg_fech').val(nac);
    $('#editarempleados').modal();
}
function eliminar(fila){
    alert("Eliminado");
}
function editartablaalum(fila) {

    var codigo = $('#datosalumnos tr:eq(' + fila + ') td:eq(0)').text();
    var nombre = $('#datosalumnos tr:eq(' + fila + ') td:eq(1)').text();
    var appat = $('#datosalumnos tr:eq(' + fila + ') td:eq(2)').text();
    var apmat = $('#datosalumnos tr:eq(' + fila + ') td:eq(3)').text();
    var sexo = $('#datosalumnos tr:eq(' + fila + ') td:eq(4)').text();
    var edad = $('#datosalumnos tr:eq(' + fila + ') td:eq(5)').text();
    var tefl = $('#datosalumnos tr:eq(' + fila + ') td:eq(6)').text();
    var nac = $('#datosalumnos tr:eq(' + fila + ') td:eq(7)').text();

    $('#edareg_codigo').val(codigo);
    $('#edareg_nombres').val(nombre);
    $('#edareg_apellidos_p').val(appat);
    $('#edareg_apellidos_m').val(apmat);
    $('#sexsel').html(checkedsexo(sexo))
    $('#edareg_edad').val(edad);
    $('#edareg_telf').val(tefl);
    $('#edareg_fech').val(nac);

    $('#editaralumnos').modal();
}
$(document).ready(function () {
    $('#example').DataTable();
    $('#datosalumnos').DataTable();
    $('#datosalumnosas').DataTable();
    $('#mostrar').fadeOut(0);
    
});
function actualizar() {
    var form=$('#empleados');
    var nombre=$('#edareg_apellidos_p').val();
    
    alert(nombre);

}
function checkedsexo(sexo) {
    var salida;
    if (sexo == "Masculino") {
        salida = "<label class='btn btn-primary active'><input type='radio' autocomplete='off' checked name='aereg_sexo' value='Masculino'> Masculino</label>  <label class='btn btn-primary'> <input type='radio' autocomplete='off' name='aereg_sexo' value='Femenino'> Femenino</label>";
    } else {
        salida = "<label class='btn btn-primary'><input type='radio' autocomplete='off'  name='aereg_sexo' value='Masculino'> Masculino </label> <label class='btn btn-primary active'> <input type='radio' checked autocomplete='off' name='aereg_sexo' value='Femenino'> Femenino</label>";

    }
    return salida;

}
function mostrarinfo(fila) {
    var codigo = $('#datosalumnos tr:eq(' + fila + ') td:eq(0)').text();
    var nombre = $('#datosalumnos tr:eq(' + fila + ') td:eq(1)').text();
    var appat = $('#datosalumnos tr:eq(' + fila + ') td:eq(2)').text();
    var apmat = $('#datosalumnos tr:eq(' + fila + ') td:eq(3)').text();
    var sexo = $('#datosalumnos tr:eq(' + fila + ') td:eq(4)').text();
    var edad = $('#datosalumnos tr:eq(' + fila + ') td:eq(5)').text();
    $('#dpnombre').html("<label class='label label-default' >"+nombre+"</label>")
    $('#dpapellidop').html("<label class='label label-default' >"+appat+"</label>")
    $('#dpapellidom').html("<label class='label label-default' >"+apmat+"</label>")
    $('#dpsexo').html("<label class='label label-default' >"+sexo+"</label>")
    $('#dpedad').html("<label class='label label-default' >"+edad+"</label>")
    $('#datosalumnosas').hide("slow");
    $('#mostrarp').hide("slow");
    $('#mostrar').show("slow");
    
}
function volver() {
    $('#datosalumnosas').show("slow");
     $('#mostrarp').show("slow");
    $('#mostrar').hide("slow");
}