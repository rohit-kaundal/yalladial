<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FreeListingController extends Controller
{
    //

    public function addListing(){

    	Redirect::to('/fullcat');

    }

    public function getListing() {
    	return view('portal.fullcat');
    }

}
