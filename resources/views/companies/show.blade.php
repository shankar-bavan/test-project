@extends('layout')
@section('content')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            Name:
            {{ $companies->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            Email:
            {{ $companies->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            Website:
            {{ $companies->website }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            Logo:
            <img src="{{ asset('storage/'.$companies->logo) }}">
        </div>
    </div>
@endsection

