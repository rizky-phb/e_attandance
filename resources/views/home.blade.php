@extends('master')

@section('konten')
    <h4>
        Selamat Datang 
        <b>{{ Auth::login()->nip }}</b>, 
        Anda Login sebagai 
        <b>{{ Auth::login()->role }}</b>
    </h4>
@endsection 