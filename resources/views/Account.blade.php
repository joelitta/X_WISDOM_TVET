<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-WISEDOM TVET - Create Account</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .register-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 3rem 0;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 500px;
        }

        .register-container h2 {
            color: #1e3c72;
            text-align: center;
            margin-bottom: 2rem;
            font-size: 1.8rem;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #1e3c72;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            outline: none;
            border-color: #1e3c72;
        }

        .error {
            color: #dc3545;
            font-size: 0.85rem;
            margin-top: 0.3rem;
        }

        .register-button {
            width: 100%;
            padding: 1rem;
            background: #1e3c72;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s;
        }

        .register-button:hover {
            background: #2a5298;
            transform: translateY(-2px);
        }

        .login-link {
            text-align: center;
            margin-top: 1.5rem;
            color: #666;
        }

        .login-link a {
            color: #1e3c72;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .login-link a:hover {
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
    
    <header class="header">
        <div class="container">
            <h2 style="color: #1e3c72; text-align: center;">X-WISEDOM TVET</h2>
        </div>
    </header>

    <section class="register-section">
        <div class="register-container">
            <h2>Create Account / Iyandikishe</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="names">Username / Izina</label>
                    <input type="text" name="names" id="names" placeholder="Enter your username">
                    @error('names') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email / Imeyili</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    @error('email') <div class="error">{{ $message }}</div> @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password / Ijambo ry'ibanga</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">
                    @error('password') <div class="error">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="register-button">Create Account / Iyandikishe</button>
            </form>
            <div class="login-link">
                <p>Already have an account? / Usanzwe ufite konti? <a href="{{ route('login') }}">Login / Injira</a></p>
            </div>
        </div>
    </section>
</body>
</html> 