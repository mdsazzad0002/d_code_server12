<div class="mb-3">
    <label for="title">Job Title &nbsp;&nbsp;<span class="text-danger">* </span></label>
    <input required placeholder="Title" type="text" class="form-control" name="title" id="title">
</div>

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="category_select">Category &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <select required class="form-control select2 mb-2" name="category_id[]" placeholder="Category" multiple>
                <option value="">--Select Category--</option>
                @foreach ($category as $items)
                <option value="{{ $items->id }}">{{ $items->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="district_select">Job District &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <select required class="form-control select2 tag_true mb-2" name="district_id" placeholder="District">
                <option value="">--Select District--</option>
                @foreach ($district as $items)
                <option value="{{ $items->id }}">{{ $items->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="category_select">Company Name &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="company_name" id="" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="subcategory">Company Type &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="company_type" id="" class="form-control">
        </div>
    </div>
    <div class="col-md-12">
        <div class="mb-3">
            <label for="subcategory">Company Location &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="text" name="location" id="" class="form-control">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="category_select">Start Date &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="date" name="start_date" id="" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="subcategory">End Date &nbsp;&nbsp;<span class="text-danger">* </span></label>
            <input type="date" name="deadline" id="" class="form-control">
        </div>
    </div>
</div>

<div class="mb-3">
    <label for="post_short_description">Short Description &nbsp;&nbsp;<span class="text-danger">* </span></label>
    <textarea required class="form-control" placeholder="Short Description" name="short_details" id="short_details" cols="10" rows="5"></textarea>
</div>
<div>
    <label for="details">Details &nbsp;&nbsp;<span class="text-danger">* Markdown Editor</span></label>
    <textarea  name="long_details" Placeholder="Details" id="details" class="form-control mb-2" cols="30" rows="10"></textarea>
</div>

<div class="mb-3">
    <label for="enable_apply">Enable Online Apply &nbsp;&nbsp;<span class="text-danger">* </span></label>
    <select required class="form-control  mb-2" name="enable_apply" >
        <option value="0">No</option>
        <option value="1">Yes</option>
    </select>
</div>


