<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Hospital</title>
</head>
<body>
    <div class="container">
        <h3 style="text-align:center">Beds in: {{ $user->name }}</h3>
        <div class="row">
            @foreach($beds as $bed)
                <div class="col-md-3" style="margin: 5px">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Bed Type: {{ $bed->bed_type }}</h5>
                            <p class="card-text">Allotted: {{ $bed->capacity }}<p>
                            <p class="card-text">Total Beds: {{ $bed->total_capacity }}</p>
                            <!-- <a href="#" class="btn btn-primary">Bed Availability</a> -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="btn btn-primary" onclick="back()">Back</button>
    </div>
    <script type="text/javascript">
        function back()
        {   
            window.history.back();
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>