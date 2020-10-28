<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Vlog;

use Illuminate\Http\Request;

class VlogController extends Controller
{
    public function index()
    {
        
        return view('vlog');
    }
    public function add(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
     
          ]);
       $articles = new vlog;
       $articles->title = $request->input('title');
       $articles->description = $request->input("description");
       

      
        $articles->save();
     
       return redirect(route('vlog.show'))->with('info','Article saved succesfully!!');
    }
    public function show()
    {
        $vlogs = vlog::all();
        $vlogs = vlog::orderBy('completed')->get();

        return view('show', compact('vlogs'));
    }

    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')){
            $filename= $request->image->getClientOriginalName();
            $request->image->storeAs('images', $filename,'public');
            auth()->User()->update(['avatar' => $filename]);
            session()->put('message' ,'image uploaded');
        }
      
      
    }
    public function edit(vlog $vlog)
    {
        return view('edit',compact('vlog'));
    }
    public function update(Request $request, vlog $vlog)
    {
        $request->validate([
            'title' => 'required | max:250',
            'description' => 'required | max:400',
        ]);
       //$todo =request()->title;
       $vlog->update(['title' => $request->title , 'description' =>$request->description]);
       
     

       return redirect(route('vlog.show'))->with('info', 'Updated');
    }

    public function delete(vlog $vlog)
    {
        $vlog->delete();
	  return redirect(route('vlog.show'))->with('info','Article deleted succesfully!!');
    }
    public function complete(vlog $vlog)
    {
         $vlog->completed=true;
         $vlog->save();
         return redirect(route('vlog.show'))->with('info', 'Article Completed Succesfully!');
     }
}
