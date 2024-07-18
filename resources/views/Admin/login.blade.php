<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminAsset/css/pages/auth.css') }}">
    <style>
        body, html {
            height: 100%;
        }
        #auth {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }
        #auth-left {
            width: 100%;
            max-width: 700px;
        }
        .auth-title {
            text-align: center;
            margin-bottom: 2rem;
        }
    </style>
</head>

<body>
    
    <div id="auth">
        <div class="row h-100 w-100">
            <div class="col-lg-5 col-12 mx-auto">
                @include('Admin.pages.partials.komponen.pesan')
                <div id="auth-left">
                    <h3 class="auth-title">Silahkan Login Disini!</h3>
                    <br>

                    <form action="{{ route('login.proses') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="email" name="email" class="form-control form-control-xl" placeholder="Email...">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password...">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
