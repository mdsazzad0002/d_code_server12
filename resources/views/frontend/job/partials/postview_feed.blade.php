
@foreach ($job_post as $job_items)

<div class="">
    <div class="shadow  mb-3 border bg-dark" style="border-color:#ee3f86 !important; border-radius: 5px; overflow:hidden;">


        @include('frontend.summary.summery_view')

        <div class=" px-3 py-2">
                <a  href="{{ route('job.index',$job_items->slug) }}" aria-label="View Details">
                    <h5 class="font-weight-bold text-success"> 🎀 {{ Str::title($job_items->title) }} 🎀</h5>
                </a>

                {{ $job_items->short_details }}



                @include('frontend.job.partials.company_details')



                <div class="mt-3">

                    @foreach ($job_items->categoryname() as $category_samilar)
                        <a class="tag_data" href="{{ route('category.index', $category_samilar->slug) }}"><i class="fa-solid fa-tags"></i>  {{ $category_samilar->name }}</a>
                    @endforeach


                </div>


                <a  href="{{ route('job.index',$job_items->slug) }}" class="btn btn-primary  progress-bar progress-bar-striped btn-block my-2">View Job Post</a>
        </div>
    </div>
</div>
@endforeach
