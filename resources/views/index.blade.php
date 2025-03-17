@extends('layouts.app')

@php
    $message = 'Нажми';
@endphp
@section('content')
    <x-button type="error" :message="$message">
        это кнопка
    </x-button>
@endsection
