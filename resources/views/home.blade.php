<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>primi-passi</title>
    <style>
        /* common */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
        }

        a {
            color: unset;
            text-decoration: unset;
        }

        .container {
            max-width: 1400px;
            margin: auto;
        }

        .container-sm {
            max-width: 800px;
            margin: auto;
        }

        /* utilities */

        .m-0 {
            margin: 0;
        }

        .text-center {
            text-align: center;
        }

        .d-flex {
            display: flex;
        }

        .align-items-end {
            align-items: flex-end;
        }

        /* header */
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

        /* main */

        main {
            min-height: calc(100vh - 50px - 50px);
        }

        main .jumbotron {
            /* 1016 */
            background-image: url('https://picsum.photos/id/1045/1500');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 200px;
        }

        main .jumbotron h1 {
            font-size: 3rem;
            color: white;
            background: linear-gradient(130deg, #a05f5f, #a05f5f 70%, transparent 70%);
            padding: 0.5rem;
            width: 600px;
            margin-bottom: -1.25rem;
        }

        main .content {
            padding: 2rem 0;
        }

        /* footer */
        footer {
            padding: 1rem 0;
            background-color: grey;
            color: white;
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
        <div class="jumbotron d-flex align-items-end">
            <div class="container m-0">
                <h1>My Site Business</h1>
            </div>
        </div>
        <div class="content">
            <div class="container-sm">
                <?= $content ?>
            </div>
        </div>
    </main>
    <footer class="text-center">
        Copyright &copy;2022
    </footer>
</body>

</html>