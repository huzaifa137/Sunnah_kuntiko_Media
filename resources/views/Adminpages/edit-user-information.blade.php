<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    <form action="{{ route('update-user-data') }}" class="mt-5 border p-4 bg-light shadow" method="POST">
                        @csrf

                        <div style="display: flex; justify-content: center; align-items: center; height: 100%;">
                            <img src="/audio_assets/images/pod-talk-logo.png" class="logo-image img-fluid" alt="templatemo pod talk" style="height: 100px;width: 100px;">
                        </div>


                        <h4 class="mb-3 mt-2 text-center text-primary">Edit User Information</h4>
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif

                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif


                        <input type="hidden" name="userId" value="{{$userRecord->id}}">

                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <label>Admin Name<span class="text-danger">*</span></label>
                                <input type="text" name="fname" class="form-control"
                                    placeholder="Enter User Name" value="{{ $userRecord->fname }}">
                                <span class="text-danger">
                                    @error('fname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Email<span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Enter User Email"
                                    value="{{ $userRecord->email }}">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label>Phone number<span class="text-danger">*</span></label>
                                <input type="number" name="phonenumber" class="form-control"
                                    placeholder="Enter User phone number" value="{{ $userRecord->phonenumber }}">
                                <span class="text-danger">
                                    @error('phonenumber')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="col-md-12">
                                <button class="btn btn-primary float-end">Update Information</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center mt-3 text-secondary">If you have account, Please <a
                            href="{{ route('auth.login') }}">Login Now</a></p>

                            <p class="text-center mt-3 text-secondary">Return back to, <a
                                href="{{ route('dashboard') }}">dashboard</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
