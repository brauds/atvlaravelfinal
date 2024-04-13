<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
</head>
<body>
<header>
    @include('components.header')
</header>    
<div id="about" class="relative bg-white overflow-hidden mt-16">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                <polygon points="50,0 100,0 50,100 0,100"></polygon>
            </svg>

            <div class="pt-1"></div>

            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="sm:text-center lg:text-left">
                    <h2 class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-3xl md:text-4xl">
                        Sobre Nós
                    </h2>

                    <p>
                    Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossas aulas são ministradas por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.
                    Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.
                    </p>
                </div>
            </main>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img  class="h-56 w-full object-cover object-top sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/image-21-1.jpg" alt="Visão aérea da Etec Zona Leste">    
    </div>
</div>
<footer>
    @include('components.footer')
</footer>
</body>
</html>