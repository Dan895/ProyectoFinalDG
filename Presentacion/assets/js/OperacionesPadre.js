function sendDataPadre() {
    //Id = document.getElementById("id").value;
    completeName = document.getElementById("completeName").value;
    telefono = document.getElementById("telefono").value;
    email = document.getElementById("email").value;
    type = document.getElementById("type").value;

    //var data = {Id: Id, completeName: completeName, telefono: telefono, email: email, type: type};
    var data = {completeName: completeName, telefono: telefono, email: email, type: type};
    console.log(data);
    mdlMessage = document.getElementById("messageModal");

    txtmdlMessage = document.getElementById("mdlMessage");
    txtmdlSuccess = document.getElementById("mdlSuccess");

    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            response = JSON.parse(this.responseText);

            txtmdlSuccess.value = response.success;
            txtmdlMessage.innerHTML = response.message;
        }
    };
    xmlhttp.open("POST", "../Negocio/PadreBussiness.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/json");
    xmlhttp.send(JSON.stringify(data));
}

function cleanDataPadre() {
    mdlSuccess = document.getElementById("mdlSuccess").value;
    type = document.getElementById("type").value;
    console.log(type);
    if (type == "1") {
        if (mdlSuccess == "true") {
            document.getElementById("idMessage").innerHTML = "";
            document.getElementById("completeName").value ="";
            document.getElementById("telefono").value = "";
            document.getElementById("email").value = "";
        }
    } else {
        location.href = "../Presentacion/index2.php";
    }
}
//Variable de recuperacion con javascript
/*$(".update").click(function (e){
    var line = $(e.currentTarget).parent("table").parent("tr").parent("tr");
    var cell = $(this).get(0);
    console.log(cell);
    console.log(line);
    var result = {
        id: line.find('td')[0].val(),
        completeName: line.find('td')[1].text(),
        telefono: line.find('td')[2].val(),
        email: line.find('td')[3].text()
    }
    console.log(result);
});*/
/*
//Rellena el formulario de actualización
$(".update").on('click',function (){
    $tr = $(this).closest('tr');
    console.log($tr);
    var datos = $tr.children("td").map(function (){
        return $(this).text();
    });

    $('#id').val(datos[0]);
    $('#nombre').val(datos[1]);
    $('#telefono').val(datos[2]);
    $('#email').val(datos[3]);
});*/


function cargar(){
    $(".update").on('click',function (){
        $tr = $(this).closest('tr');
        //console.log($tr);
        var datos = $tr.children("td").map(function (){
            return $(this).text();
        });
        console.log(datos);
        $('#id').val(datos[0]);
        $('#nombre').val(datos[1]);
        $('#telefono').val(datos[2]);
        $('#email').val(datos[3]);
    });
}














