<!DOCTYPE HTML>
<html>
<head>
    <title>Blog da Ana</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
</head>
<body class="homepage is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <section id="header">

        <!-- Logo -->
        <h1><a href="index.html">BLOG DA ANA</a></h1>

        <!-- NAVEGADOR DE TEMPLATE -->
        <nav id="nav">
            <ul>
                <li class="current"><a href="{{ url("/") }}">Principal</a></li>
                <li>
                    <a href="#">Categorias</a>
                    <ul>
                        @foreach ($categorias as $value)
                            <li><a href="{{ url('/PostagemByCategoriaId/' . $value->id) }}">{{ $value->nome }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li>
                    <a href="#">Autores</a>
                    <ul>
                        @foreach ($autores as $value)
                            <li><a href="{{ url('/PostagemByAutorId/' . $value->id) }}">{{ $value->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                <li><a href="no-sidebar.html">No Sidebar</a></li>
            </ul>
        </nav>

        <div class="container">
            @yield('content')
        </div>

        <!-- RODAPÉ DE TEMPLATE -->
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-8 col-12-medium">
                        <section>
                            <header>
                                <h2>Palavras de Clarice</h2>
                            </header>
                            <ul class="dates">
                                <li>
                                    <span class="date">Jan <strong>27</strong></span>
                                    <h3><a href="#">Liberdade</a></h3>
                                    <p>Liberdade é pouco. O que eu desejo ainda não tem nome.</p>
                                </li>
                                <li>
                                    <span class="date">Jan <strong>23</strong></span>
                                    <h3><a href="#">Simplicidade</a></h3>
                                    <p>Que ninguém se engane: só se consegue a simplicidade através de muito trabalho.</p>
                                </li>
                                <li>
                                    <span class="date">Jan <strong>15</strong></span>
                                    <h3><a href="#">Descoberta</a></h3>
                                    <p>Sou como você me vê. Posso ser leve como uma brisa ou forte como uma ventania.</p>
                                </li>
                                <li>
                                    <span class="date">Jan <strong>12</strong></span>
                                    <h3><a href="#">Coragem</a></h3>
                                    <p>Renda-se, como eu me rendi. Mergulhe no que você não conhece como eu mergulhei.</p>
                                </li>
                                <li>
                                    <span class="date">Jan <strong>10</strong></span>
                                    <h3><a href="#">Palavras</a></h3>
                                    <p>Eu escrevo sem esperança de que o que eu escrevo altere qualquer coisa.</p>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-4 col-12-medium">
                        <section>
                            <header>
                                <h2>Clarice Lispector</h2>
                            </header>
                            <a href="#" class="image featured"><img src="{{ url('images/pic10.jpg') }}" alt="" /></a>
                            <p>
                                Escrevo como quem aprende. Não sei fazer outra coisa a não ser tocar o mistério com palavras.
                                <br><br>
                                “Até cortar os próprios defeitos pode ser perigoso. Nunca se sabe qual é o defeito que sustenta nosso edifício inteiro.”
                            </p>
                            <footer>
                                <ul class="actions">
                                    <li><a href="#" class="button">Ler mais</a></li>
                                </ul>
                            </footer>
                        </section>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <section>
                            <header>
                                <h2>Fragmentos</h2>
                            </header>
                            <ul class="divided">
                                <li><a href="#">"Ela acreditava em anjos e, porque acreditava, eles existiam."</a></li>
                                <li><a href="#">"Sou composta por urgências."</a></li>
                                <li><a href="#">"Não se preocupe em entender. Viver ultrapassa qualquer entendimento."</a></li>
                                <li><a href="#">"Tenho várias caras. Uma é quase bonita, outra é quase feia."</a></li>
                                <li><a href="#">"O silêncio é a única resposta que devemos dar aos tolos."</a></li>
                                <li><a href="#">"O que verdadeiramente somos é aquilo que o impossível cria em nós."</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-4 col-6-medium col-12-small">
                        <section>
                            <header>
                                <h2>Mais Clarice</h2>
                            </header>
                            <ul class="divided">
                                <li><a href="#">"Escrevo porque encontro nisso um modo de viver."</a></li>
                                <li><a href="#">"Enquanto eu tiver perguntas e não houver respostas, continuarei a escrever."</a></li>
                                <li><a href="#">"Passei a vida tentando corrigir os erros que cometi na minha ânsia de acertar."</a></li>
                                <li><a href="#">"Tudo no mundo começou com um sim."</a></li>
                                <li><a href="#">"Não tenho tempo pra mais nada, ser feliz me consome muito."</a></li>
                                <li><a href="#">"Sou uma pergunta sem resposta."</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-4 col-12-medium">
                        <section>
                            <header>
                                <h2>Redes sociais</h2>
                            </header>
                            <ul class="social">
                                <li><a class="icon brands fa-facebook-f" href="#"><span class="label">Facebook</span></a></li>
                                <li><a class="icon brands fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                                <li><a class="icon brands fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
                                <li><a class="icon brands fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
                                <li><a class="icon brands fa-linkedin-in" href="#"><span class="label">LinkedIn</span></a></li>
                            </ul>
                            <ul class="contact">
                                <li>
                                    <h3>Endereço</h3>
                                    <p>
                                        Rua da Inspiração, 123<br />
                                        Algum Lugar – BR
                                    </p>
                                </li>
                                <li>
                                    <h3>Email</h3>
                                    <p><a href="#">ana@blog.com</a></p>
                                </li>
                                <li>
                                    <h3>Telefone</h3>
                                    <p>(00) 0000-0000</p>
                                </li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-12">
                        <div id="copyright">
                            <ul class="links">
                                <li>&copy; Blog da Ana. Todos os direitos reservados.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.dropotron.min.js') }}"></script>
<script src="{{ asset('assets/js/browser.min.js') }}"></script>
<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
<script src="{{ asset('assets/js/util.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
