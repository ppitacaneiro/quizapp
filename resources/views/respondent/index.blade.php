@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Respondents</h3>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Sex</th>
                <th scope="col">Age</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($respondents as $respondent)
                    <tr>
                        <th scope="row">{{ $respondent->id }}</th>
                        <td>{{ $respondent->name }}</td>
                        <td>{{ $respondent->email }}</td>
                        <td>{{ $respondent->sex }}</td>
                        <td>{{ $respondent->age }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
