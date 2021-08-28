@csrf
<div class="row">
    <div class="col-sm-9">
        <div class="card">
            <div class="card-underline">
                <div class="card-head">
                    <header class="ml-3 mt-2">{!! $header !!}</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="" class="col-form-label pt-0">Title</label>
                                    <div class="">
                                        <input class="form-control" type="text" required name="title" value="{{ old('title', isset($currency->title) ? $currency->title : '') }}" placeholder="Enter Title">
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="" class="col-form-label pt-0">Type</label>
                                <select name="type" class="form-control" id="">
                                    <option value="">Select Type</option>
                                    <option value="dow"  @if(isset($currency)) @if($currency->type == 'dow') selected @endif @endif >Dow</option>
                                    <option value="nasdaq" @if(isset($currency)) @if($currency->type == 'nasdaq') selected @endif @endif>Nasdaq</option>
                                    <option value="ftse"@if(isset($currency)) @if($currency->type == 'ftse') selected @endif @endif>Ftse</option>
                                    <option value="usd"@if(isset($currency)) @if($currency->type == 'usd') selected @endif @endif>Usd</option>
                                    <option value="euro"@if(isset($currency)) @if($currency->type == 'euro') selected @endif @endif>Euro</option>
                                    <option value="gold"@if(isset($currency)) @if($currency->type == 'gold') selected @endif @endif>Gold</option>
                                    
                                </select>
                                    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                             <div class="form-group">
                                <label for="" class="col-form-label pt-0">Value</label>
                                    <div class="">
                                        <input class="form-control" type="number" required name="value" value="{{ old('value', isset($currency->value) ? $currency->value : '') }}" placeholder="Enter Value">
                                    </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="" data-spy="affix" data-offset-top="50">
            <div class="panel-group" id="accordion1">
                <div class="card panel expanded">
                    <div class="card-head" data-toggle="collapse" data-parent="#accordion1" data-target="#accordion1-1">
                        <header>Publish</header>
                        <div class="tools">
                            <a class="btn btn-icon-toggle"><i class="fa fa-angle-down"></i></a>
                        </div>
                    </div>
                    <div id="accordion1-1" class="collapse in">
                        <div class="card-actionbar">
                            <div class="card-actionbar-row">
                                <a class="btn btn-default btn-ink" href="{{ route('currency.index') }}">
                                    <i class="md md-arrow-back"></i>
                                    Back
                                </a>
                                <input type="submit" name="pageSubmit" class="btn btn-info ink-reaction" value="Save">
                            </div>
                        </div>
                        <div class="card-head">
                            <div class="side-label">
                                <div class="label-head">
                                    <span>Published</span>
                                </div>
                                <div class="label-body">
                                    <input type="checkbox" id="switch_demo_1" name="is_published"
                                           {{ old('is_published', isset($currency->is_published) ? $currency->is_published : '')=='1' ? 'checked':'' }} data-switchery/>
                                </div>
                            </div>
                            <div class="side-label">
                                <div class="label-head">
                                    <span>Featured</span>
                                </div>
                                <div class="label-body">
                                    <input type="checkbox" id="switch_demo_1" name="is_featured"
                                           {{ old('is_featured', isset($currency->is_featured) ? $currency->is_featured : '')=='1' ? 'checked':'' }} data-switchery/>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--end .panel --><!--end .panel --><!--end .panel --><!--end .panel -->
                {{--            </div><!--end .panel-group -->--}}
                {{--        <div class="panel-group" id="accordion1">--}}
            
                <!--end .panel --><!--end .panel --><!--end .panel --><!--end .panel -->
            </div><!--end .panel-group -->
        </div>
    </div>
</div>
