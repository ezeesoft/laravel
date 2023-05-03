@include('Admin.header')

      <div class="container">
         <h2>Events</h2><hr>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                   ADD NEW EVENTS
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Events</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                       <div class="row">
                        <form method="post" action="{{url('EventsPost')}}" enctype="multipart/form-data">@csrf
                       <div class="col-md-6" style="float: left;">
                        <div class="form-group">
                            <label>Image :</label>
                            <input type="file" placeholder="Select Image" name="image" class="form-control" required>
                        </div>
                       
                      
                        <div class="form-group">
                            <label>Title :</label>
                            <input type="text" placeholder="Enter New Genre" name="title" class="form-control" required>
                        </div>
                       
                        
                        <div class="form-group">
                            <label>Genre :</label>
                           <select name="genre" id="" class="form-control">
                           <option value="">--Select Genre--</option>
                           @foreach($Select as $datas)
                            <option value="{{$datas->name}}">{{$datas->name}}</option>
                            @endforeach
                           </select>
                        </div>
                    
                       
                        
                        <div class="form-group">
                            <label>Short Discription :</label>
                            <input type="text" placeholder="Enter Short Description" name="sdesc" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-md-6"  style="float:right">
                        <div class="form-group">
                            <label>Amount :</label>
                            <input type="text" placeholder="Enter Amount" name="amount" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Date :</label>
                            <input type="date" placeholder="Select Date" name="date" class="form-control" required>
                        </div>
                      
                      
                        <div class="form-group">
                            <label>Venue :</label>
                           <select name="venue" id="" class="form-control">
                           <option value="">--Select Genre--</option>
                           @foreach($Venue as $datas)
                            <option value="{{$datas->name}}">{{$datas->name}}</option>
                            @endforeach
                           </select>
                        </div>
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
                    </div>
 


                    <div class="card mt-5">
                                        <h1 style="text-align: center;">EVENTS RECORDS </h1>
                    <table border=2  class="table table-bordered">
                        <tr style="text-align: center;">
                            <th>ID</th>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th>Short Discription</th>
                            <th>Amount</th>
                            <th>Venue</th>   
                            <th>Date</th>
                         <th colspan=2>Action</th>
                    </tr>

                        @foreach($Artist as $data)
                        <tr style="text-align: center;">
                        <td>{{$data->id}}</td>
                        <td><img src="{{ url('public/Image/'.$data->image) }}"
                     style="height: 100px; width: 100px;"></td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->genre}}</td>
                    <td>{{$data->sdesc}}</td>
                    <td>{{$data->amount}}</td>
                    <td>{{$data->venue}}</td>
                    <td>{{$data->date}}</td>
                    <td><a href="{{url('EventsDelete/')}}/{{$data->id}}"><button class="btn btn-danger">Delete</button></a></td>
                    <td><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data->id ;?>">Edit</a></td>
                                                 
                    <div class="modal fade" id="exampleModal<?php echo $data->id ;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit  Artist</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                        <form method="post" action="{{ url('EventsEdits/'.$data->id)}}}}" enctype="multipart/form-data">@csrf
                            <div class="col-md-6" style="float:left">
                                 <div class="form-group">
                            <span><img src="{{ url('public/Image/'.$data->image) }}"
                     style="height: 100px; width: 100px;"><?php echo $data->image ;?></span><br>
                            <label>Image :</label>
                            <input type="hidden" value="<?php echo $data->id ;?>" name="id">
                            <input type="file" name="image" value="<?php echo $data->image ;?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Title :</label>
                            <input type="text" value="<?php echo $data->title ;?>"  name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Genre :</label>
                            <input type="text" value="<?php echo $data->genre ;?>" name="genre" class="form-control" required>
                        </div>
                        </div>
                        <div class="col-md-6" style="float:right">
                        <div class="form-group">
                            <label>Short Description :</label>
                            <input type="text" value="<?php echo $data->sdesc ;?>"  name="sdesc" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Amount :</label>
                            <input type="text" value="<?php echo $data->amount ;?>" name="amount" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>date :</label>
                            <input type="date" value="<?php echo $data->date ;?>"  name="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Venue :</label>
                            <input type="text" value="<?php echo $data->venue ;?>"  name="venue" class="form-control" required>
                        </div>
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
                    </div>
                
                </tr>
                    @endforeach
                    </div>
        
                    

      </div>


  
      @include('Admin.footer')



