<!-- First Name Field -->
<div class="form-group col-sm-6">
	{!! Form::label('first_name', 'First Name:') !!}
	{!! Form::text('first_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Middle Name Field -->
<div class="form-group col-sm-6">
	{!! Form::label('middle_name', 'Middle Name:') !!}
	{!! Form::text('middle_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
	{!! Form::label('surname', 'Surname:') !!}
	{!! Form::text('surname', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
	{!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
	{!! Form::label('gender', 'Gender:') !!}
	{!! Form::text('gender', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Marital Status Field -->
<div class="form-group col-sm-6">
	{!! Form::label('marital_status', 'Marital Status:') !!}
	{!! Form::text('marital_status', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
	{!! Form::label('date_of_birth', 'Date Of Birth:') !!}
	{!! Form::date('date_of_birth', null, ['class' => 'form-control','id'=>'date_of_birth']) !!}
</div>

@push('page_scripts')
<script type="text/javascript">
$('#date_of_birth').datepicker()
</script>
@endpush