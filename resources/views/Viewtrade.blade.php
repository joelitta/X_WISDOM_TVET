<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Trades</title>
</head>
<style>
    /* Reset and base */
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f7f9fc;
    color: #333;
}

center {
    margin: 40px auto;
    max-width: 900px;
}

/* Table styling */
table {
    border-collapse: collapse;
    width: 100%;
    max-width: 900px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 8px;
    overflow: hidden;
}

th, td {
    padding: 12px 15px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #2c3e50;
    color: #fff;
    font-weight: 600;
    text-transform: uppercase;
}

tr:hover {
    background-color: #f1f7ff;
}

/* Action buttons */
a {
    text-decoration: none;
     background-color:rgb(44, 7, 7);
    color: #2980b9;
    font-weight: 600;
    margin-right: 10px;
    transition: color 0.3s ease;
}

a:hover {
    color: #1c5980;
}

form {
    display: inline;
}

button {
    background-color: #e74c3c;
    border: none;
    color: white;
    padding: 6px 12px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: 600;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #c0392b;
}

/* Heading */
h1 {
    font-weight: 700;
    color: #2c3e50;
    margin-bottom: 25px;
}

</style>
<body>
    <x-nav></x-nav>
    <br><br>
    <center>
        <h1>View the Trade</h1>

        <table border="2" cellpadding="10">
            <tr>
                <th>Trade ID</th>
                <th>Trade Name</th>
                <th>Trade Level</th>
                <th>Module Name</th>
                <th>Action</th>
            </tr>

            @php
                $grouped = $select->groupBy('Trade_name');
            @endphp

            @foreach($grouped as $tradeName => $tradeGroup)
                @php
                    $levels = $tradeGroup->groupBy('Trade_level');
                @endphp

                @foreach($levels as $level => $levelGroup)
                    @foreach($levelGroup as $index => $item)
                        <tr>
                            <td>{{ $item->id }}</td>

                            @if ($loop->first && $loop->parent->first)
                                <td rowspan="{{ $tradeGroup->count() }}">{{ $tradeName }}</td>
                            @endif

                            @if ($loop->first)
                                <td rowspan="{{ $levelGroup->count() }}">{{ $level }}</td>
                            @endif

                            <td>{{ $item->Module_name }}</td>

                            <td>
                                <a href="{{ route('edit', ['id' => $item->id]) }}">Edit</a>
                                <form action="{{ route('delete', $item->id) }}" method="post" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @endforeach
        </table>
    </center>
</body>
</html>
