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

        $url1 = "http://api.marketstack.com/v1/eod?access_key=e21b16238d39c190a21cbfd41f535b67&symbols=dow";
        $ch1 = curl_init();
        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch1, CURLOPT_URL, $url1);
        $response1 = curl_exec($ch1);
        $arr_result1 = json_decode($response1);
        foreach($arr_result1->data as $key => $data) {
            if($key == 0)
            $conversionvalue1 = $data;
        }
        $dow = json_decode(json_encode($conversionvalue1), true);

        $url2 = "http://api.marketstack.com/v1/eod?access_key=e21b16238d39c190a21cbfd41f535b67&symbols=gold";
        $ch2 = curl_init();
        curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch2, CURLOPT_URL, $url2);
        $response2 = curl_exec($ch2);
        $arr_result2 = json_decode($response2);
        foreach($arr_result2->data as $key => $data) {
            if($key == 0)
            $conversionvalue2 = $data;
        }
        $gold = json_decode(json_encode($conversionvalue2), true);




        $content = $this->content->latest()->first();
        return view('frontend.home', compact('conversionvalue','content','dow','gold'));
    }

    public function sendcontact(Request $request)
    {
        if($contact = Contact::create($request->all())) {
            return redirect()->back()->withSuccess(trans('Detail Send Successfully'));
        }
    }



}
