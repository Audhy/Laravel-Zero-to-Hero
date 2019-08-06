@extends('layouts.master')

@section('content')
  <h1 style="margin-bottom: 40px;">Edit Data Hero ID #{{ $hero->id}}</h1>
  <form method="POST" action="{{route('hero.update',$hero->id)}}" class="form-horizontal">
    {{method_field('PATCH')}}

    {!! csrf_field() !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
      <label class="col-md-12 control-label" for="name">Name : {{$hero->name}}</label>
      </div>
    <div class="form-group {{ $errors->has('power') ? 'has-error' : ''}}">
      <label class="col-md-12 control-label" for="power">Power : {{$hero->power}}</label>
      </div>
    <div class="form-group {{ $errors->has('height') ? 'has-error' : ''}}">
      <label class="col-md-12 control-label" for="height">Height : {{$hero->height}}</label>
      </div>
  </form>
@endsection
