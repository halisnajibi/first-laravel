<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.108.0">
    <title>Signin Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sign-in.css') }} " rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form method="post" action="/register">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please register</h1>
            <div class="form-floating">
                <input type="text" class="form-control @error('name'){{ 'is-invalid' }} @enderror()"
                    id="floatingInput" placeholder="name" name="name" value="{{ old('name') }}">
                <label for="floatingInput">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating">
                <input type="text" class="form-control @error('username'){{ 'is-invalid' }} @enderror()"
                    id="floatingInput" placeholder="username" name="username" value="{{ old('username') }}">
                @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control @error('email'){{ 'is-invalid' }} @enderror()"
                    id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}"> 
                <label for="floatingInput">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
            </div>
            <div class="form-floating">
                <input type="password" class="form-control @error('password'){{ 'is-invalid' }} @enderror()"
                    id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
            </div>
            <a href="/login">Login</a>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
    </main>



</body>

</html>
