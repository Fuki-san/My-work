@extends('layouts.main')

@section('title', 'My work')

@section('content')
    <header id="header" class="wrapper">
        <h1><a href="{{ route('work') }}">My Work</a></h1>

        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contract">Contract</a></li>
                <img src="img/icon-instagram.png">
            </ul>
        </nav>
    </header>

    <main>
        <div id="mainvisual">
            <img src="img/mainvisual">
        </div>

        <section id="about" class="wrapper">
        
        </section>

        <section id="works" class="wrapper">
        
        </section>

        <section id="news" class="wrapper">
        
        </section>

        <section id="contact" class="wrapper">
        
        </section>
    </main>

    <footer id="footer">
        <p>&copy; 2023 My Work</p>
    </footer>

@endsection
