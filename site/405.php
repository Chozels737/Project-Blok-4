<!DOCTYPE html>
<html>

<head>
    <title>The page you were looking for doesn't exist (404)</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        body {
            background-color: #26292E;
            color: #2E2F30;
            font-family: sans-serif;
            margin: 0;
        }

        footer {
            position: absolute;
            bottom: 1%;
            width: 100%;
            text-align: center;
            font-size: .6em;
            color: #fff
        }

        a {
            color: #fff;
        }

        a:hover {
            color: #e74c3c;
        }

        .dialog {
            float: right;
            text-align: left;
            width: 60%;
            margin: 5% auto 0;
        }

        h1 {
            font-size: 4em;
            color: #fff;
            line-height: 1em;
        }

        p {
            font-size: 1.4em;
            color: #fff;
            padding-right: 5%;
        }

        .image {
            position: absolute;
            float: left;
            top: 0;
            width: 35%;
        }

        @media only screen and (max-width: 767px) {
            .image {
                width: 100%;
                top: -50px;
            }

            .dialog {
                float: none;
                text-align: center;
                width: 90%;
                margin-top: 70%
            }
        }
    </style>
</head>

<body>
    <!-- This file lives in public/404.html -->
    <img src="images/405.jpg" class="image">
    <div>
        <div class="dialog">
            <h1>405 error</h1>
            <p>Request is NOT allowed</p>
        </div>
    </div>
</body>
<footer><a href="http://www.free404.com" target="_blank">free404.com</a></footer>
</html>