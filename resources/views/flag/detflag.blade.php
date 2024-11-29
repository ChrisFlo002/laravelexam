<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flag Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Page Header -->
        <h1 class="text-center text-primary mb-4">Flag Home</h1>

        <!-- Flags Table -->
        @if (count($flags) > 0)
            <div class="table-responsive">
                <table class="table table-bordered table-hover text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($flags as $flag)
                            <tr>
                                <td>{{ $flag->id }}</td>
                                <td>
                                    <img src="{{ Storage::url($flag->image) }}" alt="Flag Image" class="img-thumbnail" style="width: 80px; height: 50px;">
                                </td>
                                <td>
                                    <a href="/edflag/{{$flag->id}}" class="btn btn-warning btn-sm text-white">Edit</a>
                                    <a href="/delflag/{{$flag->id}}" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete this flag?')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <!-- No Data Message -->
            <div class="alert alert-warning text-center">
                No flags found.
            </div>
        @endif
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
