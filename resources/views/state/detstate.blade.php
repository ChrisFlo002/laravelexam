<?php
use Illuminate\support\Str;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State</title>
</head>
<body>


    <h4>{{ $state->created_at}}</h4>
    <h4>{{ $state->updated_at}}</h4>

    <h4>{{ $state->name}}</h4>
    <h4>{{ $state->pib}}</h4>
    <h4>{{ $state->area}}</h4>
    <h4>{{ $state->population}}</h4>


    @if(Str::length($state->flag->path)>0)
    <h4><img src="{{ Storage::url($state->flag->path)}}" alt="" height="50px"></h4>
    @else
    <h4>No image found</h4>
    @endif

</body>
</html>
