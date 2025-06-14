<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>X-WISEDOM TVET</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f4f8;
      margin: 0;
      padding: 0;
      text-align: center;
    }

    h1 {
      color: #2c3e50;
      margin-top: 40px;
    }

    h3 {
      color: #34495e;
      margin-bottom: 30px;
    }

    a {
      display: inline-block;
      margin: 10px;
      padding: 10px 20px;
      text-decoration: none;
      color: white;
      background-color: #3498db;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #2980b9;
    }

    button {
      margin: 10px;
      padding: 10px 20px;
      background-color: #e74c3c;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #c0392b;
    }

    form {
      display: inline-block;
    }
  </style>
</head>
<body>
  <h1>Welcome to X-WISEDOM TVET</h1>
  <h3>This website helps school managers manage trainees' assessments</h3>

  <a href="/Trade">Record Trade</a>
  <a href="/Trainees">Record Trainees</a>
  <a href="/Marks">Record Assessment</a>
  <a href="/Viewreport">View Report</a>

  <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Sohoka / Logout</button>
  </form>
</body>
</html>
