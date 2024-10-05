<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="resources/css/index.css" />
    <link rel="stylesheet" href="resources/css/app.css" />
    <style>

.btn{
    background-color: #04AA6D !important;
    border:none;
    font-size: 17px;
    font-family: 'Source Sans Pro', sans-serif;
    padding: 6px 18px;
    cursor: pointer;
}

.move1{
  margin-top: 75px;
  margin-left :-1100px;
  display: block;
  width: 100%;
}  
    </style>
  </head>
  
  <body>

<!-- <div class="move"> -->
  <nav class="navbar" style="width: 128vw;">
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
<!-- </div> -->
  <div class="move1">
  
    <section class="container">
      
      <div class="sucess">
    @if ($message = Session::get('success'))
        <div style="margin-left:35%; ">
            <strong style="color: green; font: size 20px;">{{ $message }}</strong>
        </div>
        <td>
        <a href="http://localhost:8080/NewProject/show"><button class="btn" type="button">Show</button></a>
    </td>
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
      <header>Registration Form</header>
      <form enctype="multipart/form-data" action="store" method="post" class="form">
        @csrf
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="txtname"  />
        </div>

        @error('txtname')
           {{$message}}
         @enderror



        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="txtemail"  />
          
        </div>

       


        
        <br>
        
        <img id="preview" alt="" style="max-width: 150px;">
        <div class="input-box">
        
          <label>Image</label>
          <input style="padding-top: 12px;" type="file" name="image" required onchange="previewImage(event)" />
        </div>

        
          <div class="input-box">
            <label>Phone Number</label>
            <input type="text" placeholder="Enter phone number" name="phone" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="date" required />
          </div>
       


        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" name="gender" value="Male"/>
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" value="Female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" value="Other" name="gender" />
              <label for="check-other">Other</label>
            </div>
          </div>
        </div>



        <div class="gender-box">
          <h3>Skill</h3>
          <div class="radio-option">
            <div class="gender">
              <input type="checkbox" value="HTML & CSS" name="skill[]" />
              <label for="check-male">HTML & CSS</label>
            </div>
            <div class="gender">
              <input type="checkbox" value="Javascript" name="skill[]" />
              <label for="check-female">Javascipt</label>
            </div>

            <div class="gender">
              <input type="checkbox" value="python" name="skill[]" />
              <label for="check-female">python</label>
            </div>

            <div class="gender">
              <input type="checkbox" value="java" name="skill[]" />
              <label for="check-female">java</label>
            </div>

            <div class="gender">
              <input type="checkbox" value="PHP" name="skill[]" />
              <label for="check-female">PHP</label>
            </div>
            
          </div>
        </div>




        <div class="input-box address">
          
          
            
            <input type="text" placeholder="Enter your Country" name="country" required />
          
          
            <input type="text" placeholder="Enter your city" name="city" required />
            
        </div>
        <button>Submit</button>
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