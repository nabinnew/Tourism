<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    margin: 0;
    font-family: Arial, sans-serif;
}

.nav {
    background-color: blue;
 display: flex;
 justify-content: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
}

nav ul li {
    margin: 20px;
}

nav ul li a {
    padding: 15px 20px;
    color: white;
    text-decoration: none;
    display: block;
}

nav ul li a:hover {
    background-color: darkblue;
}


/*.................................nav.....................*/




.table-container {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: auto;
}

h2 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th {
    background-color: #007BFF;
    color: white;
    padding: 10px;
    text-align: left;
}

td {
    padding: 10px;
    border: 1px solid #ccc;
}


    </style>
</head>
<body>
    <div class="nav">
        <nav>
            <ul>
                 <li><a href="package">Package</a></li>
                <li><a href="customer">Customer</a></li>
            </ul>
        </nav>
    </div>
    <!-- ,,,,,,,,,,,,,,,,,,,,nav..................  -->
   
    <div class="table-container">
        <h2>Booking Information</h2>
        <table>
         
            <tr>
                <th>Name</th>
                <th>Entry Date</th>
                <th>phone</th>

                <th>Destination</th>
                <th>Number of Persons</th>
                <th>Desired Date</th>
            </tr>
            @foreach ($cus as $item)
                
          
            <tr>                <td>{{$item->name}}</td>

                <td>{{$item->created_at}}</td>
                    <td>{{$item->phone}}</td>

                <td>{{$item->destination}}</td>
                <td>
                    <form action="updatetotal/{{ $item->id }}" method="post">
                        @csrf
                    <input type="number" value="{{$item->total}}" name="total">
                    <button>edit</button>
                    </form>
                </td>
                <td>{{$item->date}}</td>
            </tr> 
             @endforeach
           
          
        </table>
    </div>
    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            showConfirmButton: false,
            timer: 3000  // 3 seconds to auto close
        });
    </script>
@endif
</body>
</html>