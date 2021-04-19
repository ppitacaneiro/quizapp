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
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
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
                        <td>
                            <form action="{{ route('respondent.destroy', $respondent->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('respondent.edit', $respondent->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('respondent.show', $respondent->id) }}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
