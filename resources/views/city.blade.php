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
        <h3 style="text-align:center">Hospitals in {{ $city->name }}</h3>
        <div class="row">
            @foreach($city->users as $user)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $user->name }}</h5>
                            <p class="card-text"></p>
                            <a href="{{ route('beds', $user->id) }}" class="btn btn-primary">Bed Availability</a>
                            <a href="{{ route('emergency', $user->id) }}" class="btn btn-primary">Emergency Services</a>
                            <a href="{{ route('departments', $user->id) }}" class="btn btn-primary">Available Departments</a>
                            <a href="{{ route('laboratories', $user->id) }}" class="btn btn-primary">Laboratories</a>
                            <a href="{{ route('helpdesk', $user->id) }}" class="btn btn-primary">Helpdesks</a>
                            <a href="{{ route('doctors', $user->id) }}" class="btn btn-primary">Doctors</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
        <a href="/" class="btn btn-primary">Back</a>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>