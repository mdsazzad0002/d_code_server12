
@foreach ($job_post as $job_items)

<div class="">
    <div class="shadow  mb-1 border bg-dark" style="border-color:#ee3f86 !important; border-top:0 !important; border-left:0 !important; border-radius: 5px; overflow:hidden;">
        <div class=" px-3 py-2">
            <a  href="{{ route('job.index',$job_items->slug) }}" aria-label="View Details">
                <h5 class="font-weight-bold text-success mb-0"> 🎀 {{ Str::title($job_items->title) }}</h5>
                <div class="text-white mb-2">
                    ⏱ <span class="text-danger">{{ \Carbon\Carbon::parse($job_items->start_date)->format('d-M-Y') }}</span> -  <span class="text-success">{{ \Carbon\Carbon::parse($job_items->deadline)->format('d-M-Y') }}</span>
                    

                </div>
                <div class="line-climb-2 text-white">
                    {{ $job_items->short_details }}
                </div>
                <div class="text-secondary text-right">
                    -- {{ $job_items->company_name }}
                </div>

            </a>
            <div class="mt-3">
                @foreach ($job_items->categoryname() as $category_samilar)
                    <a class="tag_data" href="{{ route('category.index', $category_samilar->slug) }}"><i class="fa-solid fa-tags"></i>  {{ $category_samilar->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endforeach
