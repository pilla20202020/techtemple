@extends('frontend.layouts.app')

@section('content')

    <div class="container frame">
        <header>

            @if(Illuminate\Support\Facades\Session::has('success'))
                <div class="alert alert-success">
                    {{Illuminate\Support\Facades\Session::get('success')}}
                </div>
            @endif
            <div class="heading-box">
                <h2 class="heading-h2">LEARN TO TRADE WITH THE AWESOME DECAGON ALGORITHM INITIAL FREE PROOF
                    TRIAL,TRADING,CONSULTANCY,COURSES</h2>
            </div>
            <ul class="live-pricing mb-3">
                <div class="li">
                    <li>
                        Dow
                        <h6>@if($dow) {{$dow->value}} @endif</h6>
                    </li>
                    <li>
                        Nasdaq
                        <h6>@if($nasdaq){{$nasdaq->value}}@endif</h6>
                    </li>
                    <li>
                        Ftse
                        <h6>@if($ftse) {{$ftse->value}} @endif</h6>
                    </li>
                    <li>
                        Usd
                        <h6>@if($usd) {{$usd->value}} @endif</h6>
                    </li>
                    <li>
                        Euro
                        <h6>@if($euro) {{$euro->value}} @endif</h6>
                    </li>
                    <li>
                        Gold
                        <h6>@if($gold) {{$gold->value}} @endif</h6>
                    </li>
                </div>
            </ul>


        </header>


        <div class="row">
            <div class="col-sm-7 ">

            </div>
            <div class="col-sm-5">
                <div class="buttons">
                    <!-- Trigger/Open The Modal -->
                    <!-- Button trigger modal -->
                    <button type="button" class="right-btn1" data-toggle="modal" data-target="#exampleModalCenter">
                        Email Us
                    </button>
                    <button type="button" class="right-btn2" data-toggle="modal" data-target="#exampleModalCenter">
                        Live Chat
                    </button>

                </div>
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close">&times;</span>
                <h6>Some text in the Modal..</h6>
            </div>
        </div>

        <div class="content">
            <h6>@if($content){!! $content->content !!}@endif</h6>
        </div>
        <div class="content2">
            <h6>FREE PROOF, TRAIL, AND TRADING. <br /> WORLD FIRST ILLUSTRATED TRADING ACCOUNT</h6>
        </div>

        <section>
            <div class="box">
                <div class="a4">
                    <img src="" alt="">
                </div>
                <div class="disclaimer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem neque fugiat doloribus numquam at
                    cupiditate ducimus repellendus facilis voluptas aperiam. Optio mollitia voluptates velit officiis
                    maxime
                    aperiam ut deserunt, earum, dolores labore laboriosam laudantium! Perferendis eligendi porro soluta
                    quibusdam eos dolore delectus error nisi quisquam.
                </div>
            </div>
        </section>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Email Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('contact')}}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name:</label>
                            <input type="text" class="form-control" name="name" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Your email:</label>
                            <input type="email" class="form-control" name="email" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Mobile number:</label>
                            <input type="number" class="form-control" name="phone" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Country:</label>
                            <input type="text" class="form-control" name="country" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" name="message" id="message-text"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send Mail</button>
                        </div>  
                    </form>
                </div>
                
            </div>
        </div>
    </div>



@stop
