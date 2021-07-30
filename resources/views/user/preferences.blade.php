@extends('layouts.app')
   
@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row">
        <h1>Preferences</h1>
    </div>
    <div class="row">
        <h2>Messurements</h2>
    </div>
    <div class="row">
        <form class="form-horizontal col-md-10" method="POST" action="{{ route('user.preferences.store') }}">
            @csrf
            <div class="form-group row">
                <label for="ph" class="col-sm-2 col-form-label">PH</label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" id="ph" name="ph" @if (isset($preferences->ph)) value="{{ $preferences->ph }}" @endif>
                </div>
            </div>
            <div class="form-group row">
                <label for="high_range_ph" class="col-sm-2 col-form-label">Hight Range PH</label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" id="high_range_ph" name="high_range_ph" @if (isset($preferences->high_range_ph)) value="{{ $preferences->high_range_ph }}" @endif>
                </div>
            </div>
            <div class="form-group row">
                <label for="ammonia" class="col-sm-2 col-form-label">Ammonia</label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" id="ammonia" name="ammonia" @if (isset($preferences->ammonia)) value="{{ $preferences->ammonia }}" @endif>
                </div>
            </div>
            <div class="form-group row">
                <label for="nitrite" class="col-sm-2 col-form-label">Nitrite</label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" id="nitrite" name="nitrite" @if (isset($preferences->nitrite)) value="{{ $preferences->nitrite }}" @endif>
                </div>
            </div>
            <div class="form-group row">
                <label for="nitrate" class="col-sm-2 col-form-label">Nitrate</label>
                <div class="col-sm-10">
                    <input type="text" class="col-sm-2 form-control" id="nitrate" name="nitrate" @if (isset($preferences->nitrate)) value="{{ $preferences->nitrate }}" @endif>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div><br>
    <div class="row">
        <h2>Volume</h2>
    </div>
</div>
@endsection