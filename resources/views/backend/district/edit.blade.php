<input type="text" name="name" value="{{ $district->name }}" class="form-control mb-2" placeholder="District Name">

<select class="form-control select2  mt-2" name="status"   id="status">
    <option @if($district->status == 1 ) selected @endif value="1">Active</option>
    <option @if($district->status == 0 ) selected @endif value="0">Inactive</option>
</select>
