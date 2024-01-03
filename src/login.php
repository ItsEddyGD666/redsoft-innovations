<?php
include('./php/bd.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RedSoft Innovations</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="assets/img/just_logo_tltec.png" type="image/x-icon">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amaranth:wght@400;700&family=Tilt+Warp&display=swap" rel="stylesheet">
    <!-- ANIMATION -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body class="font-[Onest]">
    <header>
        <nav class="wrapper h-16 flex items-center justify-between peer-checked:static">
            <div class="flex space-x-3">
                <img src="./assets/img/just_logo_tltec.png" alt="" class="w-[43px] h-[40px]">
                <a href="index.html" class="text-2xl font-[Amaranth]">
                    RedSoft Innovations
                </a>
            </div>
            <input type="checkbox" id="menu" class="peer hidden">
            <label for="menu" class="bg-open-menu w-6 h-5 bg-cover bg-center cursor-pointer peer-checked:bg-close-menu transition-all z-50 md:hidden"></label>
            <div class="fixed inset-0 -translate-y-full peer-checked:translate-y-0 transition-transform md:static md:translate-y-0 z-40 mt-4 md:mt-0">
                <ul class="absolute inset-x-0 bg-white top-11 py-5 px-11 grid gap-3 md:w-max md:p-0 md:grid-flow-col md:static">
                    <li><a href="index.html" class="hover:text-azul-logo transition ease-in">Inicio</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="wrapper mt-14 mb-24 grid gap-8 justify-items-center items-center md:grid-cols-2 overflow-visible">
            <img src="./assets/img/Login-amico.svg" alt="" data-aos="fade-right">
            <article class="[&>form]:space-y-4 [&>form>div>input]:w-full [&>form>div>input]:border [&>form>div>input]:border-gray-300 [&>form>div>input]:rounded-md [&>form>div>input]:py-2 [&>form>div>input]:px-3 focus:[&>form>div>input]:outline-none focus:[&>form>div>input]:border-azul-logo" data-aos="fade-left">
                <form action="./php/model/loginCode.php" method="post">
                    <div>
                        <label for="email">Correo Electronico</label>
                        <input type="email" name="email" id="email" placeholder="alguien@alguien.com" required>
                    </div>
                    <div>
                        <label for="name">Contraseña</label>
                        <input type="password" name="psw" id="name" placeholder="******" required>
                    </div>
                    <button type="submit" class="inline-block hover:transition-colors bg-gradient-to-r from-[#1dadba] to-[#1f4e5a] hover:from-[#1f4e5a] hover:to-[#1dadba] duration-300 text-white rounded-full py-2 px-5 hover:shadow-xl hover:shadow-gray-300" name="login">
                        Iniciar Sesión
                    </button>
                </form>
                <section class="wrapper mt-14">
                    <?php
                    if (isset($_SESSION['message'])) { ?>
                        <article class="bg-azul-logo/30 py-4 pl-3 rounded-full">
                            <?= $_SESSION['message'] ?>
                        </article>
                    <?php session_unset();
                    } ?>
                </section>
            </article>
        </section>
    </main>
    <footer class="bg-neutral-800 text-white">
        <section class="wrapper py-6 lg:py-12 mt-14 text-center space-y-10 [&>article>span]:font-bold lg:grid lg:grid-cols-4 lg:space-y-0 lg:text-left lg:gap-11 lg:[&>article]:space-y-3 hover:[&>article>ul>li>a]:text-azul-logo">
            <article class="space-y-4 lg:col-span-2">
                <span class="font-[Amaranth] text-3xl">RedSoft Innovations</span>
                <p>
                    Transformamos su visión en realidad digital: Software innovador, mantenimiento experto y redes
                    confiables, impulsando su éxito tecnológico.
                </p>
            </article>
            <article>
                <span>Links</span>
                <ul class="list-none">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="services.html">Servicios</a></li>
                    <li><a href="courses.html">Cursos</a></li>
                    <li><a href="about-us.html">¿Quiénes Somos?</a></li>
                </ul>
            </article>
            <article>
                <span>Contacto</span>
                <ul class="list-none">
                    <li><a href="#"><i class="bi bi-linkedin"></i> Linkedin</a></li>
                    <li><a href="#"><i class="bi bi-whatsapp"></i> WhatsApp</a></li>
                    <li><a href="#"><i class="bi bi-facebook"></i> Facebook</a></li>
                </ul>
            </article>
        </section>
        <section class="bg-azul-dark py-6 lg:py-4">
            <div class="wrapper text-center space-y-6 lg:space-y-0">
                <p>© Todos los derechos reservados a RedSoft Innovations</p>
                <p>Calle Oriente 11, Reforma, Ciudad Nezahualcóyotl, Méx.</p>
            </div>
        </section>
    </footer>
    <script src="./js/main.js"></script>
    <!-- ANIMATION -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
</body>

</html>