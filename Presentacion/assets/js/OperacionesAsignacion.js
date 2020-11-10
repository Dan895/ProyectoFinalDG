function sendDataAsignacion() {

    estudiante = document.getElementById("estudiante").value;
    curso = document.getElementById("curso").value;
    maestro = document.getElementById("maestro").value;
    zona = document.getElementById("zona").value;
    examen = document.getElementById("examen").value;
    type = document.getElementById("type").value;

    var data = {estudiante: estudiante, curso: curso, maestro: maestro, zona: zona, examen: examen, type: type};
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
    xmlhttp.open("POST", "../Negocio/AsignacionBussiness.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/json");
    xmlhttp.send(JSON.stringify(data));
}

function cleanDataAsignacion() {
    mdlSuccess = document.getElementById("mdlSuccess").value;
    type = document.getElementById("type").value;
    console.log(type);
    if (type == "1") {
        if (mdlSuccess == "true") {
            document.getElementById("estudiante").value ="";
            document.getElementById("curso").value ="";
            document.getElementById("maestro").value = "";
            document.getElementById("zona").value = "";
            document.getElementById("examen").value = "";
        }
    } else {
        location.href = "read.php";
    }
}