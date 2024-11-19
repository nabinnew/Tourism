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
<div class="nav">
    <nav>
        <ul>
             <li><a href="package">Package</a></li>
            <li><a href="customer">Customer</a></li>
        </ul>
    </nav>
    
</div>
 <div class="form-container">
    <h2> Update Package  </h2>
    <form action="/package/update/{{$pack->id}}" method="post">
        @csrf 
        <label for="package-name">Package Name:</label>
        <input type="text" id="package-name" name="name" value="{{$pack->name}}"  required >

        <label for="photo">Photo URL:</label>
        <input type="file" id="photo" name="photo" required>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" min="0" required value="{{$pack->price}}">

        <label for="description">Description:</label>
        <textarea id="description" name="desc" rows="4" value="" required> {{$pack->desc}} </textarea>

        <div class="button-group">
            <button type="submit">Insert</button>
            <button type="button" onclick="clearForm()">Clear</button>
        </div>
    </form>
</div>
