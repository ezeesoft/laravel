<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Genre;
use App\Models\Artist;
use App\Models\Venue;
use App\Models\Events;



use Crypt;

class AuthController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    
    public function login(Request $request)
    {
    $credentials =  $request->validate([
        'email' => 'required',
        'password' => 'required'
       ]);

       if(\Auth::attempt($credentials))
       {
        return redirect()->intended('Admin')->withSuccess('You have Successfully Logedin!!');
       }
       return redirect('/')->witherror('Login details are not valid');
   
    }

   //  public function register_view()
   //  {
   //            return view('Auth.register');
   //  }

   //  public function register(Request $request)
   //  {
   //      $request->validate([
   //          'name' => 'required',
   //          'email' => 'required|unique:users|email',
   //          'password' => 'required|confirmed|min:6'
   //         ]);

   //         User::create([
   //          'name' =>$request->name,
   //          'email' =>$request->email,
   //          'password'=>\Hash::make($request->password)
   //         ]);

   //         $data = $request->all();

   //         if(\Auth::attempt($request->only('email','password')))
   //         {
   //          return redirect('dashboard');   
   //         }
   //         return redirect('register')->witherror('error');
   //  }



   //  public function Home()
   //  {
   //      return view('layoutss.home');
   //  }


   //  public function Dash()
   //  {
   //      return view('layoutss.dashboard');
   //  }

  

    public function Logout()
    {
        \Session::flush();
        \Auth::logout();
        return redirect('');

    }


    
    public function Admin()
    {


     return view('Admin/index');
    }

    

    public function Genre()
    {
     return view('Admin/Genre');
    }
    public function GenrePost(Request $request)
    {
        $request->validate([
            'name' => 'required',
           ]);

           $admin = new Genre;
          $admin->name = $request->input('name');
          
          $admin->save();
          return view('Admin/index');
    }

    public function show()
    {
             
       $data=Genre::paginate(2);

       return view('Admin/Genre',compact('data'));
    }

    public function delete($id)
    {
        Genre::find($id)->delete();
       return redirect()->back();
    }
    public function update($id)
    {
     $data = Genre::find($id);
     
     return view('Admin/GenreEdit',compact('data'));
    }

    public function edits(Request $request,$id)
    {
     $request->validate([
             'name'=>'required',
     ]);
     
     $Admin = Genre::find($id);
     $Admin->name = $request->get('name');
   
     $Admin->update();
     return redirect('Admin')->with('status',"Data Updated Successfully");
    }

   //  Artist
    public function Artist()
    {
     return view('Admin/Artist');
    }
    public function ArtistPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
           ]);

           $Artist = new Artist;
          $Artist->name = $request->input('name');
          
          $Artist->save();
          return view('Admin/index');
    }

    public function ArtistShow()
    {
             
       $Artist=Artist::all();

       return view('Admin/Artist',compact('Artist'));
    }

    public function ArtistDelete($id)
    {
       Artist::find($id)->delete();
       return redirect()->back();
    }
    public function ArtistUpdate($id)
    {
     $data = Artist::find($id);
     
     return view('Admin/Artist',compact('data'));
    }

    public function AstistEdits(Request $request,$id)
    {
     $request->validate([
             'name'=>'required',
     ]);
     
     $Adminn = Artist::find($id);
     $Adminn->name = $request->get('name');
   
     $Adminn->update();
     return redirect('Admin')->with('status',"Data Updated Successfully");
    }



  //   Venue

  public function Venue()
  {
   return view('Admin/Venue');
  }
  public function VenuePost(Request $request)
  {
      $request->validate([
          'name' => 'required',
          'address' => 'required', 
          'contact' => 'required',
         ]);

         $Artist = new Venue;
        $Artist->name = $request->input('name');
        $Artist->address = $request->input('address');
        $Artist->contact = $request->input('contact');
        $Artist->save();
        return view('Admin/index');
  }

  public function VenueShow()
  {
           
     $Artist=Venue::all();

     return view('Admin/Venue',compact('Artist'));
  }

  public function VenueDelete($id)
  {
     Venue::find($id)->delete();
     return redirect()->back();
  }
  public function VenueUpdate($id)
  {
   $data = Venue::find($id);
   
   return view('Admin/Venue',compact('data'));
  }

  public function VenueEdits(Request $request,$id)
  {
   $request->validate([
           'name'=>'required',
   ]);
   
   $Adminn = Venue::find($id);
   $Adminn->name = $request->get('name');
   $Adminn->address = $request->get('address');
   $Adminn->contact = $request->get('contact');
   $Adminn->update();
   return redirect('Admin')->with('status',"Data Updated Successfully");
  }




  // Events

  
  public function Events()
  {
   return view('Admin/Events');
  }
  public function EventsPost(Request $request)
  {
      
     $item = new Events;
     
     $item->title = $request->input('title');
     $item->genre = $request->input('genre');
     $item->sdesc = $request->input('sdesc');
     $item->amount = $request->input('amount');
     $item->date = $request->input('date');
     $item->venue = $request->input('venue');
     if($request->file('image')){
         $file= $request->file('image');
         $filename= date('YmdHi').$file->getClientOriginalName();
         $file-> move(public_path('public/Image'), $filename);
         $item['image']= $filename;
     };
         
        $item->save();
        return view('Admin/index');
  }

  public function EventsShow()
  {
           
     $Artist=Events::all();
     $Select=Genre::all();
     $Venue=Venue::all();
     return view('Admin/Events',compact('Artist','Select','Venue'));
  }

  public function EventsDelete($id)
  {
     Events::find($id)->delete();
     return redirect()->back();
  }
  public function EventsUpdate($id)
  {
   $data = Events::find($id);
   
   return view('Admin/Events',compact('data'));
  }

  public function EventsEdits(Request $request,$id)
  {
   $request->validate([
           'name'=>'required',
   ]);
   
   $item = Events::find($id);
   $item->title = $request->input('title');
   $item->genre = $request->input('genre');
   $item->sdesc = $request->input('sdesc');
   $item->amount = $request->input('amount');
   $item->date = $request->input('date');
   $item->venue = $request->input('venue');
   if($request->file('image')){
       $file= $request->file('image');
       $filename= date('YmdHi').$file->getClientOriginalName();
       $file-> move(public_path('public/Image'), $filename);
       $item['image']= $filename;
   };
       

   $item->update();
   return redirect('/')->with('status',"Data Updated Successfully");
  }



  public function Homes()
  {
    
    $Events=Events::paginate(2);
    // $Events = Events::where('')->paginate(20);
     return view('Show.index',compact('Events'));
   

    
  }
  public function SearchPro(Request $request)
  {
     if($request->search)
     {
       $searchProduct = Events::where('title' , 'LIKE' ,'%'.$request->search.'%')->orwhere('genre' , 'LIKE' ,'%'.$request->search.'%')->orwhere('venue' , 'LIKE' ,'%'.$request->search.'%')->orwhere('date' , 'LIKE' ,'%'.$request->search.'%')->latest()->paginate(2);
      
       return view('Show.search',compact('searchProduct'));
     }else
     {
       return redirect()->back()->with('message' , 'Empty Search');
     }
  }


}
