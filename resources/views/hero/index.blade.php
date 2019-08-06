@extends('layouts.master')

@section('content')
  <h1>Daftar Nama Hero

  <small>Total :{{$total_hero}}</small>
  <a href="{{route('hero.create')}}" class="btn btn-success pull-right">
    <span class="fas fa-plus"></span> Input Data Baru
  </a>


  </h1>
  <table class ="table table-condensed table-hover" style="margin-top:40px;">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama </th>
          <th>Power</th>
          <th>Height</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php $i =1; ?>
        @foreach ($heroes as $hero)
          <tr>
            <td>
                <?php
                echo $i++;
                    // echo ($i++ +($heroes->currentPage()*$heroes->perPage())-$heroes->perPage());
                ?>
            </td>
            <td>
              <a href="{{route('hero.show',$hero->id)}}">
                {{$hero->name}}
              </a>
            </td>
            <td>{{$hero->power}}</td>
            <td>{{$hero->height}}</td>
            <td>
            <a href="{{route('hero.edit',$hero->id) }}" class="btn btn-primary btn-sm" role="button" aria-pressed="true">
                <span class="fas fa-pencil-alt"></span>
                Edit
            </a>
          <form method="POST" action="{{route('hero.destroy',$hero->id)}}" style="display: inline;">
            {{method_field('DELETE')}}
            {!! csrf_field() !!}
              <button type="submit" class="btn btn-danger btn-sm delete-confirm">
                <span class="fas fa-trash"></span>
                Hapus
              </button>
          </form>

            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{-- <div class="pull-right">{!! $heroes->links() !!}</div> --}}
@endsection
