@extends('backend.layouts.admin.admin')

@section('title', 'Content')

@section('content')
<section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('content.update',$content->slug)}}"
                  method="POST" enctype="multipart/form-data" novalidate>
            @method('PUT')
            @include('backend.content.partials.form', ['header' => 'Edit Content <span class="text-primary">('.($content->title).')</span>'])
            </form>
        </div>
</section>
@stop


