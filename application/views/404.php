<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERROR</title>
</head>

<body style="margin: 0;padding:0;">
    <div class="flex">
        <img src="<?php echo base_url() ?>assets/images/logo.png" alt="" srcset="" width="100px" height="auto">
        <h1 style="font-family:Arial, Helvetica, sans-serif;">404</h1>
        <p><a class="links" href="<?php echo base_url(); ?>">GO TO HOME</a></p>
    </div>
    <style>
        .flex {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: Arial, Helvetica, sans-serif;
            color: #000;
        }

        .links {
            text-decoration: none;
            font-weight: bold;
            color: #000;
            background: #ff5a5f;
            padding: 20px 40px;
        }

        .links:hover {
            background-color: #ff5a3f;
            color: #fff;
        }
    </style>
</body>

</html>