@extends('layouts.main')

@section('title', 'Governor Electors')

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Electors</h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!isset($infos) || $infos->isEmpty())
                        <tr>
                            <td colspan="3" class="text-center">No electors found</td>
                        </tr>
                    @else
                        @foreach ($infos as $elector)
                            <tr>
                                <td>{{ $elector->name }}</td>
                                <td>{{ $elector->email }}</td>
                                <td>{{ $elector->state->name }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
