@extends('layouts.master')

@section('content')
  <h1 style="margin-bottom: 40px;">Input Data Hero</h1>
  <form method="POST" action="{{route('hero.store')}}" class="form-horizontal">

    {!! csrf_field() !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="name">Name</label>
        <div class="col-md-4">
          <input type="text" class="form-control" id="name" name="name" value="{{old ('name')}}">

          <?php
          echo $errors->first('name','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('power') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="power">Power</label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="power" name="power" value="{{old ('power')}}">

          <?php
          echo $errors->first('power','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('height') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="height">Height</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="height" name="height" value="{{old ('height')}}">

          <?php
          echo $errors->first('height','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group">
      <div class="col-md-offset-1 col-md-6">
        <button type="submit" class="btn btn-primary">
          <span class="fas fa-save"></span>
          Tambah Baru
        </button>
        <button type="reset" class="btn btn-danger">
          <span class="fas fa-trash"></span>Batal

        </button>
      </div>
    </div>
  </form>
@endsection
