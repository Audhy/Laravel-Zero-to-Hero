@extends('layouts.master')

@section('content')
  <h1 style="margin-bottom: 40px;">Edit Data Hero ID #{{ $hero->id}}</h1>
  <form method="POST" action="{{route('hero.update',$hero->id)}}" class="form-horizontal">
    {{method_field('PATCH')}}

    {!! csrf_field() !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="name">Name</label>
        <div class="col-md-4">
          <input type="text" class="form-control" id="name" name="name" value="{{isset ($hero->name) ? $hero->name : ''}}">

          <?php
          echo $errors->first('name','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('power') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="power">Power</label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="power" name="power" value="{{isset ($hero->power) ? $hero->power : ''}}">

          <?php
          echo $errors->first('power','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('height') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="height">Height</label>
        <div class="col-md-3">
          <input type="number" class="form-control" id="height" name="height" value="{{isset ($hero->height) ? $hero->height : ''}}">

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
