<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="min-h-screen py-40" style="background-image: linear-gradient(115deg, #ffdd33, #fdf4bb)">
    <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row  w-10/12 lg:w-8/12 bg-white rounded-x1 mx-auto shadow-lg overflow-hidden">
            <div class="w-full lg:w-1/2 flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('/images/Login-Background.jpg');">
                <h1 class="text-white text-3xl mb-3">Welcome</h1>
                <div>
                    <p class="text-white"> Dzakirozaan Uzlawhwasata </p>
                </div>
            </div>
            <div class="w-full lg:w-1/2 py-16 px-12">
                <h1 class="text-3xl mb-4 text-bold"> Login </h1>
                <form method="POST" action="{{ route('login') }}">
                    <div class="grid">
                        <input id="email" type="email" placeholder="Email" class="border border-gray-400 py-1 px-2 @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="grid mt-5">
                        <input id="password" type="password" placeholder="Password" class="border border-gray-400 py-1 px-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="mt-5">
                        <input type="checkbox" class="border border-gray-400 accent-yellow-500" required>
                        <span>
                            I accept the <a href="#" class="text-yellow-500 font-semibold"> Terms of Use</a> & <a href="#" class="text-yellow-500 font-semibold"> Privacy Policy</a>
                        </span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="w-full bg-yellow-400 py-3 text center text-white rounded-md shadow-xl hover:bg-yellow-500">Login</button>
                                @if (Route::has('password.request'))
                                <div class="mt-2">
                                    <a class="text-yellow-500 font-semibold" href="{{ route('password.request') }}">Forgot Your Password?</a>
                                @endif
                                </div>
                    </div>
                    <div class="text-center mt-7">
                    <span>
                    Don't have an account?<a class="text-yellow-500 font-semibold" href="{{ route('register') }}"> Sign up</a>
                    </span>
                    </div>
                </form>
            </div>
        </div>
</body>
</html>
