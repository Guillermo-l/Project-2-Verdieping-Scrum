<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://codepen.io/P1N2O/pen/xxbjYqx.css" />
    <link rel="stylesheet" href="./css/homepage.css" />
</head>


<body>
    <div class="all-content">
        <div class="top-column">
            <img class="logo" src="img/PasteBit_logo.png" alt="#PasteBit">
        </div>

        <nav class="nav-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Instructie pagina</a></li>
                <li><a href="code.php">Type Uw Gewenste Code </a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>

        <div class="form">
            <div>
                <h3>New Paste</h3>
            </div>
            <form action="/Project-2-Verdieping-Scrum/includes/paste.inc.php" method="POST">
                <div>
                    <textarea name="paste" cols="100" rows="10  " required></textarea>
                </div>
                <div class="form-pt2">
                    <div>
                        <h3>Paste Settings</h3>
                    </div>
                    <div class="form-input">
                        <label for="pasteName">Paste Name / Title</label>
                        <input id="pasteName" type="text" name="pasteName" required autocomplete="off">
                    </div>
                    <div class="form-input">
                        <label for="highlighting">Syntax Highlighting</label>
                        <select name="highlighting" id="highlighting" required>
                            <option value="" disabled selected hidden>-- Kies een optie --</option>
                            <option value="html">HTML</option>
                            <option value="css">CSS</option>
                            <option value="php">PHP</option>
                        </select>
                    </div>
                    <div class="form-submit">
                        <button type="submit" name="submit">Create New Paste</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</body>

</html>