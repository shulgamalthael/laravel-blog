@extends('layouts.main')

@section('page.title')
    {{ __('Home') }}
@endsection

@section('content')
    <x-wrapper>
        <x-posts />
    </x-wrapper>
@endsection
