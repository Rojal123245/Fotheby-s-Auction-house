<link href="lib/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="lib/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="container">
	<h1 class="well">Registration Form</h1>
	<div class="col-lg-12 well">
		<div class="row">
			{{ Form::open(['route'=>'saveRegisterData', 'name' => 'frmuserRegister']) }}
			<div class="col-sm-12">
				<div class="form-group">
					<label>Title</label>
					<select class="form-control" name="title" id="txttitle" required>
						<option value="Mr">Mr</option>
						<option value="Mrs">Mrs</option>
						<option value="Dr">Dr</option>
						<option value="Prof">Prof</option>
						<option value="Er">Er</option>

					</select>
				</div>
				<div class="row">
					
					<div class="col-sm-6 form-group">
						<label>First Name</label>
						{{ Form::text('firstname', null, ['class'=>'form-control', 'placeholder'=>'Enter First Name Here..', 'id' => 'txtfirstname', 'required' => '']) }}
					</div>
					<div class="col-sm-6 form-group">
						<label>Surname</label>
						{{ Form::text('surname', null, ['class'=>'form-control', 'placeholder'=>'Enter Surname Here..', 'id' => 'txtsurname', 'required' => '']) }}
					</div>
				</div>					
				<div class="form-group">
					<label>Address</label>
					{{ Form::text('address', null, ['class'=>'form-control', 'placeholder'=>'Enter Address Here..', 'id' => 'txtaddress', 'required' => '']) }}
				</div>	

				<div class="form-group">
					<label>Phone Number</label>
					{{ Form::text('contactno', null, ['class'=>'form-control', 'placeholder'=>'Enter Contact Number Here..', 'id' => 'txtcontactno', 'required' => '']) }}
				</div>		
				<div class="form-group">
					<label>Email Address</label>
					{{ Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Enter Email Here..', 'id' => 'txtemail', 'required' => '']) }}
				</div>	
				<div class="form-group">
					<label>Password</label>
					{{ Form::password('password', null, ['class'=>'form-control', 'placeholder'=>'Enter password Here..', 'id' => 'txtpw', 'required' => '']) }}
				</div>
				<div class="form-group">
					<label>Client status</label>
					<select class="form-control" name="clientstatus" id="txtclientstatus">
						<option value="buyer">Buyer</option>
						<option value="seller">Seller</option>
						<option value="joint">Joint</option>
					</select>
				</div>	
				<div class="form-group">
					<label>Bank Account No</label>
					{{ Form::number('bankacno', null, ['class'=>'form-control', 'placeholder'=>'Enter Bank account No Here..', 'id' => 'txtac', 'required' => '']) }}
				</div>
				<div class="form-group">
					<label>Bank Sort Code</label>
					{{ Form::number('sortcode', null, ['class'=>'form-control', 'placeholder'=>'Enter Sort Code Here..', 'id' => 'txtcode', 'required' => '']) }}
				</div>
				{{ Form::submit(__('Submit'), ['class' => 'btn btn-success']) }}	
				<a href="{{ route('logout') }}" class="btn btn-warning test pull-right">&nbsp;Back</a>			
			</div>
			{{ Form::close() }} 
		</div>
	</div>
</div>
<style type="text/css">
	input[type=password]{
		display: block;
		width: 100%;
		height: 34px;
		padding: 6px 12px;
		font-size: 14px;
		line-height: 1.42857143;
		color: #555;
		background-color: #fff;
		background-image: none;
		border: 1px solid #ccc;
		border-radius: 4px;
	}
</style>
<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
<script type="text/javascript">
bootstrapValidate(
		['#txttitle', '#txtlocation'],
		'required:Please fill out this field!',
);
	bootstrapValidate(
		['#txtfirstname', '#txtsurname'],
		'min:2:Minimun character 2',
		);
	bootstrapValidate(
		['#txtaddress', '#txtclientstatus'],
		'required:Please fill out this field',
		);
	bootstrapValidate(
		['#txtcontactno','#txtac'],
		'numeric:only numeric upto 10 digits',
		);
	bootstrapValidate(
		'#txtemail',
		'email:Enter valid email',
		);
	bootstrapValidate(
		'#txtpw',
		'min:6:Enter 6 characters',
		);
	bootstrapValidate(
		'#txtpw',
		'min:6:Enter 6 characters',
		);
	bootstrapValidate(
		'#txtcode',
		'numeric:Enter numeric only',
		);

</script>
