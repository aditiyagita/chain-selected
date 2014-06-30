<div class="form-group">
	<label for="inputEmail1" class="col-lg-2 control-label">Kabupaten</label>
	<div class="col-lg-10">
		<select class="form-control" id="provinsi">
			<option selected>- Pilih Kabupaten -</option>
			@foreach($data['kabupaten'] as $kabupaten)
				<option value="{{ $kabupaten->idkabupaten }}">{{ $kabupaten->kabupaten }}</option>
			@endforeach
		</select>
	</div>
</div>