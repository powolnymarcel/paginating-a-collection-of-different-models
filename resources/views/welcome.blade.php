<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Desk &amp; Chair</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <style>
        .search-box {
            margin-top: 40px;
            margin-bottom: 40px;
        }
        </style>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">Desk &amp; Chair</a>
                </div>
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="jumbotron">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="search-box">
                                    <div class="input-group">
                                        <input name="query" type="text" class="form-control input-lg" placeholder="Search for..." autofocus>
                                        <span class="input-group-btn">
                                            <button class="btn btn-default btn-lg" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div><!-- /.col-lg-6 -->
                        </div><!-- /.row -->
                    </div>
                    @if(isset($results) and $results->count() > 0)
                        <table class="table">
                            <tr>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Color</th>
                                <th>Material</th>
                                <th>Description</th>
                                <th>Type</th>
                            </tr>
                            @foreach($results as $item)
                                <tr>
                                    <td>{{ $item->code }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->color }}</td>
                                    <td>{{ $item->material }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td>
                                        @if($item instanceof App\Desk)
                                            Desk
                                        @elseif($item instanceof App\Chair)
                                            Chair
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        {{ $results->appends(['query' => Request::get('query')])->links() }}
                    @endif
                    @if(isset($results) and $results->count() == 0)
                        <p class="lead">Nothing found!</p>
                    @endif
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
