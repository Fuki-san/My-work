@extends('layouts.main')

@section('title', 'My work')

@section('content')
    <header id="header">
        <h1 class="site-title"><a href="{{ route('work') }}"><img src="img/logo.svg"></a></h1>
        <nav>
            <ul>
                <li><a href="#about">About</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#contract">Contract</a></li>
                {{-- //target="_blank"で新規ウィンドウ --}}
                <li><a href="https://www.instagram.com/" target="_blank"><img class="icon" src="img/icon-instagram.png"></a>
                    {{-- ./img/icon... --}}</li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="mainvisual">
            <picture>
                <source>
            </picture>
            <img src="img/mainvisual-pc.jpg">
        </div>

        <section id="about" class="wrapper">
            <h2 class="section-title">About</h2>

            <ul>
                <li>aaaa</li>
            </ul>

            <p>プロフィールテキストテキスト</p>
        </section>

        <section id="works" class="wrapper">
            <h2 class="section-title">Works</h2>
            <ul>
                <li><img src="img/works1.jpg"></li>
                <li><img src="img/works2.jpg"></li>
                <li><img src="img/works3.jpg"></li>
                <li><img src="img/works4.jpg"></li>
                <li><img src="img/works5.jpg"></li>
                <li><img src="img/works6.jpg"></li>
            </ul>
        </section>

        <section id="news" class="wrapper">
            <h2 class="section-title">News</h2>
            <dl>
                <dt></dt>
                <dd></dd>
                <dt></dt>
                <dd></dd>
                <dt></dt>
                <dd></dd>
                <dt></dt>
                <dd></dd>
                <dt></dt>
                <dd></dd>
            </dl>
        </section>

        <section id="contact" class="wrapper">
            <h2 class="section-title">Contact</h2>

            <dl>
                <dt></dt>
                <dd></dd>
                <dt></dt>
                <dd></dd>
                <dt></dt>
                <dd></dd>
            </dl>
            {{-- <label for="name">Name</label>
            <input type="text" name="name" id="email">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
            <label for="msg">MESSAGE</label>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea> --}}
            <button type="submit" class="button">送信</button>
        </section>
    </main>

    <footer id="footer">
        <p>&copy; 2023 My Work</p>
    </footer>

@endsection
