@extends('layouts.app')

@section('style')
<style>
* {
  box-sizing: border-box;
}
.plus-btn{
    margin-top: -20px;
    /* margin-left: 10px; */
    font-size: 20px;
    float: right;
    color: black;
    padding: 0px 15px;
}

body {
  background-color: #f1f1f1;
}
p.error {
    /* padding: 0; */
    color: #ed05059e;
    /* margin: 0; */
    margin-top: -20px;
}

#regForm {
  background-color: #ffffff;
  margin: 2% auto;
  font-family: Raleway;
  padding: 20px 40px;
  width: 50%;
  min-width: 300px;
}

h3{
  text-align: center;  
}

input {
  /*padding: 10px;
  width: 100%;*/
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
@stop

@section('content')

<form id="regForm" action="{{ url('job-application')}}" method="post">
    @csrf
  <h3>Next Step </h3>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <h5>Basic Details:</h5>
    <!-- <div class="modal-body model-custom-css py-0"> -->
    	<div id="step1">
	        <div class="row">
	            <div class="col-5 text-center">
	                <div class="profile-modal">
	                    <div class="file-upload">
	                        <label class="" for="customFile">
	                            <i class="fa fa-upload"></i>
	                            <p class="font-14 mb-0">Upload photo</p>
	                        </label>
	                        <input type="file" class="custom-file-input" id="customFile" name="profile_img" value="">
	                    </div>
	                </div>
	            </div>
	            <!--  -->
	            <div class="col-7">
	                <div class="cover-photo p-5 text-center">
	                    <div class="file-upload">
	                        <label class="" for="cover_pic">
	                            <i class="fa fa-upload"></i>
	                            <p class="font-14">Upload Cover Photo</p>
	                        </label>
	                        <input type="file" class="custom-file-input" id="cover_pic" name="cover_img" value="">
	                    </div>
	                </div>
	            </div>
	        </div>
	        <p class="mt-4 text-medium text-dark font-18">Choose your status</p>
	        <div class="form-check-inline mr-3">
	            <input type="radio" class="form-check-input" name="status" id="open_opportunity" value="Open for opportunity" >
	            <label class="form-check-label" for="open_opportunity">
	                Open for opportunity 
	            </label>
              <input type="radio" class="form-check-input" name="status" id="none" value="none">
              <label class="form-check-label" for="none">
                  None
              </label>
	        </div>
	        <!-- <div class="form-check-inline mr-3">
	            
	        </div> -->
	        <div class="form-group mb-4 mt-4">
	            <input type="text" name="fname" class="form-control form-custom" id="fname"  value="{{Auth::user()->fname}}" >
	            <label class="form-control-placeholder" for="fname">First Name</label>
	        </div>
	        <div class="form-group mb-4 mt-4">
	            <input type="text" name="lname" class="form-control form-custom" id="lname"  value="{{Auth::user()->lname}}">
	            <label class="form-control-placeholder" for="lname">Last Name</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="text" name="prefroles" class="form-control form-custom" id="designation" value="">
	            <label class="form-control-placeholder" for="designation">Designation</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="text" name="prefloc" class="form-control form-custom" id="location" value="">
	            <label class="form-control-placeholder" for="location">Location</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="tel" name="mobile_no" class="form-control form-custom" id="phone_number"  value="{{Auth::user()->mobile_no}}">
	            <label class="form-control-placeholder" for="phone_number" >Phone number</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="text" name="email" class="form-control form-custom" id="email"  value="{{Auth::user()->email}}" disabled="true">
	            <label class="form-control-placeholder" for="email">Email</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="text" name="github" class="form-control form-custom" id="github_url" value="">
	            <label class="form-control-placeholder" for="github_url">Github URL</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="text" name="linkedin" class="form-control form-custom" id="linkedin_url" value="">
	            <label class="form-control-placeholder" for="linkedin_url">Linkedin URL</label>
	        </div>
	    </div>
        <!--  -->
        <!-- <div class="float-right py-2">
            <button type="submit" class="btn blue-btn text-white">Save</button>
        </div> -->
    <!-- </div> -->
    
  </div>
  <div class="tab">
  	<h5>General Details</h5>
  	<div class="form-group mb-4 mt-4">
        <input type="date" name="dob" class="form-control form-custom" id="dob"  value={{date('Y-m-d')}}>
        <label class="form-control-placeholder" for="name">Date of Birth</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <div class="form-group mb-4 mt-4">
        <input type="text" name="name" class="form-control form-custom" id="name"  value="{{Auth::user()->fname}}">
        <label class="form-control-placeholder" for="name">First Name</label>
    </div>
    <h5>Summary</h5>
    <div class="form-group my-4">
        <textarea class="form-control form-textarea" rows="5" id="comment" ></textarea>
        <label class="form-control-placeholder" for="comment">Comment:</label>
    </div>
    <!-- <h5>Career Objective</h5>
    <div class="form-group my-4">
        <textarea class="form-control form-textarea" rows="5" id="comment" ></textarea>
        <label class="form-control-placeholder" for="comment">Comment:</label>
    </div> -->
  </div>
  <div class="tab" id="exp">
    <h5>Work Experience:</h5>
   <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">Company Name: </label>
                <input type="text" class="form-control" placeholder="Enter Company Name" id="exp_company" name="exp_company[]">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">Designation: </label>
                <input type="text" class="form-control" placeholder="Enter Designation" id="exp_designation" name="exp_designation[]">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">From: </label>
                <input type="date" class="form-control"  id="exp_from" name="exp_from[]">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="email">To: </label><a class="btn btn-info plus-btn" onclick="addExp()">+</a>
                <input type="date" class="form-control"  id="exp_to" name="exp_to[]">
            </div>
        </div>
    </div>
  </div>
  <div class="tab"><h5>Language Known:</h5>
    <div class="row">
        <div class="col-md-3"><input type="checkbox" name="hindi"><label> Hindi</label></div>
        <div class="col-md-3"><input type="checkbox" name="hindi_r" value="1"><label> Read</label></div>
        <div class="col-md-3"><input type="checkbox" name="hindi_w" value="1"><label> Write</label></div>
        <div class="col-md-3"><input type="checkbox" name="hindi_s" value="1"><label> Speak</label></div>
    </div>
     <div class="row">
         <div class="col-md-3"><input type="checkbox" name="english"><label> English</label></div>
        <div class="col-md-3"><input type="checkbox" name="english_r"><label> Read</label></div>
        <div class="col-md-3"><input type="checkbox" name="english_w"><label> Write</label></div>
        <div class="col-md-3"><input type="checkbox" name="english_s"><label> Speak</label></div>
    </div>
     <div class="row">
        <div class="col-md-3"><input type="checkbox" name="gujrati"><label> Gujarati</label></div>
        <div class="col-md-3"><input type="checkbox" name="gujrati_r"><label> Read</label></div>
        <div class="col-md-3"><input type="checkbox" name="gujrati_w"><label> Write</label></div>
        <div class="col-md-3"><input type="checkbox" name="gujrati_s"><label> Speak</label></div>
    </div>
  </div>
  <div class="tab"><h5>Technologies you know</h5>
    <div class="row">
        <div class="col-md-3"><input type="checkbox" name="php"><label> PHP</label></div>
        <div class="col-md-3"><input type="radio" name="php_tech"><label> Beginer</label></div>
        <div class="col-md-3"><input type="radio" name="php_tech"><label> Mideator</label></div>
        <div class="col-md-3"><input type="radio" name="php_tech"><label> Expert</label></div>
    </div>
     <div class="row">
         <div class="col-md-3"><input type="checkbox" name="mysql"><label> Mysql</label></div>
        <div class="col-md-3"><input type="radio" name="mysql_tech"><label> Beginer</label></div>
        <div class="col-md-3"><input type="radio" name="mysql_tech"><label> Mideator</label></div>
        <div class="col-md-3"><input type="radio" name="mysql_tech"><label> Expert</label></div>
    </div>
     <div class="row">
        <div class="col-md-3"><input type="checkbox" name="laravel"><label> Laravel</label></div>
        <div class="col-md-3"><input type="radio" name="laravel_tech"><label> Beginer</label></div>
        <div class="col-md-3"><input type="radio" name="laravel_tech"><label> Mideator</label></div>
        <div class="col-md-3"><input type="radio" name="laravel_tech"><label> Expert</label></div>
    </div>
    <div class="row">
        <div class="col-md-3"><input type="checkbox" name="oracle"><label> Oracle</label></div>
        <div class="col-md-3"><input type="radio" name="oracle_tech"><label> Beginer</label></div>
        <div class="col-md-3"><input type="radio" name="oracle_tech"><label> Mideator</label></div>
        <div class="col-md-3"><input type="radio" name="oracle_tech"><label> Expert</label></div>
    </div>
  </div>
  <div class="tab" id="ref">
    <h5>Referance Contact:</h5>
   <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Name: </label>
                <input type="text" class="form-control" placeholder="Enter Name" id="ref_name" name="ref_name[]">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Contact: </label>
                <input type="text" class="form-control" placeholder="Enter Contact" id="ref_contact" name="ref_contact[]">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Relation: </label><a class="btn btn-info plus-btn" onclick="addRel()">+</a>
                <input type="text" class="form-control" placeholder="Enter Relation" id="ref_rel" name="ref_rel[]">
            </div>
        </div>
    </div>
  </div>
  <div class="tab">
    <h5>Preferances:</h5>
   <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Preffered Location: </label>
                <select class="form-control" name="prefered_location">
                  <option>Select</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Notice Period: </label>
                <input type="text" class="form-control" placeholder="Enter notice period" id="notice" name="notice[]">
                <label for="email">Expected CTC: </label>
                <input type="text" class="form-control" placeholder="Enter Expected CTC" id="exp_ctc" name="exp_ctc[]">
                <label for="email">Current CTC: </label>
                <input type="text" class="form-control" placeholder="Enter Current CTC" id="curr_ctc" name="curr_ctc[]">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label for="email">Department: </label>
                <select class="form-control" name="department">
                  <option>Select</option>
                </select>
            </div>
        </div>
    </div>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
@endsection
@section('scripts')

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  console.log(n);
    $('.error').remove();
    var jsonobj = [];count1 = 0; step1 = 0;
    $('#step1').find('input, select, textarea').each(function() {
       
        if($(this).attr('name') == 'optradio'){
          check = $('input[name=optradio]:checked').val();
          if(check == undefined){
            $('#'+$(this).attr('name')).remove();
             $(this).closest('div').after("<p class='error' id='"+$(this).attr('name')+"'>"+$(this).attr('name')+" is required!</p>");
             count1= 1;
          }
          data[$(this).attr('name')] = $('input[name=optradio]:checked').val()
        }else{

          if($(this).val() != ''){
            data[$(this).attr('name')] = $(this).val();
          }else{
            $(this).closest('div').after("<p class='error' id='"+$(this).attr('name')+"'>"+$(this).attr('name')+" is required!</p>");
            console.log($(this).attr('id')+" is required!");
            count1 = 1;
            // return false;
          }
        }
        jsonobj.push(data);
      });
    console.log(jsonobj);
    if(count1 == 1){
      return false;
    }else{
       $.ajax({
          url : "{{url('next-step-1')}}",
          type : 'POST',
          data : 
          success:function(res){
              $('#template_data').html('');
              $('#template_data').append(res);
          }
       })
    }
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function addExp(){
   $('#exp').append('<div class="row"><div class="col-md-3"><div class="form-group"><label for="email">Company Name: </label><input type="text" class="form-control" placeholder="Enter Company Name" id="email"></div></div><div class="col-md-3"><div class="form-group"><label for="email">Designation: </label><input type="text" class="form-control" placeholder="Enter Designation" id="email"></div></div><div class="col-md-3"><div class="form-group"><label for="email">From: </label><input type="date" class="form-control"  id="email"></div></div><div class="col-md-3"><div class="form-group"><label for="email">To: </label><input type="date" class="form-control"  id="email"></div></div></div>');
}

function addRel(){
    $('#ref').append('<div class="row"><div class="col-md-4"><div class="form-group"><label for="email">Name: </label><input type="text" class="form-control" placeholder="Enter Name" id="email"></div></div><div class="col-md-4"><div class="form-group"><label for="email">Contact: </label><input type="text" class="form-control" placeholder="Enter Contact" id="email"></div></div><div class="col-md-4"><div class="form-group"><label for="email">Relation: </label><input type="text" class="form-control" placeholder="Enter Relation" id="email"></div></div></div>')
}
</script>
@stop
