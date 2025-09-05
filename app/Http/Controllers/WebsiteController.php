<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebsiteController extends Controller
{
    public function index()
    {
        $websites = Website::where('user_id', Auth::user()->id)->get();
        // dd($websites);
        return inertia('Website/Index',[
            'websites' => $websites
        ]);
    }
    public function create()
    {
        return inertia('Website/Create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => ['required'],
            'url' => ['required'],
        ]);

        $data['user_id'] = auth()->user()->id;
        $data['is_online'] = false;

        Website::create($data);

        return to_route('web.index');
    }
    public function about()
    {
        return inertia('About');
    }
    public function destroy($id)
    {
        // dd($id);
        $website = Website::findOrFail($id);
        $website->delete();

        return to_route('web.index');
    }
}
