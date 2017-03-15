<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    //

     private $user;
public function __construct(User $user)
{
        $this->middleware('auth');
    
$this->user = $user;
}
       

    public function index()
    {
        
        $user = Auth::user(); 
               return view('cliente.userdata.index')->with('user',$user);//view('admin.produtos.index',compact('produtos'));

    }

    

    public function edit($id)
    {
        $user = Auth::user(); 
        
        $user = $this->user->find($id);
        return view('cliente.userdata.edit',compact('user'));
    }

    public function update($id, Request $request)
    {
        $user = Auth::user(); 
        
        $this->user->find($id)->update($request->all());
        return redirect()->route('cliente.userdata.index');
    }

    
}
