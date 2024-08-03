<div class="col-12 col-xxl-6 placeholder-glow">
    <div class="shadow px-3 py-2 bg-dark mb-3 ">
        @include('frontend.feed.placeholder_partials_post.summary_post')
        <a  href="#">
            <h5 class="font-weight-bold text-success placeholder col-12"> </h5>
             {{--  @include('frontend.feed.placeholder_partials_post.placeholder_short_info')  --}}
             <a href="#" tabindex="-1"  class="btn btn-primary  progress-bar progress-bar-striped btn-block my-2 disabled placeholder "></a>
        </a>

    </div>
 </div>
<style>
    .placeholder{
        padding: 8px;
        background: #767676;
    }
    .btn.placeholder{
        padding: 17px;
    }

</style>
