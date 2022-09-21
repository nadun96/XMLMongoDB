<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="index.css">
    <script src="index.js" defer></script>
    <script src="add.js" defer></script>
</head>

<body>
    <div class="topic">
        <h1>XML Assignment</h1>
    </div>

    <nav id="navbar">
        <ul type="none">
            <div class="d">
                <li><a><button id="read" onclick="showTable()">Read From DB</button></a></li>
                <li><a href="manadd.php"><button id="" onclick="">Add Manually</button></a></li>
                <li><a><button id="" onclick="addtodb()">Add From XML</button></a></li>
            </div>
        </ul>
    </nav>

    <div id="root">

    </div>
</body>

</html>