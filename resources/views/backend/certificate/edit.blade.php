<input type="text" name="name" value="{{ $certificate->name }}" class="form-control mb-2" placeholder="certificate Name">
<input type="text" name="father_name" value="{{ $certificate->father_name }}" class="form-control mb-2" placeholder="certificate Name">
<input type="text" name="mother_name" value="{{ $certificate->mother_name }}" class="form-control mb-2" placeholder="certificate Name">
<input type="text" name="course" value="{{ $certificate->course }}" class="form-control mb-2" placeholder="certificate Name">
<select class="form-control select2  mb-2" name="gender" id="gender">
    <option @if($certificate->gender == 1 ) selected @endif value="1">Active</option>
    <option @if($certificate->gender == 0 ) selected @endif value="0">Inactive</option>
</select>
<input type="text" name="reg_no" value="{{ $certificate->reg_no }}" class="form-control mb-2" placeholder="certificate Name">
<input type="date" name="dob" value="{{ $certificate->dob }}" class="form-control mb-2" placeholder="certificate Name">
<input type="text" name="name" value="{{ $certificate->name }}" class="form-control mb-2" placeholder="certificate Name">
<input type="date" name="issue_date" value="{{ $certificate->issue_date }}" class="form-control mb-2">
