<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Excited</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 0;
            margin: 0;
            background: #222222 repeating-linear-gradient(45deg, #2b2b2b 0%, #2b2b2b 10%, #222222 0%, #222222 50%) 0 0;
        }

        * {
            box-sizing: border-box;
            font-family: 'Roboto Condensed', sans-serif;
        }

        .con {
            display: flex;
        }

        .button {
            --base-color: initial;
            --size: initial;
            --text-size: 16px;
            --border-size: initial;
            width: var(--size);
            height: calc(var(--size) * 0.5);
            background: var(--base-color);
            border: transparent;
            font-size: var(--text-size);
            display: flex;
            padding: .5em;
            border-radius: 3px;
            box-shadow: 1px 1px 5px var(--base-color);
            cursor: pointer;
            text-transform: capitalize;
            min-width: 100%;
        }

        .button:focus {
            outline: none;
        }

        .button:active {
            filter: brightness(0.9);
            transform: scale(0.9);
        }

        .button > span {
            margin: auto;
        }

        .box {
            margin: 12px;
        }

        span {
            margin: auto;
            color: #FFF;
        }

        .is-success {
            --base-color: yellowgreen;
        }

        .is-warnning {
            --base-color: orange;
        }

        .is-primary {
            --base-color: royalblue;
        }

        .is-error {
            --base-color: crimson;
        }

        .is-info {
            --base-color: navy;
        }
    </style>
</head>

<body>

<div class="con">
    <!--    <div class="box">-->
    <!--        <button class="button is-primary"><span>primary</span>-->
    <!--        </button>-->
    <!--    </div>-->
    <!--    <div class="box">-->
    <!--        <button class="button is-warnning"><span>warnning</span>-->
    <!--        </button>-->
    <!--    </div>-->
    <!--    <div class="box">-->
    <!--        <button class="button is-success"><span>success</span>-->
    <!--        </button>-->
    <!--    </div>-->
    <!--    <div class="box">-->
    <!--        <button class="button is-error"><span>error</span>-->
    <!--        </button>-->
    <!--    </div>-->
    <!--    <div class="box">-->
    <!--        <button class="button is-info"><span>info</span>-->
    <!--        </button>-->
    <!--    </div>-->

    <div class="box" style="width: 60vw">
        <a href="<?= BASEHOST ?>" style="text-decoration: none">
            <?php /** @noinspection PhpUndefinedVariableInspection */
            if (!$currentID): ?>
                <button class="button is-error">
                <span>
                    Contact Not Excited (Redirect To Home ...) !
                </span>
                </button>
            <?php else: ?>
                <button class="button is-success">
                <span>
                    Contact Deleted (Redirect To Home ...) !
                </span>
                </button>
            <?php endif; ?>
        </a>
        <script>
            // Redirect To Home page
            setTimeout(function (){
                location.href = "<?= BASEHOST ?>"
            }, 2000)
        </script>
    </div>

</body>
</html>