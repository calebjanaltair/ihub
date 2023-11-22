<option disabled selected>Please Select an option</option>
@foreach($companies as $company)
    <option value="{{ $company->id }}">{{ $company->name }}</option>
@endforeach
