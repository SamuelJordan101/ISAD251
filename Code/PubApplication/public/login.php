<?php
date_default_timezone_set('Europe/London');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/LoginStyle.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <title>Sam's Pub Ordering</title>
</head>
<body>
<img src="../assets/img/samspub.png" class="d-inline-block align-top" width="220px" height="45px"></a><br><br>
<div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">User ID</span>
    </div>
    <input type="text" id="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    <a href="" id="login" class="btn btn-info" role="button" style="margin-left: 2%">Login</a>

    <script>
        var input = document.getElementById("username");

        // Execute a function when the user releases a key on the keyboard
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("login").click();
            }
        });
    </script>

</div>
</body>
