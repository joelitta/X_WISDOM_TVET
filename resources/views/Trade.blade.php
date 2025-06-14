<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trade</title>
    <style>
    body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f8fbfd;
    color: #2c3e50;
}

.form-container {
    max-width: 500px;
    margin: 50px auto;
    background: #fff;
    padding: 30px 25px;
    border-radius: 12px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    text-align: center;
}

h2 {
    margin-bottom: 25px;
    color: #34495e;
}

.trade-form {
    display: flex;
    flex-direction: column;
    gap: 18px;
}

.trade-form label {
    text-align: left;
    font-weight: 600;
}

.trade-form input[type="text"] {
    padding: 10px;
    font-size: 1rem;
    border-radius: 6px;
    border: 1px solid #ccc;
    transition: border 0.3s ease;
}

.trade-form input:focus {
    border-color: #3498db;
    outline: none;
}

button[type="submit"] {
    background-color: #2ecc71;
    color: white;
    border: none;
    padding: 12px;
    border-radius: 8px;
    cursor: pointer;
    font-size: 1rem;
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
    margin-bottom: 10px;
}

.error-msg {
    background-color: #f2dede;
    color: #a94442;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <x-nav></x-nav>

    <div class="form-container">
        <h2>Add Trade</h2>

        @if(Session::has('success'))
            <div class="success-msg">{{ Session::get('success') }}</div>
        @endif

        @if(Session::has('fail'))
            <div class="error-msg">{{ Session::get('fail') }}</div>
        @endif

        <form action="{{route('trade')}}" method="post" class="trade-form">
            @csrf

            <label>Trade Name</label>
            <input type="text" name="name">
            <span class="error">@error('name'){{ $message }}@enderror</span>

            <label>Level</label>
            <input type="text" name="level">
            <span class="error">@error('level'){{ $message }}@enderror</span>

            <label>Module Name</label>
            <input type="text" name="module_name">
            <span class="error">@error('module_name'){{ $message }}@enderror</span>

            <button type="submit">Add Trade</button>
        </form>
    </div>
</body>
</html>
