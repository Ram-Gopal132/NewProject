<!DOCTYPE html>
<html>
<link rel="stylesheet" href="resources/css/index.css" />
<head>
<style>
table {
  border-collapse: collapse;
  width: 96%;
  margin-left: 2%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: black;
  color: white;
  
}

.btn{
    background-color: #04AA6D !important;
    border:none;
    font-size: 17px;
    font-family: 'Source Sans Pro', sans-serif;
    padding: 6px 18px;
    cursor: pointer;
}

.btn1{
    background-color: #FF0000;
    border:none;
    font-size: 17px;
    font-family: 'Source Sans Pro', sans-serif;
    padding: 6px 18px;
    cursor: pointer;
}
</style>
</head>
<body>


<nav class="navbar" style="width: 89vw;">
    <h2 class="nav-brand">My Website</h2>
    <ul class="nav-links">
        <li class="nav-item">
            <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">About</a>
        </li>
        <li class="nav-item">
            <a href="http://localhost:8080/NewProject/show" class="nav-link">Show</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>
    <a href="http://localhost:8080/NewProject/form">
    <button class="nav-btn">Create Account</button></a>
</nav>





<h2 align="center">Table Information</h2>

<table >
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Image</th>
    <th>Phone</th>
    <th>D.O.B</th>
    <th>Gender</th>
    <th>Skill</th>
    <th>Country</th>
    <th>City</th>
    <th>Created_at</th>
    <th>Updated_at</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  <!-- $tabledata usermodel variable name -->
    @foreach($tabledata as $record)

  <tr>
    <td>{{$record->id}}</td>
    <td>{{$record->name}}</td>
    <td>{{$record->email}}</td>
    <td><img src="storage/image/{{$record->image}}" alt="" height="150px" width="150px"> </td>
    <td>{{$record->phone}}</td>
    
    <td>{{$record->birth}}</td>
    <td>{{$record->gender}}</td>
    <td>{{$record->skill}}</td>
    <td>{{$record->country}}</td>
    <td>{{$record->city}}</td>
    <td>{{$record->created_at}}</td>
    <td>{{$record->updated_at}}</td>

    <td>
        <a href="edit/{{$record->id}}"><button class="btn" type="button">Edit</button></a>
    </td>
    <td>
        <a href="delete/{{$record->id}}"><button class="btn1" type="button" onclick="return confirm('Are you sure to delete?')">Delete</button></a>
    </td>
  </tr>  
  @endforeach
</table>
</div>
</body>
</html>

{{$tabledata->links('pagination::bootstrap-5')}}


