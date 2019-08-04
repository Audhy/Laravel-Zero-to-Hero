@extends('layouts.master')

@section('content')
  <h1 style="margin-bottom: 40px;">Input Data Hero Marvel</h1>
  <form method="POST" action="" class="form-horizontal">

    {!! csrf_field() !!}
    <div class="form-group {{ $errors->has('Nama_Pokemon') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="Nama_Pokemon">Nama</label>
        <div class="col-md-4">
          <input type="text" class="form-control" id="Nama_Pokemon" name="Nama_Pokemon" value="{{old ('Nama_Pokemon')}}">

          <?php
          echo $errors->first('Nama_Pokemon','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('Tipe') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="Tipe">Tipe</label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="Tipe" name="Tipe" value="{{old ('Tipe')}}">

          <?php
          echo $errors->first('Tipe','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('species') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="species">Species</label>
        <div class="col-md-3">
          <input type="text" class="form-control" id="species" name="species" value="{{old ('species')}}">

          <?php
          echo $errors->first('species','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('height') ? 'has-error' : ''}}">
      <label class="col-md-1 control-label" for="height">Height</label>
        <div class="col-md-2">
          <input type="text" class="form-control" id="height" name="height" value="{{old ('height')}}">

          <?php
          echo $errors->first('height','<span class="help-block">:message</span>');
          ?>

        </div>
      </div>
    <div class="form-group {{ $errors->has('weight') ? 'has-error' : ''}}" >
      <label class="col-md-1 control-label" for="weight">Weight</label>
        <div class="col-md-2">
          <input type="text" class="form-control" id="weight" name="weight" value="{{old ('weight')}}">

          <?php
          echo $errors->first('weight','<span class="help-block">:message</span>');
          ?>

        </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-1 col-md-6">
        <button type="submit" class="btn btn-primary">
          <span class="glyphicon glyphicon-floppy-disk"></span>
          Tambah Baru
        </button>
        <button type="reset" class="btn btn-danger">
          <span class="glyphicon glyphicon-trash"></span>Batal

        </button>
      </div>
    </div>
  </form>
@endsection
