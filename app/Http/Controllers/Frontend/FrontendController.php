<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMailNotifiable;
use App\Mail\SendContactInfo;
use App\Models\Contact\Contact;
use App\Models\Content\Content;
use App\Models\Currency\Currency;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    protected $currency;

    function __construct(Currency $currency,Content $content)
    {
        $this->currency = $currency;
        $this->content = $content;
    }


    public function homepage()
    {
        $conversionvalue = [];

        $url = "https://api.fastforex.io/fetch-all?api_key=6a4dd475f3-19749f3e78-qyk3dl";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        $response = curl_exec($ch);
        $arr_result = json_decode($response);

        foreach($arr_result->results as $key => $data) {

            $conversionvalue[$key] = $data;
        }

        $content = $this->content->latest()->first();
        return view('frontend.home', compact('conversionvalue','content'));
    }

    public function sendcontact(Request $request)
    {
        if($contact = Contact::create($request->all())) {
            return redirect()->back()->withSuccess(trans('Detail Send Successfully'));
        }
    }



}
