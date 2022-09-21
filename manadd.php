<?php
require_once 'index.php';
?>
<div>

    <label class="label" for="title">Title</label><br>
    <input class="input" type="text" id="title" name="title" value="">
    <br>

    <label class="label" for="description">Description</label><br>
    <textarea class="input" rows="10" id="description" name="description" value=""></textarea>
    <br>

    <label class="label" for="url">URL</label><br>
    <input class="input" type="text" id="url" name="url" value="">
    <br>

    <button class="btn" onclick="addRecord()">ADD</button>
    <br>
    <div id="demo"></div>
</div>

<script>
    function addRecord() {
        var title = document.getElementById("title").value;
        var description = document.getElementById("description").value;
        var url = document.getElementById("url").value;
        var date = new Date();
        var date = date.getFullYear() + '-' + (date.getMonth() + 1) + '-' + date.getDate() + ' ' + date.getHours() + ':' + date.getMinutes();

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // document.getElementById("demo").innerHTML = this.responseText;
                window.alert(this.responseText);
            }
        };
        xhttp.open("POST", "dbinsert.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(
            "title=" + title +
            "&description=" + description +
            "&url=" + url +
            "&date=" + date
        );

    }
</script>
<link rel="stylesheet" href="styles.css">';