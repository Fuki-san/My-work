@extends('layouts.main')

@section('title', 'My work')

@section('content')
    

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
                <li><img src="img/works1.jpg" alt="テキストテキストテキスト"></li>
                <li><img src="img/works2.jpg" alt="テキストテキストテキスト"></li>
                <li><img src="img/works3.jpg" alt="テキストテキストテキスト"></li>
                <li><img src="img/works4.jpg" alt="テキストテキストテキスト"></li>
                <li><img src="img/works5.jpg" alt="テキストテキストテキスト"></li>
                <li><img src="img/works6.jpg" alt="テキストテキストテキスト"></li>
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

        <section id="contact" class="wrapper">
            <h2 class="sec-title">Contact</h2>
            <form action="#" method="post">
                <dl>
                    <dt><label for="name">NAME</label></dt>
                    <dd><input type="text" id="name" name="your-name"></dd>
                    <dt><label for="email">E-mail</label></dt>
                    <dd><input type="email" id="email" name="your-email"></dd>
                    <dt><label for="message">MESSAGE</label></dt>
                    <dd>
                        <textarea id="message" name="your-message"></textarea>
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
