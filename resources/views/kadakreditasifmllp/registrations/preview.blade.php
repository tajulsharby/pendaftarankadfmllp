@extends('layouts.layout')

@section('content')
	
	<h3>Preview Maklumat</h3>

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

	<div class="row">
		<div class="column">
			<label>Nombor Jersi:</label>
		</div>
		<div class="column">
			<span>{{ $application['jersey_number'] }}</span>
		</div>
	</div>

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

	<button type="button" class="btn btn-primary" id="btn-submit-form">Hantar</button>

	<button type="clear" class="btn btn-secondary">Edit</button>

@endsection

@section('footer')

@endsection