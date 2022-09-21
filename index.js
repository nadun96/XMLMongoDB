function showTable() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("root").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "dbread.php", true);
    xhttp.send();
}

function addtodb() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            window.alert = this.responseText;
        }
    };
    xhttp.open("GET", "dbadd.php", true);
    xhttp.send();
}
