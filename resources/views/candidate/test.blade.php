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