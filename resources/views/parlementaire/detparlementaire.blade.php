<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parliament Details</title>
    <style>
          body {
            font-family: Arial, sans-serif;
        }
        h1{
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
    <h1>Parliament Details</h1>
    
    <h4>{{ $parle->created_at }}</h4>
    <h4>{{ $parle->updated_at }}</h4>
    <h4>{{ $parle->name }}</h4>
    <h4>{{ $parle->gender }}</h4>
    <h4>{{ $parle->age }}</h4>
    <h4>{{ $parle->party->name_party }}</h4>
    <h4>{{ $parle->state->name }}</h4>
</body>
</html>
