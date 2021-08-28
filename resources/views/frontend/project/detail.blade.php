@extends ('frontend.layouts.app')
@section('content')

<!-- START PROJECT DETAIL -->
<section>
	<div class="container">
        <div class="row">
            @if($projects)
        	<div class="col-lg-9">
               
                    <div class="single_course">

                        <div class="course_img">
                            <a href="#">
                                <img src="{{asset($projects->image_path)}}" alt="course_img_big">
                            </a>
                        
                        </div>
                        
                        <div class="course_tabs">
                    	<ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab1" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="curriculum-tab1" data-toggle="tab" href="#curriculum" role="tab" aria-controls="curriculum" aria-selected="false">Curriculum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="instructor-tab1" data-toggle="tab" href="#instructor" role="tab" aria-controls="instructor" aria-selected="false">Instructor</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab1">
                               <div class="border radius_all_5 tab_box"> <p>Lorem Ipsu. is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
                            </div>
                            <div class="tab-pane fade" id="curriculum" role="tabpanel" aria-labelledby="curriculum-tab1">
                                <div id="accordion" class="accordion">
                                    <div class="card">
                                      <div class="card-header" id="heading-1-One">
                                        <h6 class="mb-0"> <a data-toggle="collapse" href="#collapse-1-One" aria-expanded="true" aria-controls="collapse-1-One">Leap into electronic typesetting <span class="item_meta duration">30 min</span></a></h6>
                                      </div>
                                      <div id="collapse-1-One" class="collapse show" aria-labelledby="heading-1-One" data-parent="#accordion">
                                        <div class="card-body">
                                        	<p>Lorem Ipsu. is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header" id="heading-1-Two">
                                        <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse-1-Two" aria-expanded="false" aria-controls="collapse-1-Two">Letraset sheets containing <span class="item_meta duration">30 min</span></a> </h6>
                                      </div>
                                      <div id="collapse-1-Two" class="collapse" aria-labelledby="heading-1-Two" data-parent="#accordion">
                                        <div class="card-body">
                                        	<p>Lorem Ipsu. is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <div class="card-header" id="heading-1-Three">
                                        <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse-1-Three" aria-expanded="false" aria-controls="collapse-1-Three">took a galley of type <span class="item_meta duration">45 min</span></a> </h6>
                                      </div>
                                      <div id="collapse-1-Three" class="collapse" aria-labelledby="heading-1-Three" data-parent="#accordion">
                                        <div class="card-body">
                                        	<p>Lorem Ipsu. is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="instructor" role="tabpanel" aria-labelledby="instructor-tab1">
                                <div class="course_author">
                                	<div class="author_img">
                                		<img class="radius_all_5" src="{{asset('assets/images/client_img1.jpg') }}"/>
                                    </div>
                                    <div class="author_meta">
                                        <div class="author_intro">
                                            <h6>Alia Noor</h6>
                                            <span class="text_default">Co-Founder</span>
                                        </div>
                                        <div class="author_desc">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, quaeillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                        
                    </div>
            </div>
            @endif

           
            
        </div>
    </div>
</section>
<!-- END PROJECT DETAIL -->



@endsection