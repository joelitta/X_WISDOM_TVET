<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Report</title>
    <style>
      body {
    font-family: 'Segoe UI', sans-serif;
    background-color: #f4f7fa;
    margin: 0;
    padding: 0;
}

.form-container {
    max-width: 600px;
    margin: 50px auto;
    background: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
}

.update-form {
    display: flex;
    flex-direction: column;
}

.update-form label {
    margin: 10px 0 5px;
    font-weight: 600;
    color: #444;
}

.update-form input[type="number"],
.update-form select {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    font-size: 1rem;
    margin-bottom: 15px;
    width: 100%;
}

.update-form button {
    background-color: #28a745;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.3s ease;
}

.update-form button:hover {
    background-color: #218838;
}

.error {
    color: red;
    font-size: 0.9rem;
    margin-top: -10px;
    margin-bottom: 10px;
}

    </style>
</head>
<body>
    <x-nav></x-nav>
    <div class="form-container">
        <h1>Update Report</h1>
        <form action="{{ route('updatereport', $modify->id) }}" method="POST" class="update-form">
            @csrf
            @method('PUT')

            <label>Trainee Name</label>
            <select name="trainee_id">
                @foreach($view as $trainee)
                    <option value="{{ $trainee->id }}" @if($trainee->id == $modify->trainee_id) selected @endif>
                        {{ $trainee->Traineefname }}
                    </option>
                @endforeach
            </select>

            <label>Trade</label>
            <select name="trade_id">
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}" @if($trade->id == $modify->trade_id) selected @endif>
                        {{ $trade->Trade_name }}
                    </option>
                @endforeach
            </select>

            <label>Level</label>
            <select name="trade_id">
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}" @if($trade->id == $modify->trade_id) selected @endif>
                        {{ $trade->Trade_level }}
                    </option>
                @endforeach
            </select>

            <label>Module Name</label>
            <select name="trade_id">
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}" @if($trade->id == $modify->trade_id) selected @endif>
                        {{ $trade->Module_name }}
                    </option>
                @endforeach
            </select>

            <label>Formative Assessment</label>
            <input type="number" name="formative_assessment" value="{{ $modify->formative_assessment }}">
            <span class="error">@error('formative_assessment'){{ $message }}@enderror</span>

            <label>Summative Assessment</label>
            <input type="number" name="summative_assessment" value="{{ $modify->summative_assessment }}">
            <span class="error">@error('summative_assessment'){{ $message }}@enderror</span>

            <button type="submit">Update Marks</button>
        </form>
    </div>
</body>
</html>
