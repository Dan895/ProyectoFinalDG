function sendDataPadre() {
    //newId = document.getElementById("id").value;
    completeName = document.getElementById("completeName").value;
    telefono = document.getElementById("telefono").value;
    email = document.getElementById("email").value;
    type = document.getElementById("type").value;

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
        location.href = "read.php";
    }
}