<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-WISEDOM TVET</title>
    <style>
      /* Reset and base */
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f4f7fa;
}

a {
    text-decoration: none;
    color: white;
}

/* Header styling */
.main-header {
    background-color: #2c3e50;
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.logo {
    font-size: 1.5rem;
    font-weight: bold;
}

.nav-links {
    display: flex;
    align-items: center;
    gap: 20px;
}

.nav-links a {
    padding: 8px 12px;
    border-radius: 6px;
    background-color: #3498db;
    transition: background-color 0.3s ease;
}

.nav-links a:hover {
    background-color: #2980b9;
}

.logout-form button {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 8px 12px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.logout-form button:hover {
    background-color: #c0392b;
}

/* Main welcome section */
.welcome-section {
    max-width: 800px;
    margin: 80px auto;
    text-align: center;
    padding: 20px;
}

.welcome-section h2 {
    font-size: 2rem;
    color: #333;
}

.welcome-section p {
    font-size: 1.1rem;
    color: #555;
}

    </style>
</head>
<body>
    <header class="main-header">
        <div class="logo">X-WISEDOM TVET</div>
        <nav class="nav-links">
            <a href="/Trade">Record Trade</a>
            <a href="/Trainees">Record Trainees</a>
            <a href="/Marks">Record Assessment</a>
            <a href="/Viewreport">View Report</a>
            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                @csrf
                <button type="submit">Sohoka / Logout</button>
            </form>
        </nav>
    </header>

    <main class="welcome-section">
        <h2>Welcome to X-WISEDOM TVET</h2>
        <p>This website helps school managers manage trainee assessments efficiently.</p>
    </main>
</body>
</html>
