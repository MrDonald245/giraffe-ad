<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    public function create(Request $request) {
        return view('advertisement.redactor');
    }

    public function show(Advertisement $advertisement) {
        return view('advertisement.show', ['ad' => $advertisement]);
    }

    public function edit(Advertisement $advertisement) {
        return view('advertisement.redactor', ['ad' => $advertisement]);
    }

    public function delete(Advertisement $advertisement) {
        $advertisement->delete();

        return redirect(route('home_index'));
    }

    public function save(Request $request) {
        $ad = new Advertisement();

        $ad->title = $request->title;
        $ad->description = $request->description;
        $ad->user()->associate(Auth::user());
        $ad->save();

        return redirect(route('ad.show', ['advertisement' => $ad]));
    }
}
