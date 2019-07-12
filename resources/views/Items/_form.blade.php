<div class="content mt-3">
	<div class="animated fadeIn">

		<div class="row">

			<div class="col-xs-6 col-sm-12">
				<div class="card">
					<div class="card-header">
						<strong><i class="fa fa-plus"></i> Items Form</strong> 
					</div>
					<div class="card-body card-block">
						<div class="form-group">
							<label class=" form-control-label">Auction Title</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-check-square-o"></i></div>
								{{ Form::text('auctiontitle', null, ['class'=>'form-control txtauctionTitle', 'placeholder'=>'', 'id' => 'txtauction', 'required' => '']) }}

							</div>
							<small class="form-text text-muted">ex. 21st Century English Paintings from Emergent Artist – The Blast Collection
							</small>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Location</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-location-arrow"></i></div>
								{{ Form::text('location', null, ['class'=>'form-control txtlocation', 'placeholder'=>'','id' => 'txtlocation', 'required' => '']) }}

							</div>
							<small class="form-text text-muted">ex. London, New York</small>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Lot Reference Number</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-barcode"></i></div>
								{{ Form::text('lotrefno', null, ['class'=>'form-control txtlotrefno', 'placeholder'=>'','id' => 'txtlotrefno', 'required' => '']) }}

							</div>
							<small class="form-text text-muted">ex. 35784798</small>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Lot Number</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-file-text-o"></i></div>
								{{ Form::text('lotno', null, ['class'=>'form-control txtlotno', 'placeholder'=>'','id' => 'txtlotno', 'required' => '']) }}

							</div>
							<small class="form-text text-muted">ex. 92</small>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Date of production</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-calendar-o"></i></div>
								{{ Form::text('period', null, ['class'=>'form-control txtperiod', 'placeholder'=>'','id' => 'txtperiod', 'required' => '']) }}

							</div>
							<small class="form-text text-muted">ex. 2006</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Title</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-check"></i></div>
								{{ Form::text('title', null, ['class'=>'form-control txtTitle', 'placeholder'=>'','id' => 'txttitle', 'required' => '']) }}

							</div>
							<small class="form-text text-muted">ex. Emergent Wealth </small>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Price</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-tag"></i></div>
								{{ Form::text('price', null, ['class'=>'form-control txtPrice', 'placeholder'=>'','id' => 'txtprice', 'required' => '']) }}
								
							</div>
							<small class="form-text text-muted">ex. NPR 1000, $ 10</small>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Dimension</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-arrows"></i></div>
								{{ Form::text('dimension', null, ['class'=>'form-control txtDimension', 'placeholder'=>'','id' => 'txtdimension', 'required' => '']) }}
								
								
							</div>
							<small class="form-text text-muted">ex. 1.5m-2.5m</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Artist</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-user"></i></div>
								{{ Form::text('artist', null, ['class'=>'form-control txtArtist', 'placeholder'=>'','id' => 'txtartist', 'required' => '']) }}
								
								
							</div>
							<small class="form-text text-muted">ex. Richard, Scarlet</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Description</label>
							<div class="input-group">
								<div class="input-group-addon" style="padding-top: 9%;"><i class="fa fa-book"></i></div>
								{{ Form::textarea('description', null, ['class'=>'form-control txtDesc', 'placeholder'=>'','id' => 'txtdesc', 'required' => '']) }}
							</div>
							<small class="form-text text-muted">ex. The painting shows the beautiful color of nature which is reflected through the imagination of the artist. </small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Category</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-hand-o-down"></i></div>

								<select name="category" class="form-control " id="dropdown" required >
									<option>select category</option>
									<option value="drawing">Drawings</option>
									<option value="painting">Paintings</option>
									<option value="picture">Photographic Images</option>
									<option value="sculpture">Sculptures</option>
									<option value="carving">Carvings</option>
								</select>
							</div>
							<small class="form-text text-muted">ex. Drawing, Paintings, Sculptures</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Medium</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-pencil"></i></div>
								{{ Form::text('medium', null, ['class'=>'form-control txtMedium', 'placeholder'=>'']) }}
								
								
							</div>
							<small class="form-text text-muted">ex. pencil, ink, charcoal</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">frame</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-inbox"></i></div>
								{{ Form::text('frame', null, ['class'=>'form-control txtFrame', 'placeholder'=>'']) }}
								
								
							</div>
							<small class="form-text text-muted">ex. framed, not framed</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Type of Image</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-camera-retro"></i></div>
								{{ Form::text('typeOfImg', null, ['class'=>'form-control txtTypeOfImg', 'placeholder'=>'']) }}
								
								
							</div>
							<small class="form-text text-muted">ex. Black, White, Color</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Medium Used</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-gavel"></i></div>
								{{ Form::text('material', null, ['class'=>'form-control txtMaterial', 'placeholder'=>'']) }}															
							</div>
							<small class="form-text text-muted">ex. Bronze, Marble, Pewter</small>
						</div>

						<div class="form-group">
							<label class=" form-control-label">Weight</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-truck"></i></div>
								{{ Form::text('weight', null, ['class'=>'form-control txtWeight', 'placeholder'=>'']) }}

							</div>
							<small class="form-text text-muted">ex. 55kg, 5kg</small>
						</div>
						<div class="form-group">
						    <label class=" form-control-label">Auction Date</label>
						    <div class="input-group">
						        <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
						        {{ Form::date('auctionDate', null, ['class'=>'form-control txtWeight', 'placeholder'=>'','id' => 'txtdate']) }}
						    </div>
						    <small class="form-text text-muted">ex. 99/99/9999</small>
						</div>
						<div class="form-group">
							<label class=" form-control-label">Auction Period</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-sun-o"></i></div>
								{{ Form::text('auctionperiod', null, ['class'=>'form-control txtauctionperiod', 'placeholder'=>'','id' => 'txttime', 'required' => '']) }}

							</div>
							<small class="form-text text-muted">ex. afternoon</small>
						</div>
						<div class="form-group">
						<label class=" form-control-label">Upload Image</label>
						<div class="form-group">
							<label>
							 <br>
							 <img src="{{ isset($data->image) ? asset('images/new/'.$data->image) : '' }}" width="120" height="80" class="img img-thumbnai" id="imgItem"><br>
							  <input name="itemsimg" type='file' onchange="displayImage(this, 'imgItem');" title="select citizenship" />
							</label>
						</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div><!-- .animated -->
</div>

