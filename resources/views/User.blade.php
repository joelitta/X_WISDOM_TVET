<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-WISEDOM TVET - Home</title>
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
            color: #333;
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

        .hero {
            text-align: center;
            padding: 4rem 0;
            color: white;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.95);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .feature-card h3 {
            color: #1e3c72;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .feature-card p {
            color: #666;
            line-height: 1.6;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
        }

        .cta-button {
            display: inline-block;
            padding: 1rem 2rem;
            background: #1e3c72;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
            font-weight: 500;
        }

        .cta-button:hover {
            background: #2a5298;
            transform: translateY(-2px);
        }

        .cta-button.outline {
            background: transparent;
            border: 2px solid white;
        }

        .cta-button.outline:hover {
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="container">
            <h2 style="color: #1e3c72; text-align: center;">X-WISEDOM TVET</h2>
        </div>
    </header>

    <div class="hero">
        <div class="container">
            <h1>Welcome to X-WISEDOM TVET</h1>
            <p>Empowering Education Through Technology / Guha Uburezi Bwiza Bukoresheje Ikoranabuhanga</p>
            <div class="cta-buttons">
                <a href="/Login" class="cta-button">Login / Injira</a>
                <a href="/Account" class="cta-button outline">Create Account / Iyandikishe</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="features">
            <div class="feature-card">
                <h3><a href="/Trade">Trade Management</a></h3>
                <p>Easily manage and track different trades and courses offered at the institution.</p>
            </div>
            <div class="feature-card">
                <h3><a href="/Trainees">Student Records</a></h3>
                <p>Maintain comprehensive student records and track their progress effectively.</p>
            </div>
            <div class="feature-card">
                <h3><a href="/Marks">Assessment System</a></h3>
                <p>Streamlined assessment process for evaluating student performance and generating reports.</p>
            </div>
        </div>
    </div>

    <footer style="text-align: center; padding: 2rem 0; color: white;">
        <p>&copy; 2024 X-WISEDOM TVET. All rights reserved.</p>
    </footer>
</body>
</html>

