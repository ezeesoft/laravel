@include('Admin.header')

      <div class="container">
         <h2>Venue</h2><hr>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   ADD NEW VENUE
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Venue</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                       
                        <form method="post" action="{{url('VenuePost')}}">@csrf
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="text" placeholder="Enter New Venue" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" placeholder="Enter Address " name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number :</label>
                            <input type="text" placeholder="Enter  Contact Number" name="contact" class="form-control" required>
                        </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary">
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
 


                    <div class="card mt-5">
                                        <h1 style="text-align: center;">VENUE RECORDS </h1>
                    <table border=2  class="table table-bordered">
                        <tr style="text-align: center;">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th colspan=2>Action</th>
                    </tr>

                        @foreach($Artist as $data)
                        <tr style="text-align: center;">
                        <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->contact}}</td>
                    <td><a href="{{url('VenueDelete/')}}/{{$data->id}}"><button class="btn btn-danger">Delete</button></a></td>
                    <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data->id ;?>">Edit</a></td>
                                                 
                    <div class="modal fade" id="exampleModal<?php echo $data->id ;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit  Venue</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                       
                        <form method="post" action="{{ url('VenueEdits/'.$data->id)}}}}">@csrf
                            
                        <div class="form-group">
                            <label>Name :</label>
                            <input type="hidden" value="<?php echo $data->id ;?>" name="id">
                            <input type="text" value="<?php echo $data->name ;?>" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                           
                            <input type="text" value="<?php echo $data->address;?>"   name="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Contact Number :</label>
                           
                            <input type="text" value="<?php echo $data->contact ;?>"  name="contact" class="form-control" required>
                        </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <input type="submit" Value="Update" class="btn btn-primary">
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
                
                </tr>
                    @endforeach
                    </div>
        
                    

      </div>


  
      @include('Admin.footer')



