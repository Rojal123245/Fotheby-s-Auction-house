<div class="col-sm-12">
	<div class="form-group">
		<label>Piece Title</label>
		{{ Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Ex: Emergent Wealth ']) }}

	</select>
</div>

<div class="form-group">
	<label>Estimated price</label>
	{{ Form::text('price', null, ['class'=>'form-control', 'placeholder'=>'Ex: 10,000 - 12,000 British pounds']) }}
</div>	

<div class="form-group">
	<label>Dimesion</label>
	{{ Form::text('dimension', null, ['class'=>'form-control', 'placeholder'=>'Ex: 1.5m-1.5m ']) }}
</div>		
<div class="form-group">
	<label>Artist</label>
	{{ Form::text('artist', null, ['class'=>'form-control', 'placeholder'=>'Ex: Charles Bellender ']) }}
</div>	
<div class="form-group">
	<label>Date of production</label>
	{{ Form::number('period', null, ['class'=>'form-control', 'placeholder'=>'Ex: 2006, 2007 ']) }}
</div>	
<div class="form-group">
	<label>Description</label>
	{{ Form::textarea('description', null, ['class'=>'form-control', 'placeholder'=>'Ex: An exceptionally fine contemporary painting capturing the lust for wealth that exemplified the early part of the century within the capitalist financial markets of the world.  ']) }}
</div>
<div class="form-group">
	<label>Category</label>
	<select class="form-control cboCat" name="category">
		<option value="">Select Category</option>
		<option value="drawing">Drawings</option>
		<option value="painting">Paintings</option>
		<option value="picture">Photographic Images</option>
		<option value="sculpture">Sculptures</option>
		<option value="carving">Carvings</option>
	</select>
</div>	
<div class="form-group content1" style="display: none">
	<label>Medium</label>
	{{ Form::text('medium', null, ['class'=>'form-control txtMedium', 'placeholder'=>'Ex. pencil, ink, charcoal']) }}
</div>
<div class="form-group content1" style="display: none">
	<label>Frame</label>
	{{ Form::text('frame', null, ['class'=>'form-control txtFrame', 'placeholder'=>'Ex. framed, not framed']) }}
</div>

<div class="form-group content2" style="display: none">
	<label>Type of Image</label>
	{{ Form::text('typeOfImg', null, ['class'=>'form-control txtTypeOfImg', 'placeholder'=>'Ex. Black, White, Color']) }}
</div>

<div class="form-group content3" style="display: none">
	<label>Material Used</label>
	{{ Form::text('material', null, ['class'=>'form-control txtMaterial', 'placeholder'=>'Ex. Bronze, Marble, Pewter']) }}
</div>

<div class="form-group content3" style="display: none">
	<label>Weight</label>
	{{ Form::text('weight', null, ['class'=>'form-control txtWeight', 'placeholder'=>'Ex. 55kg, 5kg']) }}
</div>