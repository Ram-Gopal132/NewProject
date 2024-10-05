<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <!-- <link rel="stylesheet" href="resources/css/style.css" /> -->
    <!-- <link rel="stylesheet" href="resources/css/index.css" /> -->
    <style>

        /* Import Google font - Poppins
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"); */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /*font-family: "Poppins", sans-serif; */
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(130, 106, 251);
}


.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
  
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form :where(.radio-option, .gender) {
    display: flex;
    flex-direction: row;
    align-items: center;
    column-gap: 50px;
    flex-wrap:wrap;
  }

.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}


/*   navbar css*/

.nav-btn {
    height: fit-content;
    padding: 1em 1.5em;
    background-color: transparent;
    border: 1px solid #fff;
    color: #fff;
    border-radius: 5px;
    cursor: pointer;
}


.nav-links {
    display: flex;
    list-style: none;
}

.nav-item:not(:first-of-type) {
    margin-left: 1.5em;
}

.nav-link {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
}
.navbar {
    width: 100vw;
    height: 7.5vh;
    background: #855FF6;
    color: #fff;
    padding: 0 5vw;
}
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
}


.move1{
  margin-top: 225px;
  margin-left :-1100px;
  display: block;
  width: 100%;
} 


    </style>
  </head>
  <body>

  <nav class="navbar" style="width: 115vw; margin-bottom:1180px;">
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
    <button class="nav-btn nav-item">Create Account</button></a>
</nav>
<div class="move1">
    <section style="margin-top:-300px;" class="container">
      <div class="sucess">
    @if ($message = Session::get('success'))
        <div style="margin-left:35%; ">
            <strong style="color: green; font: size 20px;">{{ $message }}</strong>
        </div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red; font: size 20px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
      <header >Update Registration Form</header>
      <form enctype="multipart/form-data" action="{{url('update_data', $editdata->id)}}" method="post" class="form">
        @csrf
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" value="{{$editdata->name}}" name="txtname" required />
        </div>
<!-- 
        @error('txtname')
           <p class="invalid-feedback">{{$message}}</p>
         @enderror -->



        <div class="input-box">
          <label>Email Address</label>
          <input type="text" value="{{$editdata->email}}" name="txtemail" required />
        </div>


        
        <br>
        
        <img id="preview" alt="" style="max-width: 150px;">

        <div class="input-box">
          <label>Image</label>
          <input style="padding-top: 12px;" type="file" name="image" required onchange="previewImage(event)"/>
        </div>

        
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" value="{{$editdata->phone}}"name="phone" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" value="{{$editdata->birth}}"name="date" required />
          </div>
       


        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="Male" {{$editdata->gender=== 'Male' ? 'checked' : ''}}/>
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" value="Female" name="gender" {{$editdata->gender=== 'Female' ? 'checked' : ''}}/>
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" value="Other" name="gender" {{$editdata->gender=== 'Other' ? 'checked' : ''}}/>
              <label for="check-other">Other</label>
            </div>
          </div>
        </div>



        <div class="gender-box">
          <h3>Skill</h3>
          <div class="radio-option">
            <div class="gender">
              <input type="checkbox" value="HTML & CSS" name="skill[]" {{in_array('HTML & CSS', explode(',', $editdata->skill)) ? 'checked':''}} />
              <label for="check-male">HTML & CSS</label>
            </div>
            <div class="gender">
              <input type="checkbox" value="Javascript" name="skill[]" {{in_array('Javascript', explode(',', $editdata->skill)) ? 'checked':''}} />
              <label for="check-female">Javascipt</label>
            </div>

            <div class="gender">
              <input type="checkbox" value="python" name="skill[]" {{in_array('python', explode(',', $editdata->skill)) ? 'checked':''}}/>
              <label for="check-female">python</label>
            </div>

            <div class="gender">
              <input type="checkbox" value="java" name="skill[]" {{in_array('java', explode(',', $editdata->skill)) ? 'checked':''}}/>
              <label for="check-female">java</label>
            </div>

            <div class="gender">
              <input type="checkbox" value="PHP" name="skill[]" {{in_array('PHP', explode(',', $editdata->skill)) ? 'checked':''}}/>
              <label for="check-female">PHP</label>
            </div>
            
          </div>
        </div>




        <div class="input-box address">
          
          
            
            <input type="text" value="{{$editdata->country}}" name="country" required />
          
          
            <input type="text" value="{{$editdata->city}}" name="city" required />
            
        </div>
        <button>Update</button>
      </form>
    </section>

</div>
    <script>

        
function previewImage(event) {
         var input = event.target;
         var image = document.getElementById('preview');
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               image.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
         }
      }
    </script>
  </body>
</html>