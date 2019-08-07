{% include 'layout.php' %}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
    <style>
        .column {
            float: left;
            width: 32.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .container {
            padding: 0px 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
<div class="row">
    <div class="column">
        <div class="card">
            <img src="img1.jpg" alt="Jane" style="width:100%">
            <div class="container">
                <h2>Jane Doe</h2>
                <p class="title">CEO &amp; Founder</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>example@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img2.jpg" alt="Mike" style="width:100%">
            <div class="container">
                <h2>Mike Ross</h2>
                <p class="title">Art Director</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>example@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="card">
            <img src="img3.jpg" alt="John" style="width:100%">
            <div class="container">
                <h2>John Doe</h2>
                <p class="title">Designer</p>
                <p>Some text that describes me lorem ipsum ipsum lorem.</p>
                <p>example@example.com</p>
                <p><button class="button">Contact</button></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>



