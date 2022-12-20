@extends('layouts.app')

@section('main-content')
<h1>Ciao Home</h1>
<a href="{{ route('comics.index') }}">comics/index</a>
<br>
<a href="{{ route('comics.create') }}">comics/create</a>
@endsection
