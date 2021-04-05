@extends('layouts.app')
@section('style')
<link href="{!! asset('assets/css/parsley.css') !!}" rel="stylesheet" type="text/css" />
<style type="text/css">
    .parsley-required{
        list-style: none;
        color: #f28484;
    }
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
<form id="regForm" action="{{url('next-step-1')}}" method="post" enctype="multipart/form-data">
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
	                        <input type="file" class="custom-file-input" id="customFile" name="profile_img" value="" data-parsley-required="true" accept="image/*" >
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
	                        <input type="file" class="custom-file-input" id="cover_pic" name="cover_img" value="" data-parsley-required="true" accept="image/*" >
	                    </div>
	                </div>
	            </div>
	        </div>
	        <p class="mt-4 text-medium text-dark font-18">Choose your status</p>
	        <div class="form-check-inline mr-3" style="margin-bottom: 20px;">
	            <input type="radio" class="form-check-input" name="status" id="open_opportunity" value="Open for opportunity" @if(Auth::user()->status == 'Open for opportunity') checked @endif>
	            <label class="form-check-label" for="open_opportunity">
	                Open for opportunity 
	            </label>
              <input type="radio" class="form-check-input" name="status" id="none" value="none" @if(Auth::user()->status == 'none') checked @endif>
              <label class="form-check-label" for="none">
                  None
              </label>
	        </div>
	        <!-- <div class="form-check-inline mr-3">
	            
	        </div> -->
	        <div class="form-group mb-4 mt-4">
	            <input type="text" name="fname" class="form-control form-custom" id="fname"  value="{{Auth::user()->fname}}" data-parsley-required="true">
	            <label class="form-control-placeholder" for="fname">First Name</label>
	        </div>
	        <div class="form-group mb-4 mt-4">
	            <input type="text" name="lname" class="form-control form-custom" id="lname"  value="{{Auth::user()->lname}}" data-parsley-required="true">
	            <label class="form-control-placeholder" for="lname">Last Name</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="text" name="prefroles" class="form-control form-custom" id="designation" @if(Auth::user()->job_title != NULL) value="{{Auth::user()->job_title}}" @else value="" @endif data-parsley-required="true">
	            <label class="form-control-placeholder" for="designation">Designation</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4" data-parsley-required="true">
	            <input type="text" name="prefloc" class="form-control form-custom" id="location" @if(Auth::user()->prefloc != NULL) value="{{Auth::user()->prefloc}}" @else value="" @endif>
	            <label class="form-control-placeholder" for="location">Location</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="tel" name="mobile_no" class="form-control form-custom" id="phone_number"  value="{{Auth::user()->mobile_no}}" data-parsley-required="true">
	            <label class="form-control-placeholder" for="phone_number" >Phone number</label>
	        </div>
	        <!--  -->
	        <div class="form-group mb-4">
	            <input type="text" name="email" class="form-control form-custom" id="email"  value="{{Auth::user()->email}}" disabled="true" data-parsley-required="true">
	            <label class="form-control-placeholder" for="email">Email</label>
	        </div>
	    </div>
        <!--  -->
        <!-- <div class="float-right py-2">
            <button type="submit" class="btn blue-btn text-white">Save</button>
        </div> -->
    <!-- </div> -->
    
  </div>
  <div class="tab">
    <div id="step2">
      <div class="form-group mb-4 mt-4">
          <input type="date" name="birth_date" class="form-control form-custom" id="dob"  value={{date('Y-m-d')}}>
          <label class="form-control-placeholder" for="name">Date of Birth</label>
      </div>
      <div class="form-group mb-4">
          <input type="text" name="github" class="form-control form-custom" id="github_url" @if(Auth::user()->github != NULL) value="{{Auth::user()->github}}" @else value="" @endif data-parsley-required="true">
          <label class="form-control-placeholder" for="github_url">Github URL</label>
      </div>
      <!--  -->
      <div class="form-group mb-4">
          <input type="text" name="linkedin" class="form-control form-custom" id="linkedin_url" @if(Auth::user()->linkedin != NULL) value="{{Auth::user()->linkedin}}" @else value="" @endif data-parsley-required="true">
          <label class="form-control-placeholder" for="linkedin_url">Linkedin URL</label>
      </div>
      <!-- <h5>Summary</h5> -->
      <div class="form-group my-4">
          <textarea class="form-control form-textarea" rows="5" id="comment" name="summary" >@if(Auth::user()->summary != NULL) {{Auth::user()->summary}} @endif</textarea>
          <label class="form-control-placeholder" for="comment">Summary:</label>
      </div>
    </div>
    <!-- <h5>Career Objective</h5>
    <div class="form-group my-4">
        <textarea class="form-control form-textarea" rows="5" id="comment" ></textarea>
        <label class="form-control-placeholder" for="comment">Comment:</label>
    </div> -->
