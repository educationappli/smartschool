     <div class="form-group row">
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">First Name</label>
      <div class="col-sm-10">
        {{ Form::text('first_name', '', ['placeholder' => 'First Name', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Middle Name</label>
      <div class="col-sm-10">
        {{ Form::text('middle_name', '', ['placeholder' => 'Middle Name', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Last Name</label>
      <div class="col-sm-10">
        {{ Form::text('last_name', '', ['placeholder' => 'Last Name', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Gender</label>
      <div class="col-sm-10">
        {!! Form::gender() !!}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Birth Date</label>
      <div class="col-sm-10">
        {{ Form::date('birth_date', \Carbon\Carbon::now()) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Contact phone</label>
      <div class="col-sm-10">
        {{ Form::text('contact_phone', '', ['placeholder' => 'Contact Phone', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Contact mobile</label>
      <div class="col-sm-10">
        {{ Form::text('contact_mobile', '', ['placeholder' => 'Contact Mobile', 'class' => 'form-control form-control-lg']) }}
      </div>
      <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Contact email</label>
      <div class="col-sm-10">
        {{ Form::email('contact_email', '', ['placeholder' => 'Contact Email', 'class' => 'form-control form-control-lg']) }}
      </div>
    </div>
    <div class="form-group row">
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Address</label>
      <div class="col-sm-10">
        {{ Form::textarea('address', '', ['placeholder' => 'Address', 'rows' => 4, 'cols' => 80]) }}
      </div>
      <label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Note</label>
      <div class="col-sm-10">
        {{ Form::textarea('note', '', ['placeholder' => 'Notes', 'rows' => 4, 'cols' => 80]) }}
      </div>
    </div>
