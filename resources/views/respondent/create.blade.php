@extends('layouts.app')

@section('content')
<div class="container">
    <h3>New Respondent</h3>
    <hr>
    <form method="POST" action="{{ route('respondent.store') }}">
        @csrf
        <div class="form-group">
          <label for="inputName" class="form-label">Name</label>
          <input type="text" class="form-control" id="inputName" name="inputName">
        </div>
        <div class="form-group">
          <label for="inputCountry" class="form-label">Country</label>
          <select class="form-control" id="inputCountry" name="inputCountry" id="inputCountry">
            @foreach ($countries as $country)
              <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail">
        </div>
        <div class="form-group">
          <label for="inputAge" class="form-label">Age</label>
          <input type="number" class="form-control" id="inputAge" name="inputAge">
        </div>
        <div class="form-group">
          <label for="inputSex" class="form-label">Genre</label>
          <select class="form-control" id="inputSex" name="inputSex">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        @if ($errors->any())
          <div class="alert alert-danger mt-5">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
          </div>
        @endif
      </form>
</div>
@endsection
