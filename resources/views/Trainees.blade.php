<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Trainee</title>
    <style>
  body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f9fbfe;
    color: #2c3e50;
}

.form-container {
    max-width: 500px;
    margin: 50px auto;
    background: #fff;
    padding: 30px 25px;
    border-radius: 10px;
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 25px;
    color: #34495e;
}

.trainee-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.trainee-form label {
    text-align: left;
    font-weight: 600;
}

.trainee-form input[type="text"] {
    padding: 10px;
    font-size: 1rem;
    border-radius: 6px;
    border: 1px solid #ccc;
    transition: border-color 0.3s;
}

.trainee-form input:focus {
    border-color: #3498db;
    outline: none;
}

button[type="submit"] {
    background-color: #2ecc71;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #27ae60;
}

.error {
    color: red;
    font-size: 0.85rem;
}

.success-msg {
    background-color: #dff0d8;
    color: #3c763d;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
}

.error-msg {
    background-color: #f2dede;
    color: #a94442;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
}

    </style>
</head>
<body>
    <x-nav></x-nav>

    <div class="form-container">
        <h2>Add New Trainee</h2>

        @if(Session::has('success'))
            <div class="success-msg">{{ Session::get('success') }}</div>
        @endif

        @if(Session::has('fail'))
            <div class="error-msg">{{ Session::get('fail') }}</div>
        @endif

        <form action="{{ route('Trainee') }}" method="post" class="trainee-form">
            @csrf

            <label>Trainee First Name</label>
            <input type="text" name="fname">
            <span class="error">@error('fname'){{ $message }}@enderror</span>

            <label>Trainee Last Name</label>
            <input type="text" name="lname">
            <span class="error">@error('lname'){{ $message }}@enderror</span>

            <button type="submit">Add Trainee</button>
        </form>
    </div>
</body>
</html>
