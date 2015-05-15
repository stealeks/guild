<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="icon" href="/favicon.ico">-->

        <title>/* Guild */</title>

        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300&subset=latin,cyrillic-ext,cyrillic,latin-ext' rel='stylesheet' type='text/css'>

        <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/css.css" rel="stylesheet">

    </head>

    <body>
        <!-- Navigation -->
        <div class="container header">
            <div class="row">

                <div class="col-lg-2 text-center">
                    <div class="rotate-left-1">
                        <div class="paper paper-lift">
                            <div class="row">
                                /*
                                <div class="name">Guild</div>
                                */
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (!\Auth::check()): ?>

                    <div class="col-lg-offset-8 col-lg-2">
                        <div class="rotate-left-1">
                            <div class="paper paper-curve-left text-center">
                                <a href="<?php echo route('login') ?>">Login</a>
                            </div>
                        </div>
                    </div>

                <?php endif; ?>

            </div>
        </div>

        <div class="container content">
            <?php echo view($_subview, $_data); ?>
        </div>

        <div class="container footer">
            <div class="col-lg-offset-5 col-lg-2">
                <div class="rotate-left-3">
                    <div class="paper paper-curve-below text-center">
                        Guild &copy; <?php echo date('Y') ?>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </body>
</html>