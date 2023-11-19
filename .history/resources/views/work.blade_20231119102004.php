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
                <li><a href="#contact">Contact</a></li>
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
            <p>プロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキストプロフィールテキストテキスト
            </p>
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
                <dt>2020.XX.XX</dt>
                <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。</dd>
                <dt>2020.XX.XX</dt>
                <dd>ＸＸ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。</dd>
                <dt>2019.XX.XX</dt>
                <dd>【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
                <dt>2019.XX.XX</dt>
                <dd>デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。</dd>
                <dt>2019.XX.XX</dt>
                <dd>【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト</dd>
            </dl>
        </section>

        
    </main>

    <footer id="footer">
        <p>&copy; 2023 My Work</p>
    </footer>

@endsection
