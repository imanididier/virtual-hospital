
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;    
        }
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            
           
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper" >
           
            <div class="container" align="center" style="padding: top 100px;">


                @if(session()->has('message'))

                    <div class="alert alert-success">
                        
                        {{session()->get('message')}}
                        <button type="button" class="close" data-dismiss="alert">
                            X
                        </button>

                    </div>
                @endif
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding:15px;">
                        <label>Doctor Name </label>
                        <input type="text" name="name"  style= "color:black; "placeholder="write Doctors name" required="" >
                    </div>
                    <div style="padding: 15px;">
                        <label>Phone Number </label>
                        <input type="number" name="number"  style= "color:black; "placeholder="write Doctors phone number" required="">
                    </div>
                    <div style="padding: 15px;">
                        <label>Doctor Email </label>
                        <input type="email" name="email"  style= "color:black; "placeholder="write Doctors email " required="">
                    </div>
                    <div style="padding: 15px;">
                        <label>Speciality </label>
                        <select style="color:black; width: 200px;" name="speciality" required="">
                            <option>-Select--</option>
                            <option value="skin">Skin</option>
                            <option value="heart">Heart</option>
                            <option value="eye">Eye</option>
                            <option value="dentist">Dentist</option>
                            
                        </select>
                    </div>
                    <div style="padding: 15px;">
                        <label>Doctor Image </label>
                        <input type="file" name="file"  required="" >
                    </div>
                    <div style="padding: 15px;">
                        
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @inlude('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>