<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view trainees</title>
</head>
<style>
    /* Base styles */
body {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f9fbfd;
    color: #333;
}

center {
    margin: 40px auto;
    max-width: 700px;
}

/* Table styling */
table {
    border-collapse: collapse;
    width: 100%;
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
    background-color: #34495e;
    color: white;
    font-weight: 700;
    text-transform: uppercase;
}

tr:hover {
    background-color: #f0f8ff;
}

/* Links */
a {
    color: #2980b9;
     background-color:rgb(44, 7, 7);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

a:hover {
    color: #1c5980;
}

/* Delete button */
form {
    display: inline;
}

button {
    background-color: #e74c3c;
    border: none;
    color: white;
    padding: 6px 14px;
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
      <x-nav>
</x-nav> <br><br><center>
    <table  border="2" cellpadding="10" cellspacing="10">
   <tr>
      <th>Id</th>
    <th>Tainee Firstname</th>
    <th>Tainee Lastname</th>
    <th colspan='2'>Action</th>
   </tr>
@foreach($view as $viewtrainee)
   <tr>
    <td>{{$viewtrainee->id}}</td>
    <td>{{$viewtrainee->Traineefname}}</td>
    <td>{{$viewtrainee->Traineelname}}</td>
    <td><a href="{{route('update2',[ 'id' =>$viewtrainee->id]) }}">update</a></td>
    <td>
        <form action="{{route('delete2',$viewtrainee->id)}}" method="post">
          
              @method('DELETE')
             @csrf
            <button>Delete</button>
          
        </form>
    </td>
   </tr>
    @endforeach

    </table>
</center>
    
</body>
</html>
