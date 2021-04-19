@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Info Respondent</h3>
    <hr>
    <div class="row">
      <div class="col">
        <h5>Name</h4>
      </div>
      <div class="col">{{ $respondent->name }}</div>
    </div>
    <div class="row">
      <div class="col">
        <h5>Email</h4>
      </div>
      <div class="col">{{ $respondent->email }}</div>
    </div>
    <div class="row">
      <div class="col">
        <h5>Country</h4>
      </div>
      <div class="col">{{ $respondent->country }}</div>
    </div>
    <div class="row">
      <div class="col">
        <h5>Age</h4>
      </div>
      <div class="col">{{ $respondent->country }}</div>
    </div>
    <div class="row">
      <div class="col">
        <h5>Sex</h4>
      </div>
      <div class="col">{{ $respondent->sex }}</div>
    </div>
</div>
@endsection
