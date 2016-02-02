<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FreeListingRequest;

class FreeListingController extends Controller
{
    //

    public function addListing(FreeListingRequest $request){

    	 print_r($request->request);

    	//return Redirect::to('/fullcat')->with('message', 'Listing added');

    }

    public function getListing() {
    	return view('portal.fullcat');
    }

}
