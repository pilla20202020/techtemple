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
        $dow = $this->currency->where('type','dow')->latest()->first();
        $nasdaq = $this->currency->where('type','nasdaq')->latest()->first();
        $ftse = $this->currency->where('type','ftse')->latest()->first();
        $usd = $this->currency->where('type','usd')->latest()->first();
        $euro = $this->currency->where('type','euro')->latest()->first();
        $gold = $this->currency->where('type','gold')->latest()->first();

        $content = $this->content->latest()->first();
        return view('frontend.home', compact('dow','gold','nasdaq','ftse','usd','euro','content'));
    }

    public function sendcontact(Request $request)
    {
        if($contact = Contact::create($request->all())) {
            return redirect()->back()->withSuccess(trans('Detail Send Successfully'));
        }
    }

}
