@extends('layouts.layout')

@section('title', 'components')
@section('content')

    @php
        $class = \App\Enums\Alert::RED->value;
    @endphp
    <x-alert :class="$class">
        hello world! this is a normal message.
    </x-alert>

@endsection
