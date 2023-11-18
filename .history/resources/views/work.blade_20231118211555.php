@extends('layouts.main')

@section('title', 'My work')

@section('content')
    <header id="header">
        <h1><a href="{{ route('work') }}">My Work</a></h1>

        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contrace">Contract</a></li>
            </ul>
        </nav>
    </header>
    <main></main>
    <footer></footer>
@endsection
