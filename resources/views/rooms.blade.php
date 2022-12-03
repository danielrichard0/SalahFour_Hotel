@extends('layouts/main')

@section('container')
  <h1 mb-5>Halaman Rooms</h1>
  @foreach ($rooms as $i)
  <div>
    <img src="{{asset($i->foto_kamar)}}" width="250" alt="LOGO"> ><br><br>
    <h1>{{ $i->jenis_kamar }}</h1>
    <h3> Max guest : {{ $i->jumlah_guest }}</h3>
  </div>
    
    
  @endforeach
@endsection

