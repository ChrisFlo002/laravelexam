<?php
use Illuminate\support\Str;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h4>{{ $user->created_at }}</h4>
    <h4>{{ $user->updated_at }}</h4>
    <h4>{{ $user->name }}</h4>
    <h4>{{ $user->role }}</h4>
    <h4>{{ $user->email }}</h4>
    <h4>{{ $user->age }}</h4>

</body>

</html>
