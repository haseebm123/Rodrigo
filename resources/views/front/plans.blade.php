

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
     <style>
        .alert.parsley {
            margin-top: 5px;
            margin-bottom: 0px;
            padding: 10px 15px 10px 15px;
        }
        .check .alert {
            margin-top: 20px;
        }
        .credit-card-box .panel-title {
            display: inline;
            font-weight: bold;
        }
        .credit-card-box .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 100%;
        }
        .credit-card-box .display-tr {
            display: table-row;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body id="app-layout">
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1 class="text-primary text-center">
          <strong>Laravel 8 Stripe Subscription Example - CodeCheef</strong>
        </h1>
    </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Select Plane:</div>

                <div class="card-body">

                    <div class="row">

                        @foreach($plans as $plan)
                            <div class="col-md-6">
                                <div class="card mb-3">
                                  <div class="card-header">
                                        ${{ $plan->price }}/Mo
                                  </div>
                                  <div class="card-body">
                                    <h5 class="card-title">{{ $plan->name }}</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                    <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary pull-right">Choose</a>

                                  </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

  </div>
</div>

</body>
</html>
