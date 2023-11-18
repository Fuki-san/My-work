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
            <img src="img/mainvisual-pc.jpg">
        </div>

        <section id="about" class="wrapper">
            Xxxxx Ashley

            2th Floor xxxx Building
            tel: 000-000
            url: www.xxx.jp
            mail: xxx@gmail.com

            <p>プロフィールテキストテキスト</p>
        </section>

        <section id="works" class="wrapper">
            <img src="img/works1.jpg">
            <img src="img/works2.jpg">
            <img src="img/works3.jpg">
            <img src="img/works4.jpg">
            <img src="img/works5.jpg">
            <img src="img/works6.jpg">
        </section>

        <section id="news" class="wrapper">
            <p>2020.xx.xx      デザイン雑誌...</p>
            <p>2020.xx.xx      デザイン雑誌...</p>
            <p>2020.xx.xx      デザイン雑誌...</p>
            <p>2020.xx.xx      デザイン雑誌...</p>
            <p>2020.xx.xx      デザイン雑誌...</p>
        </section>

        <section id="contact" class="wrapper">
            <label for="name">Name</label>
            <input type="text" name="">
        </section>
    </main>

    <footer id="footer">
        <p>&copy; 2023 My Work</p>
    </footer>

@endsection
