<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Marks</title>
    <style>
 body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background-color: #f0f4f8;
    color: #333;
}

.form-container {
    max-width: 600px;
    margin: 40px auto;
    padding: 30px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #2c3e50;
    margin-bottom: 30px;
}

.mark-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.mark-form label {
    font-weight: 600;
}

.mark-form select,
.mark-form input[type="number"] {
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 6px;
    outline: none;
    transition: border-color 0.3s;
}

.mark-form select:focus,
.mark-form input:focus {
    border-color: #3498db;
}

.mark-form button {
    padding: 12px;
    background-color: #3498db;
    color: white;
    border: none;
    font-size: 1rem;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.mark-form button:hover {
    background-color: #2980b9;
}

.error {
    color: red;
    font-size: 0.85rem;
}

    </style>
</head>
<body>
    <x-nav></x-nav>

    <div class="form-container">
        <h2>Record Marks</h2>

        <form action="{{route('marks')}}" method="post" class="mark-form">
            @csrf

            <label>Trainee Name</label>
            <select name="trainee_id">
                <option value="">Select trainee name</option>
                @foreach($view as $trainee)
                    <option value="{{ $trainee->id }}">{{ $trainee->Traineefname }}</option>
                @endforeach 
            </select>
            <span class="error">@error('tranee_id'){{$message}}@enderror</span>

            <label>Trade</label>
            <select name="trade_id">
                <option value="">Select trade name</option>
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}">{{ $trade->Trade_name }}</option>
                @endforeach
            </select>
            <span class="error">@error('trade_id'){{$message}}@enderror</span>

            <label>Level</label>
            <select name="trade_id">
                 <option value="">Select trade level</option>
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}">{{ $trade->Trade_level }}</option>
                @endforeach
            </select>
            <span class="error">@error('trade_id'){{$message}}@enderror</span>

            <label>Module Name</label>
            <select name="trade_id">
                 <option value="">Select Module</option>
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}">{{ $trade->Module_name }}</option>
                @endforeach
            </select>
            <span class="error">@error('trade_id'){{$message}}@enderror</span>

            <label>Formative Assessment</label>
            <input type="number" name="formative_assessment">
            <span class="error">@error('formative_assessment'){{$message}}@enderror</span>

            <label>Summative Assessment</label>
            <input type="number" name="summative_assessment">
            <span class="error">@error('summative_assessment'){{$message}}@enderror</span>

            <button type="submit">Save Marks</button>
        </form>
    </div>
</body>
</html>
