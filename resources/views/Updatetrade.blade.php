<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Trade</title>
    <style>
    body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #eef2f5;
    color: #2c3e50;
}

.form-container {
    max-width: 550px;
    margin: 60px auto;
    background: #fff;
    padding: 30px 35px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    margin-bottom: 25px;
    color: #2c3e50;
}

.update-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
    text-align: left;
}

.update-form label {
    font-weight: 600;
    margin-bottom: 4px;
}

.update-form input[type="text"] {
    padding: 10px 12px;
    font-size: 1rem;
    border-radius: 6px;
    border: 1px solid #ccc;
    transition: border-color 0.3s ease;
}

.update-form input:focus {
    border-color: #3498db;
    outline: none;
}

button[type="submit"] {
    background-color: #f39c12;
    color: white;
    border: none;
    padding: 12px;
    font-size: 1rem;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #e67e22;
}

.error {
    color: red;
    font-size: 0.85rem;
}

.success-msg {
    background-color: #d4edda;
    color: #155724;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 0.95rem;
}

.error-msg {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border-radius: 6px;
    margin-bottom: 15px;
    font-size: 0.95rem;
}

    </style>
</head>
<body>
    <x-nav></x-nav>

    <div class="form-container">
        <h2>Update Trade</h2>

        @if(Session::has('success'))
            <div class="success-msg">{{ Session::get('success') }}</div>
        @endif

        @if(Session::has('fail'))
            <div class="error-msg">{{ Session::get('fail') }}</div>
        @endif

        <form action="{{ route('updatetrade', $edit->id) }}" method="POST" class="update-form">
            @csrf
            @method('PUT')

            <label>Trade Name</label>
            <input type="text" name="name" value="{{ $edit->Trade_name }}">
            <span class="error">@error('name'){{ $message }}@enderror</span>

            <label>Level</label>
            <input type="text" name="level" value="{{ $edit->Trade_level }}">
            <span class="error">@error('level'){{ $message }}@enderror</span>

            <label>Module Name</label>
            <input type="text" name="module_name" value="{{ $edit->Module_name }}">
            <span class="error">@error('module_name'){{ $message }}@enderror</span>

            <button type="submit">Update Trade</button>
        </form>
    </div>
</body>
</html>
