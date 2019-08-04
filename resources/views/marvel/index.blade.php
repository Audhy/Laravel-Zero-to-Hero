@extends('layouts.master')

@section('content')
  <h1>Daftar Nama Pokemon

  {{-- <small>Total :{{$total_pokemon}}</small> --}}
  <a href="" class="btn btn-success pull-right">
    <span class="glyphicon glyphicon-plus"></span> Input Data Baru
  </a>


  </h1>
  <table class ="table table-condensed table-hover" style="margin-top:40px;">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama </th>
          <th>Type</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
@endsection
