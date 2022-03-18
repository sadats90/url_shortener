<?php


namespace App\Http\Controllers;
use App\Models\Short;
use Auth;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class ShortController extends Controller
{
    function index()
    {
        $short_urls = Short::all();
        return view('short.index', ['short_urls'=>$short_urls]);
    }

    function short(Request $request)

    {
        $ip = \Request::ip();
        // dd($ip);
        $user = Auth::user()->id;
     
        
        $a = new Short;  
        $a->original_url = $request->input('original_url') ;
        $a->short_url = '';
        $a->user_id = $user;
        $a->save();
        
        if($a)
        {
            $short_url = Str::random(6);
            // base_convert($a->id,10,36);
         
            $a->update([
                'short_url' => $short_url
            ]);

            return back();
        }
        
        return back();
        
    }


    function showUrl($url)
    {   
      $short_url = Short::where('short_url',$url)->first();
      if($short_url)
      {
          return redirect()->to(url($short_url->original_url));
      }
    //   return redirect()->to(url('/'));

      
    }
}
