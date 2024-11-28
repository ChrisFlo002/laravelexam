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
    <h1>Dashboard</h1>
    {{-- for electors --}}
    @if (count($electors) > 0)
    <table>
        <tr>
            <th>#</th>
            <th>Name Elector</th>
            <th>Gender</th>
            <th>Party</th>
            <th>State</th>
            <th>Recorded</th>
            <th>Updated</th>
        </tr>
        @foreach($electors as $elector)
        <tr>
            <td>{{ $elector->id }}</td>
            <td>{{ $elector->name_elector }}</td>
            <td>{{ $elector->gender }}</td>
            <td>{{ $elector->party->name }}</td>
            <td>{{ $elector->state->name }}</td>
            <td>{{ $elector->created_at }}</td>
            <td>{{ $elector->updated_at }}</td>
        </tr>
    @endforeach
    </table>
    @endif
     {{-- for governors --}}
     @if (count($governors) > 0)
     <table>
         <tr>
             <th>#</th>
             <th>Name Governor</th>
             <th>Gender</th>
             <th>Party</th>
             <th>State</th>
             <th>Recorded</th>
             <th>Updated</th>
         </tr>
         @foreach($governors as $governor)
         <tr>
             <td>{{ $governor->id }}</td>
             <td>{{ $governor->user->name }}</td>
             <td>{{ $governor->gender }}</td>
             <td>{{ $governor->party->name }}</td>
             <td>{{ $governor->state->name }}</td>
             <td>{{ $governor->created_at }}</td>
             <td>{{ $governor->updated_at }}</td>
         </tr>
     @endforeach
     </table>
     @endif
      {{-- for senators --}}
    @if (count($senators) > 0)
    <table>
        <tr>
            <th>#</th>
            <th>Name Senator</th>
            <th>Gender</th>
            <th>Party</th>
            <th>State</th>
            <th>Recorded</th>
            <th>Updated</th>
        </tr>
        @foreach($senators as $senator)
        <tr>
            <td>{{ $senator->id }}</td>
            <td>{{ $senator->name }}</td>
            <td>{{ $senator->gender }}</td>
            <td>{{ $senator->party->name }}</td>
            <td>{{ $senator->state->name }}</td>
            <td>{{ $senator->created_at }}</td>
            <td>{{ $senator->updated_at }}</td>
        </tr>
    @endforeach
    </table>
    @endif
     {{-- for parliament --}}
     @if (count($parlementaires) > 0)
     <table>
         <tr>
             <th>#</th>
             <th>Name Parliament</th>
             <th>Gender</th>
             <th>Party</th>
             <th>State</th>
             <th>Recorded</th>
             <th>Updated</th>
         </tr>
         @foreach($parlementaires as $parlementaire)
         <tr>
             <td>{{ $parlementaire->id }}</td>
             <td>{{ $parlementaire->name }}</td>
             <td>{{ $parlementaire->gender }}</td>
             <td>{{ $parlementaire->party->name }}</td>
             <td>{{ $parlementaire->state->name }}</td>
             <td>{{ $parlementaire->created_at }}</td>
             <td>{{ $parlementaire->updated_at }}</td>
         </tr>
     @endforeach
     </table>
     @endif
    
</body>
</html>
