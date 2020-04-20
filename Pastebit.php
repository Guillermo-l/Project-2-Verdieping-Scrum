<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#PasteBit</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://codepen.io/P1N2O/pen/xxbjYqx.css" />
    <link rel="stylesheet" href="./style.css" />
</head>

<body>
    <div class="all-content">
        <div class="top-column">
            <img src="img/PasteBit_logo.png" alt="#PasteBit">
        </div>
        <div class="form">
            <div>
                <p>New Paste</p>
            </div>
            <form action="">
                <div>
                    <textarea name="" id="" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <p>Paste Settings</p>
                </div>
                <div>
                    <label for="highlighting">Syntax Highlighting</label>
                    <select name="highlighting" id="highlighting">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div>
                    <label for="pasteName">Paste Name / Title</label>
                    <input id="pasteName" type="text">
                </div>
                <div>
                    <button type="submit">Create New Paste</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" integrity="sha256-qM7QTJSlvtPSxVRjVWNM2OfTAz/3k5ovHOKmKXuYMO4=" crossorigin="anonymous"></script>
    <!-- partial -->
    <script src="./script.js"></script>
</body>

</html>