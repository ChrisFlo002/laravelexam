<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presidential elector Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <h1>Electors Details</h1>


    <h4>{{ $elector->created_at }}</h4>
    <h4>{{ $elector->updated_at }}</h4>
    <h4>{{ $elector->name }}</h4>
    <h4>{{ $elector->gender }}</h4>
    <h4>{{ $elector->age }}</h4>
    <h4>{{ $elector->party->name_party }}</h4>
    <h4>{{ $elector->state->name }}</h4>

</body>

</html>
