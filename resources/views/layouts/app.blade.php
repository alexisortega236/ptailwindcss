<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Noto+Sans&family=PT+Sans&family=Roboto&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    @vite('public/asset/css/app.css')
    <script src=" {{ asset('/js/app.js') }} " defer></script>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (
            localStorage.getItem('color-theme') === 'dark' ||
            (!('color-theme' in localStorage) &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!----Data AOS --->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Portafolio</title>
</head>

<body class="bg-sky-50 text-stone-900 dark:bg-primary dark:text-cyan-50 font-roboto">
    <header>
        <!--  INICIO MENU  -->
        <nav class="flex justify-between py-10 m-auto px-10 text-lg font-medium tracking-widest md:items-center">
            <a href="" class="w-full">
                <h1 class="text-4xl w-full">Alexis Ortega</h1>
            </a>
            <div data-aos="fade-in" data-aos-duration="3000" id="menu"
                class="bg-white dark:bg-slate-800 p-7 h-[380px] w-[320px] md:flex flex-col items-start justify-around rounded-lg text-dark dark:text-white md:flex-row md:w-full md:py-0 md:h-[50px] md:bg-inherit md:dark:bg-primary hidden">
                <ul class="flex h-5/6 flex-col justify-around md:flex-row md:justify-center w-full">
                    <li class="md:px-5 hover:text-sky-600"><a href="">Quién Soy</a></li>
                    <li class="md:px-5 hover:text-sky-600">
                        <a href="">Experiencia</a>
                    </li>
                    <li class="md:px-5 hover:text-sky-600"><a href="">Proyectos</a></li>
                    <li class="md:px-5 hover:text-sky-600">
                        <a href="#contacto">Contáctame</a>
                    </li>
                </ul>

                <!-- BOTON MODO OSCURO -->
                <button id="darkButton">
                    <i class="bi bi-moon-stars-fill text-sky-600 text-2xl"></i>
                </button>
                <!-- BOTON MENU HAMBURGUESA -->
            </div>
            <button id="menu-button" class="absolute top-10 right-12 md:hidden">
                <span class="br-1 block bg-black dark:bg-white my-2 rounded-md h-[3px] w-[28px]"></span>
                <span class="br-2 block bg-black dark:bg-white my-2 rounded-md h-[3px] w-[28px]"></span>
                <span class="br-3 block bg-black dark:bg-white my-2 rounded-md h-[3px] w-[28px]"></span>
            </button>
        </nav>
        <!-- FIN DEL MENU  -->
    </header>
    <main>
        <!-- #1 SECCION HERO  -->
        <section class="my-0 flex flex-col lg:flex-row lg:h-[850px]">
            <div data-aos="fade-in" data-aos-duration="3000" class="p-10 lg:w-[80%] lg:h-[500px] lg:self-center">
                <h1 class="text-sky-600 dark:text-sky-300 text-2xl font-bold tracking-widest leading-10">
                    Hola, soy
                </h1>
                <p class="py-2 text-3xl font-bold text-slate-600 dark:text-slate-300">
                    Alexis Ortega
                </p>
                <p class="text-3xl font-bold text-slate-500 dark:text-slate-600">
                    Desarrollador de Aplicaciones WEB.
                </p>
                <p class="mt-5 text-lg">
                    Soy Lic. En Informática que se especializa en diseñar y
                    desarrollar aplicaciones WEB excepcionales.
                </p>
                <!-- REDES SOCIALES -->
                <div class="py-6">
                    <a href="" class="pr-2 text-2xl hover:text-sky-600"><i class="bi bi-linkedin px-2"></i></a>
                    <a href="" class="pr-2 text-2xl hover:text-sky-600"><i class="bi bi-github px-2"></i></a>
                </div>
                <div>
                    <button
                        class="border-2 rounded border-sky-500 p-4 w-[250px] text-lg tracking-widest hover:bg-sky-500 hover:dark:text-slate-900 ease-out duration-300">
                        Contrátame
                    </button>
                </div>
            </div>
            <!-- Contenedor para la Imagen -->
            <div class="my-10 w-full">
                <div
                    class="w-[150px] h-[170px] m-auto ] bg-cover rounded-lg lg:w-[100%] lg:h-[100%] lg:bg-center lg:bg-no-repeat lg:bg-[length:450px_576px] lg: ml-56 ">
                    <img src=" {{ asset('assets/img/yoimg.png') }} " alt="">
                </div>
            </div>
        </section>

        <!-- #2 SECCION EXPERIENCIA LABORAL -->
        <h2 data-aos="fade-in" data-aos-duration="3000"
            class="text-3xl text-slate-700 dark:text-white font-bold tracking-widest w-[85%] m-auto text-center pt-8">
            Experiencia Laboral
        </h2>
        <section data-aos="fade-in" data-aos-duration="3000"
            class="my-12 flex flex-col w-[84%] m-auto lg:flex-row lg:w-[87%] lg:my-28" id="jobSection">
            <div class="flex justify-between lg:flex-col lg:w-[20%]">
                <button type="button" id="link1" data-id="job1"
                    class="border-b-2 hover:dark:bg-slate-700 w-full px-4 py-1 hover:bg-white focus:bg-white focus:border-sky-500 focus:dark:bg-slate-700 lg:border-l-2 lg:border-b-0 lg:h-full lg:text-left border-sky-500 bg-white dark:bg-slate-700">
                    F. Cuevas
                </button>
                <button type="button" data-id="job2"
                    class="border-b-2 hover:dark:bg-slate-700 w-full px-4 py-1 hover:bg-white focus:bg-white focus:border-sky-500 focus:dark:bg-slate-700 lg:border-l-2 lg:border-b-0 lg:h-full lg:text-left">
                    LegalRent.
                </button>
                <button type="button" data-id="job3"
                    class="border-b-2 hover:dark:bg-slate-700 w-full px-4 py-1 hover:bg-white focus:bg-white focus:border-sky-500 focus:dark:bg-slate-700 lg:border-l-2 lg:border-b-0 lg:h-full lg:text-left">
                    Universidad Autónoma del Estado de Morelos
                </button>
                <button type="button" data-id="job4"
                    class="border-b-2 hover:dark:bg-slate-700 w-full px-4 py-1 hover:bg-white focus:bg-white focus:border-sky-500 focus:dark:bg-slate-700 lg:border-l-2 lg:border-b-0 lg:h-full lg:text-left">
                    CreativeTech
                </button>
            </div>

            <!-- CONTAINER JOB DESCRIPTION -->
            <div class="my-5 lg:px-10 lg:my-0 lg:max-w-[800px]">
                <!-- JOB #1 DESCRIPTION -->

                <article id="job1">
                    <h3>
                        Desarrollador web.
                        <span class="text-sky-500 font-bold text-lg"></span>
                    </h3>
                    <h4 class="text-sm pb-5">Julio 2023 - Presente</h4>
                    <ul>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                He desarrollado toda la estructura web del sitio, con la finalidad de mantener visble la
                                marca en la web.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Trabajé con algunas tecnologías modernas, como, PHP(Laravel), Tailwindcss, Js
                                HTML, CSS, Docker y VSCode.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                He brindado apoyo técnico, para la mejora de procesos internos así como la
                                automatización de estos
                            </p>
                        </li>
                    </ul>
                </article>
                <!-- SECCIONES OCULTAS POR DEFECTO -->
                <!-- JOB #2 DESCRIPTION -->

                <article id="job2" class="hidden">
                    <h3>
                        Programador Web.
                        <span class="text-sky-500 font-bold text-lg"></span>
                    </h3>
                    <h4 class="text-sm pb-5">Junio 2023 - Presente</h4>
                    <ul>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                He desarrollado toda la estructura web del sitio, con la finalidad de mantener visble la
                                marca en la web.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Trabajé con algunas tecnologías modernas, como, PHP(Laravel), Tailwindcss, Js
                                HTML, CSS, Docker y VSCode.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">

                            </p>
                        </li>
                    </ul>
                </article>
                <!-- JOB #3 DESCRIPTION -->
                <article id="job3" class="hidden">
                    <h3>
                        Desarrollador WEB
                        <span class="text-sky-500 font-bold text-lg">@UAEM</span>
                    </h3>
                    <h4 class="text-sm pb-5">Agosto 2022 - Junio 2023</h4>
                    <ul>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Trabajé en el desarrollo de código PHP en conjunto dle framework laravel para los
                                sistemas que actualmente se desarrollan en la dirección de Sistemas Académicos.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Se logró integrar la documentación necesaria en el desarrollo de sistema de comisiones
                                inter escolares y el sistema de códigos éticos y de conducta universitarios.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Estuve en contacto con muchas tecnologías para el avance de los proyectos. Ejemplo de
                                algunas, son: Docker, Laravel, Git, Bootstrap, VSCode, FigmaUI, Laragon, HTML, CSS, Js.
                            </p>
                        </li>
                    </ul>
                </article>
                <!-- JOB #4 DESCRIPTION -->
                <article id="job4" class="hidden">
                    <h3>
                        Programador Web.
                        <span class="text-sky-500 font-bold text-lg">@UAEM</span>
                    </h3>
                    <h4 class="text-sm pb-5">Enero 2017 - Junio 2017</h4>
                    <ul>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Consectetur, deserunt. Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Consectetur, deserunt.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Consectetur, deserunt. Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Consectetur, deserunt.
                            </p>
                        </li>
                        <li class="flex items-center py-2">
                            <span class="pr-2 text-sky-500 font-black">&#9655;</span>
                            <p class="text-stone-900 dark:text-cyan-50 font-normal px-5">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Consectetur, deserunt. Lorem ipsum, dolor sit amet consectetur
                                adipisicing elit. Consectetur, deserunt.
                            </p>
                        </li>
                    </ul>
                </article>
            </div>
        </section>

        <!-- #3 SECCION PROYECTOS -->

        <h3 data-aos="fade-in" data-aos-duration="3000"
            class="text-3xl text-slate-700 dark:text-white my-5 px-12 font-bold tracking-widest md:text-center">
            Mis Ultimos Proyectos
        </h3>

        <section data-aos="fade-in" data-aos-duration="3000"
            class="my-12 flex flex-col items-center justify-center w-[90%] m-auto lg:flex-row">
            <!-- PRIMER PROYECTO  -->
            <div class="border-1 rounded-lg bg-white dark:bg-slate-800 m-5">
                <div class="m-2">
                    <img src=" " alt="" class="opacity-80 hover:opacity-100" />
                    <h4 class="font-bold my-2"> --- </h4>
                    <article class="flex justify-between">
                        <div class="flex flex-nowrap items-center">
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">HTML</span>
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">CSS</span>
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">JS</span>
                        </div>
                        <div class="text-xl text-slate-600 dark:text-slate-200 pr-2 flex flex-nowrap">
                            <a href=""><i class="bi bi-github px-2"></i></a>
                            <a href=""><i class="bi bi-eye px-2"></i></a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- SEGUNDO PROYECTO  -->
            <div class="border-1 rounded-lg bg-white dark:bg-slate-800 m-5">
                <div class="m-2">
                    <img src="" alt="" class="opacity-80 hover:opacity-100" />
                    <h4 class="font-bold my-2"> --- </h4>
                    <article class="flex justify-between">
                        <div class="flex flex-nowrap items-center">
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">SASS</span>
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">Bootstrap</span>
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">JS</span>
                        </div>
                        <div class="text-xl text-slate-600 dark:text-slate-200 pr-2 flex flex-nowrap">
                            <a href=""><i class="bi bi-github px-2"></i></a>
                            <a href=""><i class="bi bi-eye px-2"></i></a>
                        </div>
                    </article>
                </div>
            </div>
            <!-- TERCER PROYECTO  -->
            <div class="border-1 rounded-lg bg-white dark:bg-slate-800 m-5">
                <div class="m-2">
                    <img src=" " alt="" class="opacity-80 hover:opacity-100" />
                    <h4 class="font-bold my-2"> --- </h4>
                    <article class="flex justify-between">
                        <div class="flex flex-nowrap items-center">
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">HTML</span>
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">SASS</span>
                            <span class="bg-slate-200 rounded-lg px-2 mr-2 text-slate-700">JS</span>
                        </div>
                        <div class="text-xl text-slate-600 dark:text-slate-200 pr-2 flex flex-nowrap">
                            <a href=""><i class="bi bi-github px-2"></i></a>
                            <a href=""><i class="bi bi-eye px-2"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- #4 SECCION CONTACTOS  -->

        <h3 data-aos="fade-in" data-aos-duration="3000"
            class="text-3xl text-slate-700 dark:text-white mt-12 mb-10 px-10 font-bold tracking-widest text-center">
            Contáctame
        </h3>

        <section data-aos="fade-in" data-aos-duration="3000" class="flex flex-col w-[90%] m-auto" id="contacto">
            <form action="" class="w-[90%] md:max-w-[600px] m-auto">
                <div>
                    <input placeholder="info@ejemplo.com" type="email" name="email" id="email"
                        class="p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-400" />
                </div>

                <div class="py-3">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre"
                        class="p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-400" />
                </div>

                <div>
                    <textarea name="msj" id="msj" rows="5" placeholder="Mensaje"
                        class="p-3 w-full rounded-lg focus:outline-none focus:ring focus:ring-blue-400"></textarea>
                </div>
                <div class="my-3">
                    <button class="bg-sky-600 text-white p-3 w-full rounded-lg text-xl tracking-widest">
                        Enviar Mensaje
                    </button>
                </div>
            </form>
            <!-- #5 FOOTER  -->
            <footer
                class=" bg-sky-100 text-stone-800 dark:bg-slate-800 dark:text-cyan-50 rounded-2xl w-full h-[100px] text-center mt-12 mb-5 flex flex-col">
                <p class="hover:text-sky-500 mt-4 ">
                    Diseñado en FigmaUI, desarrollado con Html, css, js, tailwindcss y laravel.
                </p>
                <div class="my-2">
                    <a href=""><i class="bi bi-twitter hover:text-sky-500 px-2"></i></a>
                    <a href="">
                        <i class="bi bi-instagram hover:text-sky-500 px-2"></i></a>
                    <a href=""><i class="bi bi-linkedin hover:text-sky-500 px-2"></i></a>
                    <a href=""><i class="bi bi-github hover:text-sky-500 px-2"></i></a>
                </div>
            </footer>
        </section>
    </main>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
