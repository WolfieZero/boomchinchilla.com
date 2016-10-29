<?php

    $projects = json_decode(file_get_contents('../projects.json'));

?><!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boom! Chinchilla</title>
    <meta name="description" content="Demo site for web applications">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.1/js/foundation.min.js">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <style>
        a {
            color: #A05282;
        }
        .logo {
              width: 50%;
              margin-left: -21%;
        }
    </style>
</head>

<body>

    <header class="row">
        <div class="column">
            <div class="text-center">
                <img src="logo.png" alt="Boom! Chinchilla" class="logo">
            </div>
        </div>
    </header>

    <div class="row">
        <div class="column">
            <h1 class="text-center">Web Apps</h1>
            <hr>
        </div>
    </div>
    <?php foreach($projects as $project) : ?>
        <div class="row">
            <div class="column">
                <h3 class="text-center"><a href="<?php echo $project->link; ?>"><?php echo $project->name; ?></a></h3>
                <div class="text-center">
                    <?php echo $project->blurb; ?>
                </div>
                <div class="text-center"><?php
                    if (! empty($project->github)) {
                        echo '<a href="' . $project->github . '"><i class="fa fa-github"></i></a>';
                    }

                ?></div>
                <hr>
            </div>
        </div>
    <?php endforeach; ?>

    <footer class="row">
        <div class="large-12 columns">
            <div class="row">

                <div class="small-6 columns">
                    <p>&copy; Neil Sweeney</p>
                </div>

                <div class="small-6 columns">
                    <ul class="inline-list right">
                        <li><a href="http://github.com/wolfiezero/"><i class="fa fa-github"></i></a></li>
                        <li><a href="http://twitter.com/wolfiezero"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>


</body>

</html>
