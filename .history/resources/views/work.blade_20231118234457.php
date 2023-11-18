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
                <li><a href="#">Ccontractontract</a></li>
                {{-- //target="_blank"で新規ウィンドウ --}}
                <li><a href="https://www.instagram.com/" target="_blank"><img class="icon" src="img/icon-instagram.png"></a>
                    {{-- ./img/icon... --}}</li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="mainvisual">
            <picture>
                <source media="(max-width: 600px)" srcset="img/mainvisual-sp.jpg">
                <img src="img/mainvisual-pc.jpg">
            </picture>
        </div>

        <section id="about" class="wrapper">
            <h2 class="sec-title">About</h2>
            <ul>
                <li>舟塚風樹</li>
                <li>岩手県八幡平</li>
                <li>000-0000-0000</li>
                <li>url: www.xxxx.jp</li>
                <li>mail: xxx@xxxx.jp</li>
            </ul>
            <p>プロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキスト</p>
        </section>

        <section id="works" class="wrapper">
            <h2 class="sec-title">Works</h2>
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
            <h2 class="sec-title">News</h2>
            <dl>
                <dt>2020.04.01</dt>
                <dd>xxxx大学入学</dd>
                <dt>2022.03.31</dt>
                <dd>xxxx大学休学</dd>
                <dt>2022.04.25</dt>
                <dd>xxxx大学留学</dd>
                <dt>2023.04.01</dt>
                <dd>xxxx大学復学</dd>
                <dt>2025.03.31</dt>
                <dd>xxxx大学卒業</dd>
            </dl>
        </section>

        <section id="contact" class="wrapper">
            <h2 class="sec-title">Contact</h2>
            <form action="#" method="post">
                <dl>
                    <dt><label for="name">Name</label></dt>
                    <dd><input type="text" name="name" id="name"></dd>
                    <dt><label for="email">E-mail</label></dt>
                    <dd><input type="text" name="email" id="email"></dd>
                    <dt><label for="msg">MESSAGE</label></dt>
                    <dd>
                        <textarea name="msg" id="msg"></textarea>
                    </dd>
                </dl>
                <div class="button"><input type="submit" value="送信"></div>
            </form>
        </section>
    </main>

    <footer id="footer">
        <p>&copy; 2023 My Work</p>
    </footer>

@endsection
