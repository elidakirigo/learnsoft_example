<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $employees->first_name }}</p>
</div>

<!-- Middle Name Field -->
<div class="col-sm-12">
    {!! Form::label('middle_name', 'Middle Name:') !!}
    <p>{{ $employees->middle_name }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $employees->surname }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $employees->email }}</p>
</div>

<!-- Date Of Birth Field -->
<div class="col-sm-12">
    {!! Form::label('date_of_birth', 'Date Of Birth:') !!}
    <p>{{ $employees->date_of_birth }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $employees->phone_number }}</p>
</div>

<!-- Marital Status Field -->
<div class="col-sm-12">
    {!! Form::label('marital_status', 'Marital Status:') !!}
    <p>{{ $employees->marital_status }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('gender', 'Gender:') !!}
    <p>{{ $employees->gender }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $employees->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $employees->updated_at }}</p>
</div>

