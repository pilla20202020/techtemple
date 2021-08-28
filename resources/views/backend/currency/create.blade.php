@extends('backend.layouts.admin.admin')

@section('title', 'Currency')

@section('content')
<section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('currency.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('backend.currency.partials.form',['header' => 'Create a currency'])
            </form>
        </div>
    </section>
@stop

