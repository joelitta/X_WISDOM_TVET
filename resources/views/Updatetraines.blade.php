<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Update Trainee</title>
    <style>
  body {
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f5f8fa;
  color: #34495e;
}

.form-container {
  max-width: 450px;
  margin: 60px auto;
  background: white;
  padding: 30px 35px;
  border-radius: 10px;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
  text-align: left;
}

h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #2c3e50;
}

.update-form {
  display: flex;
  flex-direction: column;
  gap: 18px;
}

.update-form label {
  font-weight: 600;
}

.update-form input[type="text"] {
  padding: 10px 12px;
  font-size: 1rem;
  border: 1px solid #ccc;
  border-radius: 7px;
  transition: border-color 0.3s ease;
}

.update-form input[type="text"]:focus {
  border-color: #3498db;
  outline: none;
}

button[type="submit"] {
  background-color: #2980b9;
  color: white;
  border: none;
  padding: 12px;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s ease;
  margin-top: 10px;
}

button[type="submit"]:hover {
  background-color: #1c5980;
}

.error {
  color: #e74c3c;
  font-size: 0.85rem;
  margin-top: 3px;
  display: block;
}

.success-msg {
  background-color: #d4edda;
  color: #155724;
  padding: 12px;
  border-radius: 6px;
  margin-bottom: 15px;
  text-align: center;
  font-size: 0.95rem;
}

.error-msg {
  background-color: #f8d7da;
  color: #721c24;
  padding: 12px;
  border-radius: 6px;
  margin-bottom: 15px;
  text-align: center;
  font-size: 0.95rem;
}

    </style>
</head>
<body>
  <x-nav></x-nav>

  <div class="form-container">
    <h2>Update Trainee</h2>

    @if(Session::has('success'))
      <div class="success-msg">{{ Session::get('success') }}</div>
    @endif
    @if(Session::has('fail'))
      <div class="error-msg">{{ Session::get('fail') }}</div>
    @endif

    <form action="{{ route('updatetrainee', $update2->id) }}" method="POST" class="update-form">
      @csrf
      @method('PUT')

      <label for="fname">Trainee First Name</label>
      <input type="text" id="fname" name="fname" value="{{ $update2->Traineefname }}" />
      <span class="error">@error('fname'){{ $message }}@enderror</span>

      <label for="lname">Trainee Last Name</label>
      <input type="text" id="lname" name="lname" value="{{ $update2->Traineelname }}" />
      <span class="error">@error('lname'){{ $message }}@enderror</span>

      <button type="submit">Update Trainee</button>
    </form>
  </div>
</body>
</html>
