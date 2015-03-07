<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href='{{ asset('css/bootstrap.min.css') }}' rel='stylesheet' type='text/css' />
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
	<body>
            <div class="container">
                <div class="content">
                    <h1>Laravel</h1>
                    <div class="title">Laravel 5</div>
                    <div class="quote">{{ Inspiring::quote() }}</div>
                </div>
                
                <a href="home" class="btn btn-success" role="button">Home</a>
            </div>
            
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
	</body>  
</html>
