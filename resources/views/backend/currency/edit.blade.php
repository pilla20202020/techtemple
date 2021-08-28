@extends('backend.layouts.admin.admin')

@section('title', 'Currency')

@section('content')
<section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('currency.update',$currency->slug)}}"
                  method="POST" enctype="multipart/form-data" novalidate>
            @method('PUT')
            @include('backend.currency.partials.form', ['header' => 'Edit Currency <span class="text-primary">('.($currency->title).')</span>'])
            </form>
        </div>
</section>
@stop


