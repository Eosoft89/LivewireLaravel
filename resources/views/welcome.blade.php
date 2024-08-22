@extends('layouts.app')

@section('title', 'Livewire example')

@section('content')
    {{-- Una forma de llamar a un componente Livewire @livewire('counter') --}}
    <livewire:counter />  {{-- otra forma de llamarlo --}}
    <br/>
    <livewire:notes />

@endsection