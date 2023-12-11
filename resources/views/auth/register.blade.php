<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Register</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('Academy/css/style.css')}}" />
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Elsie&family=Inter:wght@200;300;400&family=Oswald:wght@300;400;500;600&family=Poppins:wght@200;300;400;500;600;700&family=Space+Grotesk:wght@400;600&display=swap');

</style>

<body style="background-color: #656d4a;">
    <!-- Start your project here-->
    <section class="vh-100" style="font-family:'Space Grotesk', 'sans-serif';">
        <div class="container py-5">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-6 p-lg-5 text-black">
                                    <form action="{{ route('register') }}" method="POST">
                                        @csrf

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="{{ asset('Academy/img/logo-pohon.png')}}" alt="logo" style="width: 40px;">
                                            <span style="padding-left: 5px; font-weight: 600; font-size: 32px;">
                                                Register
                                            </span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" aria-describedby="nameHelp">
                                            @error('name')
                                            <div id="name" class="form-label" role="alert">{{ $message }}</div>
                                            @enderror
                                            <label class="form-label" for="name">Name</label>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" aria-describedby="emailHelp">
                                            @error('email')
                                            <div id="email" class="form-label" role="alert">{{ $message }}</div>
                                            @enderror
                                            <label class="form-label" for="email">Email address</label>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" value="{{ old('password') }}" id="password" aria-describedby="passwordHelp">
                                            @error('password')
                                            <div id="password" class="form-label" role="alert">{{ $message }}</div>
                                            @enderror
                                            <label class="form-label" for="password">Password</label>

                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" id="password_confirmation" aria-describedby="password_confirmationHelp">
                                            @error('password_confirmation')
                                            <div id="password_confirmation" class="form-label" role="alert">{{ $message }}</div>
                                            @enderror
                                            <label class="form-label" for="password_confirmation">Password Confirmation</label>
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Sign Up</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="{{ asset('Academy/img/sekolah.jpg')}}" alt="background" class="img-fluid" style="border-radius: 0 1rem 1rem 0; height: 576px;" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>