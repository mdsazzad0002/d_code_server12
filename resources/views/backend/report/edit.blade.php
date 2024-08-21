


<textarea name="details" placeholder="Description" class="form-control mb-2" id="" cols="30" rows="5">{{ $report->details }}</textarea>

<br>
<select class="form-control select2  mt-2" name="status"   id="status">
    <option @if($report->status == 1 ) selected @endif value="1">Active</option>
    <option @if($report->status == 0 ) selected @endif value="0">Inactive</option>
</select>
