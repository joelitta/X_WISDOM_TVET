<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>X-WISEDOM TVET - Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #333;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 400px;
        }

        h1 {
            text-align: center;
            color: #1e3c72;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .alert {
            padding: 10px;
            margin-bottom: 1rem;
            border-radius: 5px;
            text-align: center;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #1e3c72;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        input:focus {
            outline: none;
            border-color: #1e3c72;
        }

        .error {
            color: #dc3545;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        button {
            width: 100%;
            padding: 0.8rem;
            background: #1e3c72;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background: #2a5298;
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
        }

        .register-link a {
            color: #1e3c72;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .register-link a:hover {
            color: #2a5298;
            text-decoration: underline;
        }

        .home-link {
            position: absolute;
            top: 1rem;
            left: 1rem;
            color: white;
            text-decoration: none;
            font-weight: 500;
            opacity: 0.8;
            transition: opacity 0.3s;
        }

        .home-link:hover {
            opacity: 1;
        }
    </style>
</head>
<body>
    <a href="{{ route('home') }}" class="home-link">← Back to Home / Subira Ahabanza</a>
    <div class="login-container">
        <h1>X-WISEDOM TVET</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            
            @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @endif
            
            @if(Session::has('fail'))
            <div class="alert alert-danger">
                {{Session::get('fail')}}
            </div>
            @endif

            <div class="form-group">
                <label for="names">Username / Izina</label>
                <input type="text" name="names" id="names" placeholder="Enter your username">
                @error('names') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label for="password">Password / Ijambo ry'ibanga</label>
                <input type="password" name="password" id="password" placeholder="Enter your password">
                @error('password') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit">Login / Injira</button>
        </form>
        <div class="register-link">
            <p>Don't have an account? / Nta konti ufite? <a href="{{ route('home') }}">Create Account / Iyandikishe</a></p>
        </div>
    </div>
</body>
</html>
