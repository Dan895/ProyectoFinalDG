function searchIdStudent(newId) {

    txtIdMessage = document.getElementById("idMessage");
    txtNewId = document.getElementById("id");
    btnSaveStudent = document.getElementById("sendStudentData");

    if (newId.length == 0) {
        txtNewId.innerHTML = "";
        txtIdMessage.innerHTML = "";
        btnSaveStudent.disabled = true;
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                response = JSON.parse(this.responseText);

                if (response.success) {
                    txtIdMessage.classList.add("warning");
                    txtIdMessage.classList.remove("success");
                    btnSaveStudent.disabled = true;
                } else {
                    txtIdMessage.classList.add("success");
                    txtIdMessage.classList.remove("warning");
                    btnSaveStudent.disabled = false;
                }
                txtIdMessage.innerHTML = response.message;
            }
        };
        xmlhttp.open("GET", "../Datos/newIDEstudiante.php?newId="+newId, true);
        xmlhttp.send();
    }

}

function sendDataEstudiante() {
    newId = document.getElementById("id").value;
    name = document.getElementById("completeName").value;
    fechaNac = document.getElementById("fechaNac").value;
    txtpadre = document.getElementById("padre").value;
    padreValor = txtpadre.options[txtpadre.selectedIndex].value;
    type = document.getElementById("type").value;

    var data = {newId: newId, name: name, fechaNac: fechaNac, padre: padreValor, type: type};
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
    xmlhttp.open("POST", "../Negocio/EstudianteBussiness.php", true);
    xmlhttp.setRequestHeader("Content-Type", "application/json");
    xmlhttp.send(JSON.stringify(data));
}

function cleanData() {
    mdlSuccess = document.getElementById("mdlSuccess").value;
    type = document.getElementById("type").value;
    console.log(type);
    if (type == "1") {
        if (mdlSuccess == "true") {
            document.getElementById("idMessage").innerHTML = "";
            document.getElementById("id").value ="";
            document.getElementById("completeName").value ="";
            document.getElementById("padre").value = "";
            document.getElementById("fechaNac").value = "";
        }
    } else {
        location.href = "read.php";
    }
}