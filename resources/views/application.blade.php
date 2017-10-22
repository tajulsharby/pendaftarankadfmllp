<!DOCTYPE html>
<html>
<head>
	<title>Football Malaysia LLP - Permohonan Kad Akreditasi</title>

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

	<!-- Bootstrap 4 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#select_jenisid").change(function() {
  				idtype = $(this).val();
  				console.log('Jenis ID:' + idtype);
			});

			// Kategori
			$( "#select_kategori" ).change(function() {

				category_id = $(this).val();
  				
  				console.log('Kategori:' + category_id);

  				$.get('subcategories/' + category_id, function (data) {
   					
	   				$( '#select_subkategori > option' ).remove();
	  						
	  				$.each(data, function (index) {	

						//console.log(data[index]['name']);
						$( '#select_subkategori' ).append("<option " + "value='" + data[index]['id'] + "'  >" +  data[index]['name'] + "</option>");
	        		
	        		});

	        	});	 

			});

			// Nombor ID
			$( '#select_jenisid' ).change(function() {

				var jenisid = $( '#select_jenisid option:selected' ).text();

				$( '#label_noid' ).text(jenisid);

				$( '#input_nomborid' ).attr('placeholder', jenisid);
			
			});

		});
	</script>

</head>
<body>
	<h3>Permohonan Kad Akreditasi</h3>
	<div class="container">
		<div class="form-container">
			<form>
				<div class="form-group">
					<label>Kempen:</label>
					<select class="form-control" id="select_kempen">
						@foreach ($campaigns as $campaign)
							<option value="{{ $campaign->id }}">{{ $campaign->name }}</option>
						@endforeach 
					</select>
				</div>
				<div class="form-group">
					<label>Nama:</label>
					<input class="form-control" type="text" placeholder="Nama" id="input_nama" />
				</div>
				<div class="form-group">
					<label>Jenis ID:</label>
					<select class="form-control" id="select_jenisid">
						@foreach ($idtypes as $idtype)
							<option value="{{ $idtype->id }}">{{ $idtype->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label id="label_noid">Nombor Kad Pengenalan:</label>
					<input class="form-control" type="text" placeholder="Nombor Kad Pengenalan" id="input_nomborid" />
					</select>
				</div>
				<div class="form-group">
					<label>Kategori:</label>
					<select class="form-control" id="select_kategori">
						@foreach ($categories as $category)
							<option value="{{ $category->id }}">{{ $category->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Sub-kategori:</label>
					<select class="form-control" id="select_subkategori">
						<option>Pilih di sini</option>
					</select>
				</div>
				<div class="form-group">
					<label>Organisasi:</label>
					<select class="form-control" id="select_organisasi">
					</select>
				</div>
				<div class="form-group">
					<label>Emel:</label>
					<input class="form-control" type="text" placeholder="Emel" id="input_emel" />
					</select>
				</div>
				<div class="form-group">
					<label>Nombor Telefon:</label>
					<input class="form-control" type="text" placeholder="Nombor telefon" id="input_nombortelefon" />
					</select>
				</div>
				<div class="form-group">
					<label>Gambar:</label>
					<input type="file" class="form-control-file" id="file_gambar">
				</div>
				<div class="form-group">
					<label>Bank (Untuk sukarelawan sahaja):</label>
					<select class="form-control" id="select_bank">
						@foreach ($banks as $bank)
							<option value="{{ $bank->id }}">{{ $bank->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Nombor Akaun:</label>
					<input class="form-control" type="text" placeholder="Nombor akaun" id="input_nomborakaun" />
					</select>
				</div>
				<button type="button" class="btn btn-primary" id="btn-submit-form">Preview</button>
				<button type="clear" class="btn btn-secondary">Padam</button>
			</form>
		</div>
	</div>
</body>
</html>