<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    public function index(){
        $footer = Footer::find(1);
        return view('admin.footer.index',compact('footer'));
    }

    public function store(Request $request){
        $footer_id = $request->id;
        Footer::findOrFail($footer_id)->update([
            'logo' => $request->logo,
            'twitter'  => $request->twitter,
            'facebook'  => $request->facebook,
            'instagram'  => $request->instagram,
            'linkedin'  => $request->linkedin,
            'copyright_by'  => $request->copyright_by,
            'designed_by'  => $request->designed_by,
        ]);
        return redirect()->route('admin.updated.footer');
    }
}
