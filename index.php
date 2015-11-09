<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/favicon.png" type="image/png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/mycss.css" rel="stylesheet">
        <title>Калькулятор</title>
    </head>

    <body class="mybody">
        <div class="container-fluid">
            <!--Header-->
            <div class="row">
                <div class="myheader col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <span class="course col-lg-8 col-md-8 col-sm-8 col-xs-8">
                        Курс
                        <?php
                            include('CourseClass.php');
                            $courseClass = new CourseClass;
                            echo $courseClass->getCourse();
                        ?>
                    <span>
                </div>
            </div>
            <div class="row">
                <div class="content col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <input class="col-lg-4 col-md-4 col-sm-4 col-xs-10">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
