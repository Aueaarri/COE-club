<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('style-home.css') }}">
</head>

<body id="main-body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  fixed-top w-100 navbar navbar-expand-lg bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('logo/4.png') }}" alt="Com Club Logo" width="70" height="70"
                    class="d-inline-block align-text-top">
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" href="{{ route('welcome') }}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" href="{{ route('blog') }}">
                            <span>About</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Book</span>
                        </a>
                        <ul class="dropdown-menu" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <li><a class="dropdown-item" href="#">Reservation</a></li>
                            <li><a class="dropdown-item" href="#">My booking</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" href="{{ route('about') }}">
                            <span>Contact</span>
                        </a>
                    </li>
                    
                    <label data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <input type="checkbox">
                        <ion-icon name="moon" class="moon"></ion-icon>
                        <ion-icon name="sunny" class="sun"></ion-icon>
                        <span class="toggle"></span>
                        <span class="animateBg"></span>

                    </label>
                </ul>

            </div>
        </div>
    </nav>
    <section class="content">
        <div class="content-text">
            <h1 data-aos="fade-right" data-aos-duration="1000"data-aos-delay="400">Com Club</h1>
            <p data-aos="fade-left" data-aos-duration="1000"data-aos-delay="400">Com Club: Your go-to space for collaborative work and focused study,
                <br>designed specifically for computer engineering students.
            </p>
            <div class="main-content">
                <a data-aos="fade-up" data-aos-duration="1000"data-aos-delay="400" href="#" class="btn">Booking</a>
            </div>
        </div>
    </section>


    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script>
        const toggle = document.querySelector('input[type="checkbox"]');
        const body = document.body;

        toggle.addEventListener('change', () => {
            if (toggle.checked) {
                body.style.backgroundImage = "url('light.png')";
                body.style.color = "black";


                const navbarLinks = document.querySelectorAll('.navbar .nav-link');
                navbarLinks.forEach(link => {
                    link.style.color = "black";
                });
            } else {
                body.style.backgroundImage = "url('dark.png')";
                body.style.color = "white";


                const navbarLinks = document.querySelectorAll('.navbar .nav-link');
                navbarLinks.forEach(link => {
                    link.style.color = "white";
                });
            }
        });
    </script>
</body>


</html>
