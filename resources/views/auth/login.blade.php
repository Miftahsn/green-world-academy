<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Login</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('Academy/css/style.css')}}" />
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Elsie&family=Inter:wght@200;300;400&family=Oswald:wght@300;400;500;600&family=Poppins:wght@200;300;400;500;600;700&family=Space+Grotesk:wght@400;600&display=swap');

    .register::hover {
        font-size: 20px;
    }
</style>

<body>
    <!-- Start your project here-->
    <section class="vh-100" style="background-color: #656d4a; font-family:'Space Grotesk', 'sans-serif';">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('Academy/img/sekolah.jpg')}}" alt="background" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 520px;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="{{ route('login') }}" method="POST">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="{{ asset('Academy/img/logo-pohon.png')}}" alt="logo" style="width: 40px;">
                                            <span style="padding-left: 5px; font-weight: 600; font-size: 32px;">
                                                Login
                                            </span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" aria-describedby="emailHelp">
                                            @error('email')
                                            <div id="email" class="form-label" role="alert">{{ $message }}</div>
                                            @enderror
                                            <label class="form-label" for="email">Email address</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" aria-describedby="passwordHelp">
                                            @error('password')
                                            <div id="password" class="form-label" role="alert">{{ $message }}</div>
                                            @enderror
                                            <label class="form-label" for="password">Password</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                                        </div>

                                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="/register" class="register" style="color: #393f81;">Register here</a></p>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>