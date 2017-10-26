@extends('layouts.layout')

@section('content')
	
	<h3>Preview Maklumat</h3><br  />

		<div class="row">
			<div class="column">
				<img src="{{ $application['photo_src'] }}" />
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Kempen:</label>
			</div>
			<div class="column">
				<span>{{ $application['campaign'] }}</span>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Nama:</label>
			</div>
			<div class="column">
				<span>{{ $application['name'] }}</span>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Jenis ID:</label>
			</div>
			<div class="column">
				<span>{{ $application['id_type'] }}</span>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Nombor ID:</label>
			</div>
			<div class="column">
				<span>{{ $application['id_number'] }}</span>
			</div>
		</div>

		@if (!empty($application['jersey_number']))

		<div class="row">
			<div class="column">
				<label>Nombor Jersi:</label>
			</div>
			<div class="column">
				<span>{{ $application['jersey_number'] }}</span>
			</div>
		</div>

		@endif

		<div class="row">
			<div class="column">
				<label>Kategori:</label>
			</div>
			<div class="column">
				<span>{{ $application['category'] }}</span>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Sub-kategori:</label>
			</div>
			<div class="column">
				<span>{{ $application['sub_category'] }}</span>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Organisasi:</label>
			</div>
			<div class="column">
				<span>{{ $application['organization'] }}</span>
			</div>
		</div>

		@if (!empty($application['letter_src']))

		<div class="row">
			<div class="column">
				<label>Surat pengesahan editor media:</label>
			</div>
			<div class="column">
				<span><a href="{{ $application['letter_src'] }}" target="_blank">Dilampirkan</a></span>
			</div>
		</div>

		@endif

		<div class="row">
			<div class="column">
				<label>Emel:</label>
			</div>
			<div class="column">
				<span>{{ $application['email'] }}</span>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Nombor Telefon:</label>
			</div>
			<div class="column">
				<span>{{ $application['phone_number'] }}</span>
			</div>
		</div>

		@if ($application['category'] == 'Sukarelawan')

		<div class="row">
			<div class="column">
				<label>Bank:</label>
			</div>
			<div class="column">
				<span>{{ $application['bank'] }}</span>
			</div>
		</div>

		<div class="row">
			<div class="column">
				<label>Nombor Akaun:</label>
			</div>
			<div class="column">
				<span>{{ $application['account_number'] }}</span>
			</div>
		</div>

		@endif

		<div class="row">

			<div class="column form-column">

				<form method="post" action="{{action('ApplicationsController@update', $application['id'])}}">

					{{ csrf_field() }}

					<input name="_method" type="hidden" value="PATCH">		

					<button type="submit" class="btn btn-primary" id="btn-submit-form">Hantar</button>

				</form>

			</div>

			<div class="column form-column">

				<form method="post" action="{{action('ApplicationsController@destroy', $application['id'])}}">

					{{ csrf_field() }}

					<input name="_method" type="hidden" value="DELETE">

					<button type="submit" class="btn btn-secondary">Batal</button>

				</form>

			</div>

		</div>

@endsection

@section('footer')

@endsection