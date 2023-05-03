@include('Show.header')



<div class="container bg-light">
   
    <div class="row">
        <h4>20 Events </h4>
    @foreach($Events as $data)
                    <div class="card mt-3 ml-3 mb-3 mr-3" style="width: 18rem;">
                    <img src="{{ url('public/Image/'.$data->image) }}"  class="card-img-top mt-2" 
                    style="height: 100px; width: 260px;">
                
                <div class="card-body">
                    <h5 class="card-title">{{$data->title}}</h5>
                    <p class="card-text">{{$data->sdesc}}</p>
                    <p>Genre :<b> {{$data->genre}}</b></p>
                    <p>Venue :<b> {{$data->venue}}</b></p>
                    <p>Amount :<b> {{$data->amount}}</b></p>
                    <!-- <center><a href="#" class="btn btn-primary">Go somewhere</a></center> -->
                </div>
                </div>
                
                @endforeach
                <div class="your-paginate">
                    {{$Events->links()}}
                 </div>
                 

    </div>
  
   
     
    </div>
    








@include('Show.footer')
