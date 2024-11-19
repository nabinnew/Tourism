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

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        .action-buttons {
            display: flex;
            justify-content: space-around;
        }

        .edit-button, .delete-button {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .delete-button {
            background-color: #dc3545;
        }

        .edit-button:hover {
            background-color: #218838;
        }

        .delete-button:hover {
            background-color: #c82333;
        }
/* ..........................tab............ */


.form-container {
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    margin: auto;
}

h2 {
    text-align: center;
    color: #333;
}

label {
    display: block;
    margin-bottom: 5px;
    color: #555;
}

input, textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.button-group {
    display: flex;
    justify-content: space-between;
}

button {
    background-color: blue;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 48%;
}

button:hover {
    background-color: darkblue;
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
    <div class="form-container">
        <h2>Package Information</h2>
        <form action="/addpackage/" method="post">
            @csrf 
            <label for="package-name">Package Name:</label>
            <input type="text" id="package-name" name="name" required>
    
            <label for="photo">Photo URL:</label>
            <input type="file" id="photo" name="photo" required>
    
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" required>
    
            <label for="description">Description:</label>
            <textarea id="description" name="desc" rows="4" required></textarea>
    
            <div class="button-group">
                <button type="submit">Insert</button>
                <button type="button" onclick="clearForm()">Clear</button>
            </div>
        </form>
    </div>
    
    <script>
        function clearForm() {
        document.querySelector("form").reset();
    }
</script>
   
    <div class="table-container">
        <h2>Booking Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Photo</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pack as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td><img src="{{$item->photo}} " alt="Mountain" style="width: 50px;"></td>
                <td>{{$item->price}}</td>
                <td> {{$item->desc}}</td>
                <td class="action-buttons">
                    <button class="edit-button"><a href=" {{url('packages/update')}}/{{$item->id}}"> edit </a></button>
                    <button class="delete-button"><a href=" {{url('package/delete')}}/{{$item->id}}"> delete </a></button>
                </td>
            </tr>  
            @endforeach
             
                
            </tbody>
        </table>
    </div>
    
</body>
</html>