</div>
<div class="tab">
    <div id="step2">
      <div class="form-group mb-4 mt-4">
          <input type="text" name="mother_name" class="form-control form-custom" id="mother_name"  value="">
          <label class="form-control-placeholder" for="mother_name">Mother Name</label>
      </div>
      <div class="form-group mb-4 mt-4">
          <input type="text" name="father_name" class="form-control form-custom" id="father_name"  value="">
          <label class="form-control-placeholder" for="father_name">Father Name</label>
      </div>
      <div class="form-group mb-4 mt-4">
          <input type="text" name="mother_occupation" class="form-control form-custom" id="mother_occupation"  value="">
          <label class="form-control-placeholder" for="mother_occupation">Mother Occupation</label>
      </div>
      <div class="form-group mb-4 mt-4">
          <input type="text" name="father_occupation" class="form-control form-custom" id="father_occupation"  value="">
          <label class="form-control-placeholder" for="father_occupation">Father Occupation</label>
      </div>
      <div class="form-group mb-4 mt-4">
          <input type="text" name="address" class="form-control form-custom" id="address"  value="">
          <label class="form-control-placeholder" for="address">Address</label>
      </div>
      <div class="form-group mb-4 mt-4">
          <input type="text" name="city" class="form-control form-custom" id="city"  value="">
          <label class="form-control-placeholder" for="city">City</label>
      </div>
      <div class="form-group mb-4 mt-4">
          <input type="text" name="state" class="form-control form-custom" id="state"  value="">
          <label class="form-control-placeholder" for="state">State</label>
      </div>
      <div class="form-group mb-4 mt-4">
          <input type="text" name="country" class="form-control form-custom" id="country"  value="">
          <label class="form-control-placeholder" for="country">Country</label>
      </div>
      
    </div>
    <!-- <h5>Career Objective</h5>
    <div class="form-group my-4">
        <textarea class="form-control form-textarea" rows="5" id="comment" ></textarea>
        <label class="form-control-placeholder" for="comment">Comment:</label>
    </div> -->
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
   <!--  <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span> -->
  </div>
</form>
@endsection
@section('scripts')
<script src="{{ asset('assets/js/parsley.js') }}"></script>
<!-- <script type="text/javascript">
     $('#login_form').parsley();
</script> -->
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
    var jsonobj = [];count1 = 0; step1 = 0; data = {}; data1 = {};count2 = 0; jsonobj1 = [];
    $('#step1').find('input, select, textarea').each(function() {
        if($(this).attr('name') == 'status'){
          check = $('input[name=status]:checked').val();
          // console.log(check);
          if(check == undefined || check == ''){
            $('#'+$(this).attr('name')).remove();
             $(this).closest('div').after("<p class='error' id='"+$(this).attr('name')+"'>"+$(this).attr('name')+" is required!</p>");
             count1= 1;
          }
          data[$(this).attr('name')] = $('input[name=status]:checked').val()
        }else{
          if($(this).val() != ''){
            data[$(this).attr('name')] = $(this).val();
          }else{
            $(this).closest('div').after("<p class='error' id='"+$(this).attr('name')+"'>"+$(this).attr('id')+" is required!</p>");
            console.log($(this).attr('id')+" is required!");
            count1 = 1;
            // return false;
          }
        }
      });
    jsonobj = {
      data
    }
    console.log(jsonobj);
    if(count1 == 1){
      $('#step1').parsley();
      return false;
    }else{
    //   $('#step2').find('input, select, textarea').each(function() {
    //       if($(this).val() != ''){
    //         data1[$(this).attr('name')] = $(this).val();
    //       }else{
    //         $(this).closest('div').after("<p class='error' id='"+$(this).attr('name')+"'>"+$(this).attr('id')+" is required!</p>");
    //         console.log($(this).attr('id')+" is required!");
    //         count2 = 1;
    //       }
    //   });
    // jsonobj1 = {
    //   data1
    // }
    //   if(count2 == 1){
    //     $('#step2').parsley();
    //     return false;
    //   }
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
