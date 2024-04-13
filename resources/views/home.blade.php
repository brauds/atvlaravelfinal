<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Importar a fonte Kanit do Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .border-red-500 {
            border-bottom: 4px solid red; /* Largura inicial da borda */
            transition: border-bottom-width 0.5s ease; /* Transição de animação */
        }
    </style>
</head>
<body>
<header>
@include('components.header')
</header>
<section>
<div class="relative" style="font-family: 'Kanit', sans-serif;">
    <img class="w-full  object-cover shadow" src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/image-21-1.jpg" alt="Visão aérea da Etec Zona Leste">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute bottom-0 left-0 right-0 py-16 border-b-4 border-red-500 border-red-500-hover transition-all duration-500">
        <div class="ml-10 text-left text-white">
            <h2 class="text-6xl">Etec Zona Leste</h2>
        </div>
    </div>
</div>
</section>
<br>
<section class="wp-block-banner-secondary bg-white-light dark:bg-white-dark py-24" id="">
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <figure class="overflow-hidden rounded-xl max-w-[467px] mx-auto lg:ml-0">
                <img decoding="async" class="w-full h-full object-cover mx-auto" src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/12/2019-05-29.jpg" alt="">
            </figure>

            <div class="flex flex-col justify-center">
                <div class="banner-secondary__wysiwyg">
                    <h2><strong>O que a ETEC pode fazer pelo seu FUTURO ainda HOJE?</strong></h2>
                    <p>Sabemos que às vezes pensar no futuro pode parecer assustador. Traçamos carreiras e planos profissionais a todo momento em nossos pensamentos, numa busca constante pelo caminho que nos trará o melhor. Mas saiba que a ETEC Zona Leste conhece os seus anseios e, está aqui, disposta a te apresentar um novo caminho! O futuro não precisa ser assustador. Suas habilidades técnicas e profissionais podem ser desenvolvidas enquanto você aprende com a gente. Em nossa instituição, nós valorizamos os pequenos passos. Dê o seu primeiro passo hoje em direção ao futuro. Faça parte da ETEC!</p>
                </div>

                <div>
                    <a class="btn btn--primary btn--md uppercase" href="https://www.eteczonaleste.com.br/vestibulinho/" target="_blank" rel="noopener noreferrer">
                        Saiba mais sobre o Vestibulinho
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
@include('components.footer')
</footer>
</body>
</html>
