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
            <h2 class="section-title"></h2>
            
            <ul>
                <li>html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
body {
    line-height:1;
}
article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section { 
    display:block;
}
ul {
    list-style:none;
}
blockquote, q {
    quotes:none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}
a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
    text-decoration: none;
}
ins {
    background-color:#fff;
    color:#000;
    text-decoration:none;
}
mark {
    background-color:#fff;
    color:#000; 
    font-style:italic;
    font-weight:bold;
}
del {
    text-decoration: line-through;
}
abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}
table {
    border-collapse:collapse;
    border-spacing:0;
}
hr {
    display:block;
    height:1px;
    border:0;   
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}
input, select {
    vertical-align:middle;
}</li>
            </ul>

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
            <input type="text" name="name" id="email">
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email">
            <label for="msg">MESSAGE</label>
            <textarea name="msg" id="msg" cols="30" rows="10"></textarea>
            <button type="submit">送信</button>
        </section>
    </main>

    <footer id="footer">
        <p>&copy; 2023 My Work</p>
    </footer>

@endsection
