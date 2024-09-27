<input hidden class="form-control bg-dark text-light mb-2" type="text" value="{{ url()->previous() }} " name="page_url">

<input hidden class="form-control bg-dark text-light mb-2" type="text" value="{{ auth()->user()?->id ??  0}}" name="reporter_id">

<textarea name="details" placeholder="Enter Details your suggession and report" id="" cols="30" rows="10" class="form-control bg-dark text-light"></textarea>

