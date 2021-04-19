@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Edit Respondent</h3>
    <hr>
    <form method="POST" action="{{ route('respondent.update',$respondent->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="inputName" class="form-label">Name</label>
        <input type="text" class="form-control" id="inputName" name="inputName" value="{{ $respondent->name }}">
        </div>
        <div class="form-group">
          <label for="inputCountry" class="form-label">Country</label>
          <select class="form-control" id="inputCountry" name="inputCountry" id="inputCountry">
            @foreach ($countries as $country)
              @if ($country->nicename == $respondent->country)
              <option value="{{ $country->nicename }}" selected>{{ $country->nicename }}</option>
              @else
                <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
              @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="inputEmail" name="inputEmail" value="{{ $respondent->email }}">
        </div>
        <div class="form-group">
          <label for="inputAge" class="form-label">Age</label>
          <input type="number" class="form-control" id="inputAge" name="inputAge" value="{{ $respondent->age }}">
        </div>
        <div class="form-group">
          <label for="inputSex" class="form-label">Genre</label>
          <select class="form-control" id="inputSex" name="inputSex">
          <option value="male" @if ($respondent->sex == 'male') {{ 'selected' }} @endif>Male</option>
            <option value="female" @if ($respondent->sex == 'female') {{ 'selected' }} @endif>Female</option>
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
