@extends('layouts.layout')

@section('content')

	<h3>Permohonan Kad Akreditasi</h3><br  />

	@include('layouts.notification')

	<div class="form-container">

		<form method="POST" action="/applications" enctype="multipart/form-data">

			{{ csrf_field() }}

			<div class="form-group">
				<label>Kempen:</label>
				<select name="campaign_id" class="form-control" id="select_kempen">
					@foreach ($campaigns as $campaign)
						<option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
					@endforeach 
				</select>
			</div>

			<div class="form-group">
				<label>Nama (Tidak melebihi 20 huruf):</label>
				<input name="name" class="form-control" type="text" placeholder="Nama" id="input_nama" />
			</div>

			<div class="form-group">
				<label>Jenis ID:</label>
				<select name="id_type" class="form-control" id="select_jenisid">
					@foreach ($idtypes as $idtype)
						<option value="{{ $idtype->id }}">{{ $idtype->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label id="label_noid">Nombor Kad Pengenalan:</label>
				<input name="id_number" class="form-control" type="text" placeholder="Nombor Kad Pengenalan" id="input_nomborid" />
			</div>

			<div class="form-group">
				<label>Kategori:</label>
				<select name="category_id" class="form-control" id="select_kategori">
					@foreach ($categories as $category)
						<option value="{{ $category->id }}">{{ $category->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Sub-kategori:</label>
				<select name="subcategory_id" class="form-control" id="select_subkategori">
					<option>Pilih di sini</option>
				</select>
			</div>

			<div class="form-group hidden" id="nojersi-container">
				<label id="label_nojersi">Nombor Jersi:</label>
				<input name="jersey_number" class="form-control" type="text" placeholder="Nombor Jersi" id="input_nojersi" />
			</div>

			<div class="form-group hidden" id="suratpengesahan-container">
				<label>Surat pengesahan editor media:</label>
				<input name="letter_src" type="file" class="form-control-file" id="file_surat">
				<span>Fail format yang diterima: pdf, doc, docx tidak melebihi saiz 2MB</span>
			</div>

			<div class="form-group">
				<label>Organisasi:</label>
				<select name="organization_id" class="form-control" id="select_organisasi">
					@foreach ($organizations as $organization)
						<option value="{{ $organization->id }}">{{ $organization->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<label>Emel:</label>
				<input name="email" class="form-control" type="text" placeholder="Emel" id="input_emel" />
			</div>

			<div class="form-group">
				<label>Nombor Telefon:</label>
				<input name="phone_number" class="form-control" type="text" placeholder="Nombor telefon" id="input_nombortelefon" />
			</div>

			<div class="form-group">
				<img class="photo-sample" src="/images/passport_size_photo.png" />
			</div>

			<div class="form-group">
				<label>Gambar ukuran passport (50mm x 35mm):</label>
				<input name="photo_src" type="file" class="form-control-file" id="file_gambar">
				<span>Fail format yang diterima: png, jpeg, jpg, bmp tidak melebihi saiz 2MB</span>
			</div>

			<div class="form-group bankakaun-container hidden">
				<label>Bank (Untuk sukarelawan sahaja):</label>
				<select name="bank_id" class="form-control" id="select_bank">
					@foreach ($banks as $bank)
						<option value="{{ $bank->id }}">{{ $bank->name }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group bankakaun-container hidden">
				<label>Nombor Akaun:</label>
				<input name="account_number" class="form-control" type="text" placeholder="Nombor akaun" id="input_nomborakaun" />
			</div>

			<button type="submit" class="btn btn-primary" id="btn-submit-form">Preview</button>

			<button type="clear" class="btn btn-secondary">Padam</button>

			</form>

		</div>

@endsection

@section('footer')

	<script type="text/javascript">
		
		$(document).ready(function(){
			
			$("#select_jenisid").change(function() {
  				
  				idtype = $(this).val();
			
			});

			// Kategori
			$( "#select_kategori" ).change(function() {

				var category_id = $(this).val();
				var category_name = $( 'option:selected', this ).text();
  				
  				$.get('subcategories/' + category_id, function (data) {
   					
	   				$( '#select_subkategori > option' ).remove();
	  						
	  				$.each(data, function (index) {	

						//console.log(data[index]['name']);
						$( '#select_subkategori' ).append("<option " + "value='" + data[index]['id'] + "'  >" +  data[index]['name'] + "</option>");
	        		
	        		});

	        	});

	        	if ( category_name == "SUKARELAWAN" )
	        		$( '.bankakaun-container' ).show();
	        	else
	        		$( '.bankakaun-container' ).css('display','none');

				if ( category_name == "PRESS" || category_name == "PHOTOGRAPHER" || category_name == "NON-RIGHT HOST" || category_name == "HOST BROADCASTER" || category_name == "OFFICIAL PHOTOGRAPHER" )
					$( '#suratpengesahan-container' ).show();
				else
					$( '#suratpengesahan-container' ).css('display','none');

			});

			// Nombor ID
			$( '#select_jenisid' ).change(function() {

				var id_type = $( '#select_jenisid option:selected' ).text();

				$( '#label_noid' ).text('Nombor ' + id_type);

				$( '#input_nomborid' ).attr('placeholder', 'Nombor ' + id_type);
			
			});

			$( '#select_subkategori' ).change(function() {

				var sub_category = $( 'option:selected', this ).text();

				if ( sub_category == "PEMAIN" )
					$('#nojersi-container').show();
				else
					$('#nojersi-container').css('display','none');

			});

			// Category ID for media: 9, 10, 11, 12

		});

	</script>

@endsection