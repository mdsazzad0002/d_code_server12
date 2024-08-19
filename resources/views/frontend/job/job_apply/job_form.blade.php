<input type="post_id" name="post_id" value="{{ $jobPost->id }}" id="" hidden>


<div>
    <label for="cv">Add CV</label>
    <input type="file" accept=".pdf" name="cv" id="cv" class="form-control">
</div>

@if(count($old_cv) > 0)

<div class="mt-1">
    Select CV
    @foreach ($old_cv as $cv)
        <label class="cv_list bg-secondary " for="cv_list_id_{{ $cv->id }}">
            <input  name="cv_id" value="{{ $cv->id }}"  id="cv_list_id_{{ $cv->id }}" type="radio"> &nbsp; {{ $cv->old_name }} <a class="btn btn-primary float-right" href="{{ route('user-job-post.job-post.cv', $cv->name) }}" target="_blank">view</a>
        </label>

    @endforeach
</div>
@endif
<div>
    <label for="details">Write Cv &nbsp;&nbsp;<span class="text-danger">* Markdown Editor</span></label>
    <textarea  name="long_details" Placeholder="Details" id="details" class="form-control mb-2" cols="30" rows="10"></textarea>
</div>


<style>
    .cv_list {
    width: 100%;
    background: #eee;
    border-radius: 2px;
    padding: 8px;
    margin-bottom: 6px;
    cursor: pointer;
    }
</style>

