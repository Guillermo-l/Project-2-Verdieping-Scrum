$("form").submit(function(e) {
            e.preventDefault();

            $.post(
                'includes/paste.inc.php', {
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