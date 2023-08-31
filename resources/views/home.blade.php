@if(Auth::user()->rol=="Cliente")
    @php($vista="cliente")  
@elseif(Auth::user()->rol=="Administrador")
    @php($vista="administrador")  
        @elseif(Auth::user()->rol=="Vendedor")
            @php($vista="vendedor")  
@endif

@extends('layouts.' . $vista)

@section('content')

@endsection
