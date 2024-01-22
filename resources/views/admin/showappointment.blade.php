
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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

            <div align="center" style="padding:100px;">
                <table>
                    <tr style="background-color:black" >
                        <th style="padding:10px;">Customer Name</th>
                        <th style="padding:10px;">Email</th>
                        <th style="padding:10px;">Phone</th>
                        <th style="padding:10px;">Doctor Name</th>
                        <th style="padding:10px;">Date</th>
                        <th style="padding:10px;">Message</th>
                        <th style="padding:10px;">Status</th>
                        <th style="padding:10px;">Approve</th>
                        <th style="padding:10px;">Cancel</th>
                        
                    </tr>
                    @foreach($data as $appointer)
                    <tr align="center" style="padding:100px; background:grey;" >
                        <td style="padding:8px">{{$appointer->name}}</td>
                        <td style="padding:8px">{{$appointer->email}}</td>
                        <td style="padding:8px">{{$appointer->phone}}</td>
                        <td style="padding:8px">{{$appointer->doctor}}</td>
                        <td style="padding:8px">{{$appointer->date}}</td>
                        <td style="padding:8px">{{$appointer->message}}</td>
                        <td style="padding:8px">{{$appointer->status}}</td>
                        <td style="padding:8px">
                        <a href="{{'approved',$appointer->id}}" class="btn btn-success">Approved</a>
                        </td>
                        <td style="padding:8px">
                        <a href="" class="btn btn-danger">Canceled</a>
                        </td>


                    </tr>
                    @endforeach
                </table>
            </div>

        </div>
    <!-- plugins:js -->
    @inlude('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>