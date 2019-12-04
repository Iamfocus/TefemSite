<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Tefem</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{url('public/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{url('public/css/style.min.css')}}" rel="stylesheet">
  <link href="{{url('public/css/style.css')}}" rel="stylesheet">
  <link href="{{url('public/css/bootstrap.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{url('public/css/animate.css')}}">
  <link href="{{url('public/css/rotating-card.css')}}" rel="stylesheet" />
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

  
</head>

<body style="background: #f2f2f2;">
  <div class="container" > 
    <div class="row">
      
      <div class="col-md-4">
          <h1 class="font-weight-bold" style="margin-top: 25px;">Are you ready to make Impact?</h1>
          <hr class="hr-light">

          <p>
            <strong>The Female Media network</strong>
          </p>

          <p class="mb-4" style="color: black;">
              The female media network <strong style="color:  #ff0000;">(TEFEM)</strong>, is a program 
              setup by a team of prominent creatives, led by Eneh Mercy, photographer
              and Graphics designer, with the aim of improving the standard of 
              living of ladies through media. 
         </p>

         <a target="_blank" href="{{url('/')}}" class="btn" style="background: #ff0000; border-radius: 20px; color: white;">
            GO bACK 
            <i class="far fa-arrow-alt-circle-left ML-2"></i>
          </a>
      </div>

      <div class="col-md-8" style="background: white; margin-top: 30px;">
          <!-- Default form register -->
<form class="text-center border border-light p-5" id="form">

    <p class="h4 mb-4">Sign up</p>
    <div id="errors" class="d-none card card-block w-75 mx-auto mb-3 "></div>
    <div class="form-row mb-4">
        <div class="col-md-6 mb-4">
            <!-- First name -->
            <input type="text" id="firstName" name="first_name" class="form-control" placeholder="First name" required>
        </div>
        <div class="col-md-6">
            <!-- Last name -->
            <input type="text" id="lastName" name="last_name" class="form-control" placeholder="Last name" required>
        </div>
    </div>

    <!-- E-mail -->
    <div class="form-row ">
        <div class="col-md-6 ">
            <!-- First name -->
        <label id="email-label" for="email" class="d-none bg-white w-100 text-danger"></label>
          <input type="email" id="email" name="email" class="form-control mb-4 " placeholder="E-mail" required>
        </div>
        <div class="col-md-6 mb-4">
            <!-- Last name -->
            <label id="phone-label" for="phoneNumber" class="d-none w-100 bg-white text-danger"></label>
            <input type="tel" id="phoneNumber" name="phone_number" class="form-control" placeholder="phone number" required>
        </div>
    </div>

    <!-- Password -->
    <div class="form-row mb-4">
        <div class="col-md-6 mb-4">
            <!-- First name -->
            <input type="text" id="maritalStatus" name="marital_status" class="form-control" placeholder="Marital status" required>
        </div>
        <div class="col-md-6">
            <!-- Last name -->
            <input type="date" id="dateOfBirth" name="date_of_birth" class="form-control datepicker" placeholder="birth date" required>
        </div>
    </div>

    <input type="text" id="healthChallenge" class="form-control mb-4" name="health_challenge" placeholder="Any health challenge we should know about?">
    <input type="text" id="address" class="form-control mb-4" name="address" placeholder="your home address">
    <select class="browser-default custom-select mb-4" name="courses" id="courses">
  	<option selected>Select course of interest</option>
  	<option value="Graphics Design">Graphics Design</option>
  	<option value="Photography">Photography</option>
  	<option value="Content Creation">Content Creation</option>
	<option value="Web Design">Web Design</option>
	<option value="Public Speaking">Public Speaking</option>
	
   </select>
  <br>
    <small id="" class="form-text text-muted mb-4 font-weight-bold">
        Next of kin's details
    </small>

    <div class="form-row mb-4">
        <div class="col-md-6 mb-4">
            <!-- First name -->
            <input type="text" id="nextOfKinFirst" name="next_of_kin_first_name" class="form-control" placeholder="First name" required>
        </div>
        <div class="col-md-6">
            <!-- Last name -->
            <input type="text" id=nextOfKinsSecond"" name="next_of_kin_last_name" class="form-control" placeholder="Last name" required>
        </div>
    </div>

    <div class="form-row mb-4">
        <div class="col-md-6 mb-4">
            <!-- First name -->
            <input type="number" name="next_of_kin_phone" id="nextOfKinPhone" class="form-control" placeholder="Phone number" required>
        </div>
        <div class="col-md-6">
            <!-- Last name -->
            <input type="text" name="next_of_kin_address" id="nextOfKinAddress" class="form-control" placeholder="Addresss" required>
        </div>
    </div>
   

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit" style="background: #ff0000 !important; border: none !important;">Sign up</button>
    
    <hr>

    <!-- Terms of service -->
    

</form>
<!-- Default form register -->
      </div>
    </div>
  </div>
   



  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{url('public/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{url('public/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{url('public/js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/js/tefem.js')}}"></script>

  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
	
	<script>
        function hasProperty(arr, query){
            let val = '';
            arr.forEach(function(el){
                if(el.includes(query)){
                    val = el
                }
            })
            return val
        }
        
          $("#form").on('submit',function(event) {
              event.preventDefault(); 
              var dataString = $(this).serialize(); 
              
              $.ajax({
                  type: "POST",
                  url: "{{url('/register')}}",
                  data: dataString,
              }).done(function(data){
                  if(data.status)
                  {
                      setTimeout(function(){
                          $("#errors").removeClass("d-block border border-success ")
                          $("#errors").text('')
                      }, 3000)
                      $("#errors").addClass("d-block border border-success ")
                      $("#errors").append('Registration Successful!!')
                      $('#form')[0].reset();
                  }
                  else{
                     info = data.error
                     
                     console.log(info)
                      if(email = hasProperty(info, 'email')){
                          setTimeout(function(){
                          $("#email").removeClass('border border-danger')
                          $("#email-label").removeClass('d-block border border-danger').addClass('d-none')
                          $("#email-label").text('')
                          }, 7000)
                              $("#email").addClass('border border-danger')
                              $("#email-label").addClass('d-block border border-danger')
                              $("#email-label").append(email)
                      }
                      if(phone = hasProperty(info, 'phone')){
                          setTimeout(function(){
                          $("#phoneNumber").removeClass('border border-danger')
                          $("#phone-label").removeClass('d-block border border-danger').addClass('d-none')
                          $("#phone-label").text('')
                          }, 7000)
                              $("#phoneNumber").addClass('border border-danger')
                              $("#phone-label").addClass('d-block border border-danger')
                              $("#phone-label").append(phone)
                      }
                        $("#errors").addClass("d-block border border-danger ")
                        $("#errors").append('Error!! please try again')
                      setTimeout(function(){
                          $("#errors").removeClass("d-block border border-danger")
                          $("#errors").text('')
                      }, 3000);
                         
                          
                  }
                   
             }).fail(function(){
                  setTimeout(function(){
                         $("#errors").removeClass("d-block border border-danger").addClass('d-none')
                          $("#errors").empty()
                      }, 3000) 
                          $("#errors").addClass("d-block border border-danger")
                          $("#errors").append('Error!! please try again')
             });

          });
      </script>

</body>
</html>
