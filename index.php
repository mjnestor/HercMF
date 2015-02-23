<html>
    <head>
        <title>
            Minify 2.0
        </title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        <!-- Optional theme -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" />
        <!-- Latest compiled and minified JavaScript -->
        <link rel="stylesheet" href="style.css" />
        <!-- Modified -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        function getCode(id)
        {
            document.getElementById(id).focus();
            document.getElementById(id).select();
        }
        </script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">CSS Minifier Ver. 2.0</a>
        </div>
        <div class="navbar-collapse collapse">
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <div class="container">
        &nbsp;
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Paste CSS Code Here:</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <textarea id="this_data" name="this_data">
                </textarea>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Get Mini Code Here:</h3>
            </div>
            <div class="panel-body">
                <textarea id="result" onclick="getCode('result');">
                <?php
                function shrinkCSS($string){
                $string = preg_replace('!/\*.*?\*/!s','', $string);
                $string = preg_replace('/\n\s*\n/',"\n", $string);
                $string = preg_replace( '/\s*(?!<\")\/\*[^\*]+\*\/(?!\")\s*/' , '' , $string);
                $string = preg_replace('/[\n\r \t]/',' ', $string);
                $string = preg_replace('/ +/',' ', $string);
                $string = preg_replace('/ ?([,:;{}]) ?/','$1',$string);
                $string = preg_replace('/;}/','}',$string);
                return $string;}
                $string = shrinkCSS($_POST['this_data']);
                echo trim(stripslashes($string));
                ?></textarea>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">And Action!</h3>
            </div>
            <div class="panel-body">
                <button type="submit" value="Submit" class="btn btn-lg btn-primary">Get Mini Code!</button>
            </div>
        </div>
    </div>
    <hr>
    <footer>
        &copy; 2011-2014 <a href="http://www.herculescore.org/">HerculesCore.org</a>
        <br />
        Part of the <a href="http://www.herculescore.org/">HerculesCore OpenSource Project</a>
        <br />
        Contact <a href="mailto:mjnestor@gmail.com">mjnestor@gmail.com</a>
        <br />
        <br />
        <img src="GPL_redwhite.png" />
        <br />
        <br />
        <img src="herccore.png" />
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>