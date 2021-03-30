@extends('layout.layouts')
@section('content')

<div class="content">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>
        </div>
        <div class="card card-user">
          <div class="image">
            <img src="{{asset('bootstrap/img/damir-bosnjak.jpg')}}" alt="...">
          </div>
          <div class="card-body">
            <div class="author">
              <a href="#">
                <img class="avatar border-gray" src="{{asset('bootstrap/img/mike.jpg')}}" alt="...">
                <h5 class="title">Chet Faker</h5>
              </a>
              <p class="description">
                @chetfaker
              </p>
            </div>
            <p class="description text-center">
              "I like the way you work it <br>
              No diggity <br>
              I wanna bag it up"
            </p>
          </div>
          <div class="card-footer">
            <hr>
            <div class="button-container">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-6 ml-auto">
                  <h5>12<br><small>Files</small></h5>
                </div>
                <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                  <h5>2GB<br><small>Used</small></h5>
                </div>
                <div class="col-lg-3 mr-auto">
                  <h5>24,6$<br><small>Spent</small></h5>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-md-8">
        <div class="card card-user">
          <form id="regForm">
            <div class="card-header">
              <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body" id="signup">
              <form>
                <div class="tab">
                  <div class="row d-flex ">
                    <div class="form-group col-md-6 ">
                      <label>First Name</label>
                      <input type="text" class="form-control" placeholder="Company" value="Ha" oninput="this.className = ''" name="fname">
                    </div>
                    <div class="form-group col-md-6 ">
                      <label>Last Name</label>
                      <input type="text" class="form-control" placeholder="Last Name" value="Kiet" oninput="this.className = ''" name="fname">
                    </div>
                    {{-- <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                      </div>
                    </div> --}}
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" value="Kietha1921">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label> DOB</label>
                        <input type="datetime" class="form-control" placeholder="DOB" value="D/M/Y">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label>Gender</label>
                        <input type="text" class="form-control" placeholder="Gender" value="Male">
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" placeholder="Email Address" value="kiet.ht1921@sinhvien.hoasen.edu.vn">
                    </div> 
                    <div class="form-group col-md-12">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>District</label>
                        <input type="text" class="form-control" placeholder="District" value="GoVap">
                      </div>
                    </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>City</label>
                          <input type="text" class="form-control" placeholder="City" value="HoChiMinh">
                        </div>
                      </div>
                      <div class="col-md-4 pl-1">
                        <div class="form-group">
                          <label>Country</label>
                          <input type="text" class="form-control" placeholder="Country" value="VietNam">
                        </div>
                      </div>
                  </div>
                  
                </div>
                </div>
                  
                {{-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group ">
                      <label>Address</label>
                      <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                    </div>
                  </div>
                </div> --}}
                {{-- <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>About Me</label>
                      <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                    </div>
                  </div>
                </div> --}}
                <div class="row tab">
                  <div class="row d-flex ">
                    <div class="form-group col-md-6 ">
                      <label>Education</label>
                      <input type="text" class="form-control" placeholder="Education" value="University" oninput="this.className = ''" name="fname">
                    </div>
                    <div class="form-group col-md-6 ">
                      <label>Major</label>
                      <input type="text" class="form-control" placeholder="Major" value="Informaion Technology" oninput="this.className = ''" name="fname">
                    </div>
                    <div class="form-group col-md-12">
                      <label>Certificate</label>
                      <input type="text" class="form-control" placeholder="Certificate" value="IELTS 7.5">
                    </div> 
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" placeholder="Email Address" value="kiet.ht1921@sinhvien.hoasen.edu.vn">
                    </div> 
                    <div class="form-group col-md-12">
                      <label>Experience</label>
                      <input type="text" class="form-control" placeholder="Experience" value="">
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Skill</label>
                          <textarea class="form-control textarea">Word </textarea>
                        </div>
                      </div>                  
                  </div>
                </div>
                <div class="row tab">
                  <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
                  <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
                </div>
                <div class="row tab">
                  <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
                  <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
                </div>
                <div class="row">
                  {{-- <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                  </div> --}}
                  <div style="overflow:auto;" id="nextprevious">
                    <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
                  </div>
                </div>
              </form>
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</div>

@endsection