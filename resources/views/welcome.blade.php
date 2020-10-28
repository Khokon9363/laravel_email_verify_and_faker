<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row m-auto">
            @foreach($users as $user)
            <div class="col-sm-4">
                <div class="card mt-2" style="border-radius: 94px;">
                    <img src="{{ $user->profile_image }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $user->name }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>
