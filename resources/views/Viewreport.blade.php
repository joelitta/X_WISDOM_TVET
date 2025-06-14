<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report</title>
  <style>
    /* Basic reset and font */
 

    /* Header */
    h1 {
      margin-bottom: 30px;
      color: #34495e;
      font-weight: 700;
    }

    /* Table styling */
    table {
      border-collapse: collapse;
      width: 90%;
      margin: 0 auto;
      box-shadow: 0 3px 15px rgba(0,0,0,0.1);
      background: white;
      border-radius: 10px;
      overflow: hidden;
    }

    th, td {
      padding: 12px 18px;
      border-bottom: 1px solid #ddd;
      text-align: center;
      font-size: 0.95rem;
      color: #34495e;
    }

    /* Header cells */
    th {
      background-color: #2980b9;
      color: white;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    /* Alternate row colors */
    tbody tr:nth-child(even) {
      background-color: #f2f6fc;
    }

    /* Hover effect on rows */
    tbody tr:hover {
      background-color: #dceefc;
      transition: background-color 0.3s ease;
    }

    /* Links styling */
    a {
      color: rgb(10, 10, 201);
      background-color: rgb(44, 7, 7);
      text-decoration: none;
      font-weight: 600;
      padding: 6px 12px;
      border-radius: 6px;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: rgb(44, 7, 7);
      color: white;
    }
     body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f9fafb;
      color: #2c3e50;
      padding: 40px 0;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    /* Buttons inside form */
    button {
      background-color: #e74c3c;
      border: none;
      color: white;
      padding: 7px 14px;
      font-weight: 600;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #c0392b;
    }

    /* Center the form inside the cell */
    form {
      margin: 0;
    }

    /* Hide print button when printing */
    @media print {
      #printBtn {
        display: none;
      }
    }
  </style>
</head>
<body>
  <center>
    <x-nav></x-nav>  
    <br><br>
    <h1>View Report</h1>
   

   

    
    <table border="2">
      <tr>
        <th>Marks ID</th>
        <th>Trainee First Name</th>
        <th>Trainee Last Name</th>
        <th>Trade Name</th>
        <th>Trade Levels</th>
        <th>Module Name</th>
        <th>Formative Assessment</th>
        <th>Summative Assessment</th>
        <th>Percentage</th>
        <th>Decision</th>
        <th colspan="2">Action</th>
      </tr>

      @foreach($select as $mark)
      <tr>
        <td>{{ $mark->id }}</td>
        <td>{{ $mark->trainee->Traineefname }}</td>
        <td>{{ $mark->trainee->Traineelname }}</td>
        <td>{{ $mark->trade->Trade_name }}</td>
        <td>{{ $mark->trade->Trade_level }}</td>
        <td>{{ $mark->trade->Module_name }}</td>
        <td>{{ $mark->formative_assessment }}</td>
        <td>{{ $mark->summative_assessment }}</td>
        <td>{{ $mark->percentage }}</td>
        <td>{{ $mark->decision }}</td>
        <td><a href="{{route('modify',['id'=>$mark->id])}}">Update</a></td>
        <td>
          <form action="{{route('delete3',$mark->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Remove</button>
          </form>
        </td>
      </tr>
      @endforeach
    </table>
  </center>
  <button id="printBtn" onclick="window.print()">✅Print</button>
</body>
</html>
