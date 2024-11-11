<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-transparent" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"> 
                <img src="{{ asset('logo/4.png') }}" alt="Com Club Logo" width="70" height="70" class="d-inline-block align-text-top">
            </a>
        </div>
    </nav>

    <section>
        <div class="content d-flex flex-column align-items-center justify-content-center" style="min-height: 100vh;">
            <h1 class="bold-title" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="400">Welcome to Com Club</h1>
            <p style="text-align: center;" data-aos="fade-left" data-aos-duration="2500" data-aos-delay="600">
                Experience the Best of COE Co-Working Space: Effortless Booking for Collaborative Events and Inspiring Moments!
            </p>
            <a href="https://sso.kku.ac.th/module.php/kkuauth/authpage.php?ReturnTo=https%3A%2F%2Fsso.kku.ac.th%2Fmodule.php%2Fkkuauth%2Fresume.php%3FState%3D_854daa7c72dd34b1abdb1b705d8e3714f37a14773d%253Ahttps%253A%252F%252Flibsso.kku.ac.th%252Fmodule.php%252Fkkuauth%252Fresume.php%2526RelayState%253Dhttps%25253A%25252F%25252Fyourwebsite.com%25252Fauth%25252Fcallback" 
   class="btn btn-primary" data-aos="zoom" data-aos-duration="1700" data-aos-delay="700">
    KKU LOGIN
</a>

        </div>
    </section>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- Bootstrap JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
