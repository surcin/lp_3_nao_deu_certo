<?php
    include "topo.php";
?>

<h1> Página Inicial </h1>
<title>Formulário sorveteria</title>
  
    <style>
        .hero {
            background-image: url('img/sorveteria.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 3em;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.5em;
        }

        .products img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .btn-order {
            background-color: #ff4081;
            border: none;
            color: white;
        }

        .botao:hover {
            color: white;
            background-color: #f180a6;
            
        }

        #principal {
            background-image: url(img/sorveteria3.jpg) ;
            color:#ff4081 ;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Sorveteria Projeto</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produtos">Sorvetes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="principal" class="hero text-center">
        <div class="container">
            <h1>Bem-vindo à Sorveteria Projeto</h1>
            <p>O melhor sorvete da cidade!</p>
            <a href="cadastro.html" class="btn btn-order btn-lg mt-4 botao" >Cadastre-se</a>
        </div>
    </section>

    <!-- Section -->
    <section id="about" class="py-5">
        <div class="container text-center">
            <h2>Sobre Nós</h2>
            <p class="lead">Na Sorveteria Delícia, oferecemos uma ampla variedade de sabores de sorvetes artesanais, feitos com os melhores ingredientes. Venha nos visitar e experimente!</p>
        </div>
    </section>

    <!-- Produtos Section -->
    <section id="products" class="py-5 bg-light">
        <div class="container text-center">
            <h2>Nossos Sabores</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <img src="img/sorvete-morango.png" alt="Sorvete de Morango" class="img-fluid">
                    <h4>Sorvete de Morango</h4>
                </div>
                <div class="col-md-4">
                    <img src="img/sorvete-chocolate.png" alt="Sorvete de Chocolate" class="img-fluid">
                    <h4>Sorvete de Chocolate</h4>
                </div>
                <div class="col-md-4">
                    <img src="img/sorvete-napolitano.png" alt="Sorvete Napolitano" class="img-fluid">
                    <h4>Sorvete Napolitano</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Contato Section -->
    <section id="contact" class="py-5">
        <div class="container text-center">
            <h2>Contato</h2>
            <p class="lead">Entre em contato conosco e faça o seu pedido ou venha nos visitar!</p>
            <a href="formulario.html" class="btn btn-order btn-lg mt-4 botao">Peça seu Sorvete</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 Sorveteria Projeto. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php
    include "rodape.php";
?>