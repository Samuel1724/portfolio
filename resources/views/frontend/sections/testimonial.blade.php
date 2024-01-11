<section class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{$feedbackSetting->title}}</h3>
                    <div class="desc">
                        <p>{{$feedbackSetting->sub_title}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-sm-12">
                
                <div class="testimonial-slider">
                    @foreach ($feedbacks as $feedback)
                    <div class="single-testimonial">
                        <div class="testimonial-header">
                            <div class="quote">
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <h5 class="title">{{$feedback->title}}</h5>
                            <h6 class="position">{{$feedback->sub_title}}</h6>
                        </div>
                        <div class="content">
                            {!!$feedback->description!!}
                        </div>
                    </div>
                    @endforeach
                </div>
               
            </div>
            
        </div>
    </div>
</section>