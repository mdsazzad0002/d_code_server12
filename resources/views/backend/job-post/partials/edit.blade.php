<div class="mb-3">
    <label for="title">Job Title &nbsp;&nbsp;<span class="text-danger">* </span></label>
    <input required placeholder="Title" type="text" class="form-control" name="title" id="title" value="{{ $jobPost->title }}">
</div>

<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="category_select">Category &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <select required class="form-control select2 mb-2" name="category_id[]" placeholder="Category" multiple>
                @if($jobPost->category_id != null)
                        @php
                            $chosen_category_key = explode(',', $jobPost->category_id);
                        @endphp
                    @else
                        @php
                        $chosen_category_key =[];
                        @endphp
                     @endif

                    @foreach ($jobPost->category_list() as $key => $value)
                        <option @if(in_array($key, $chosen_category_key)) selected @endif value="{{ $key }}">{{ $value }}</option>
                    @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="district_select">Job District &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <select required class="form-control select2 mb-2" name="district_id" placeholder="District">
                <option value="">--Select District--</option>
                @foreach ($district as $items)
                <option @if($jobPost->district_id == $items->id ) selected @endif value="{{ $items->id }}">{{ $items->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <label for="post_category"> Status</label>
        <select class="form-control  mb-2" name="status" placeholder=" status" id="status">

            <option @if($jobPost->status == 1 ) selected @endif value="1">Active</option>
            <option @if($jobPost->status == 0 ) selected @endif value="0">InActive</option>

        </select>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="mb-3">
            <label for="category_select">Company Name &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="company_name" id="" class="form-control" value="{{ $jobPost->company_name }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="subcategory">Company Type &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="company_type" id="" class="form-control" value="{{ $jobPost->company_type }}">
        </div>
    </div>
    <div class="col-md-4">
        <div class="mb-3">
            <label for="subcategory">Company Location &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="location" id="" class="form-control" value="{{ $jobPost->location }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="category_select">Start Date &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="date" name="start_date" id="" class="form-control" value="{{ $jobPost->start_date }}">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="subcategory">End Date &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="date" name="deadline" id="" class="form-control" value="{{ $jobPost->deadline }}">
        </div>
    </div>
</div>

<div class="mb-3">
    <label for="post_short_description">Short Description &nbsp;&nbsp;<span class="text-danger">* </span></label>
    <textarea required class="form-control" placeholder="Short Description" name="short_details" id="short_details" cols="10" rows="5">{{ $jobPost->short_details }}</textarea>
</div>
<div>
    <label for="details">Details &nbsp;&nbsp;<span class="text-danger">* Markdown Editor</span></label>
    <textarea  name="long_details" Placeholder="Details" id="details" class="form-control mb-2" cols="30" rows="10">{{ $jobPost->long_details }}</textarea>
</div>


