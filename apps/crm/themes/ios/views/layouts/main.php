<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <title></title>
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/ico/favicon.png">
    </head>
    <body>
       <?php echo $content?>

         
        <!-- Footer
        ================================================== -->
        <footer class="bs-footer" role="contentinfo" style="background-color:#EDEDED;margin-top: 0px;padding-top: 10px">
            <div class="container">
                <p class="text-center">WitLeaf © 2014. All Rights Reserved.</p>
            </div>
        </footer>
        <script src="<?php echo Yii::app()->baseUrl; ?>/static/lib/seajs/2.3.0/sea.js"></script>
        <script>
          seajs.config({
            base: '<?php echo Yii::app()->baseUrl; ?>/static',
          }).use('js/init');
        </script>
    </body>
</html>