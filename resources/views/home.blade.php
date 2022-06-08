<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primi-passi</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        a {
            color: unset;
            text-decoration: unset;
        }

        .container {
            max-width: 1400;
            margin: auto;
        }

        nav {
            text-align: center;
            padding: 1rem;
        }

        nav a {
            font-weight: bold;
            color: #a05f5f;
            margin: 0 1rem;
            transition: color 250ms linear;
        }

        nav a:hover {
            color: #d52a2a;
        }

        main .jumbotron {
            /* 1016 */
            background-image: url('https://picsum.photos/id/1045/1500');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 50vh;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <nav>
                <a href="/">Home</a>
                <a href="/shop">Shop</a>
                <a href="/about-us">About Us</a>
            </nav>
        </div>
    </header>
    <main>
        <div class="jumbotron">
            <div class="container">
                <h1>My Site</h1>
            </div>
        </div>
    </main>
    <footer>SITE FOOTER HERE</footer>
</body>

</html>