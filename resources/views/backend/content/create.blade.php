@extends('backend.layouts.admin.admin')

@section('title', 'Content')

@section('content')
<section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('content.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('backend.content.partials.form',['header' => 'Create a Content'])
            </form>
        </div>
    </section>
@stop

