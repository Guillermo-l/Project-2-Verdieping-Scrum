<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://codepen.io/P1N2O/pen/xxbjYqx.css" />
    <link rel="stylesheet" href="./css/homepage.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>


<body>
    <div class="all-content">
        <div class="top-column">
            <img class="logo" src="img/PasteBit_logo.png" alt="#PasteBit">
        </div>

        <nav class="nav-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="instructiePagina.html">Instructie pagina</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>

        <div class="form">
            <div>
                <h3>New Paste</h3>
            </div>
            <form action="paste.inc.php" method="post">
                <div>
                    <textarea id="paste" name="paste" cols="100" rows="10  " required></textarea>
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
                        <button class="submit" id="submit" type="submit" name="submit">Create New Paste</button>
                    </div>
                </div>
            </form>
            <p id="result"></p>
        </div>
        <div class="pop-up">
            <div class="pop-up-content">
                <h4>
                    Kopieer uw link!
                </h4>
                <div>
                    <input class="link" id="link" type="text" value="http://localhost/Project-2-Verdieping-Scrum/viewpaste.php?uid=
                    <?php $uniqueid ?> ">
                </div>
                <div class="copy-div">
                    <button class="copy" id="copy-button">Kopiëren <img id="copy" src="./img/copy.png" alt=""></button>
                </div>
            </div>
        </div>
        <div class="copy-done">
            <div class="pop-up-content-done">
                <div class="close">
                    <p>+</p>
                </div>
                <div class="copy-message">
                    <h2>Uw link is gekopieërd!</h2>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("form").submit(function(e) {
            e.preventDefault();

            $.post(
                'paste.inc.php', {
                    paste: $("#paste").val(),
                    syntax: $("#highlighting").val(),
                    pasteTitle: $("#pasteName").val()
                },
                function(result) {
                    if (result == "succes") {
                        $("#result").html("error occured");
                            document.querySelector('.pop-up').style.display = 'flex';

                        document.querySelector('.close').addEventListener('click', function() {
                            document.querySelector('.copy-done').style.display = 'none';
                        });

                        document.getElementById('copy-button').addEventListener('click', function() {
                            document.getElementById('link').select();
                            document.execCommand('copy');
                            document.querySelector('.pop-up').style.display = 'none';
                            document.querySelector('.copy-done').style.display = 'flex';
                        });
                    } else {
                        $("#result").html("error occured");
                    }
                }
            )
        });
    </script>

</body>

</html>