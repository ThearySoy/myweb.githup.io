<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeInformation;

class AdminHomeInformationController extends Controller
{
    public function index(){
        $homepage = HomeInformation::find(1);
        return view('admin.homepage.index',compact('homepage'));
    }

    public function store(Request $request){
        $homePageId = $request->id;
        HomeInformation::findOrFail($homePageId)->update([
            'short_title'  => $request->short_title,
            'long_title'  => $request->long_title,
            'url'  => $request->url,
        ]);
        return redirect()->route('admin.home.page.information');
    }

}
