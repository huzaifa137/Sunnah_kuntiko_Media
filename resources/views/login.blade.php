<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Sunnah kuntiko Media</title>

    <!-- Favicon -->
    <link href="/assets/images/libraria-logo-v3.png" rel="icon" type="image/x-icon" />
</head>

<body>

    <style>
        body {
            background-image: url('/assets/images/sunnah_bg.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100vh;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="signup-form">
                    <form action="{{ route('auth.check') }}" class="mt-5 border p-4 bg-light shadow" method="POST">
                        @csrf
                        
                            <div class="logo-center" style="display: flex; justify-content: center; align-items: center; height: 100%;">
                                <img src="/audio_assets/images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk" style="height: 150px;width: 150px;">
                            </div>
                    
                        
                        <h4 class="mb-3 mt-2 text-center text-primary">Admin Login</h4>
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>phonenumber<span class="text-danger">*</span></label>
                                <input type="number" name="phonenumber" class="form-control"
                                    placeholder="Enter Phone number" value="{{ old('phonenumber') }}" required>
                                <span class="text-danger">
                                    @error('phonenumber')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Password<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Enter Password" required>
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary float-end">Login</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">If you don't have account, Please <a
                            href="{{ route('auth.register') }}">Signup Now</a></p>
                    <p class="text-center mt-3 text-secondary">Return back to, <a
                            href="{{ route('home') }}">homepage</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
