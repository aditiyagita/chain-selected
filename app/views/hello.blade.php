<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {  
			$(".loading").hide();
		       $('#provinsi').change(function(){
		        var prov = this.value ;
		           var url = "{{ URL::asset('/') }}kabupaten/"+prov;
		           $(".loading").show();
		           $('#posisi').delay(1000).queue(function( nxt ) {
					   $(this).load(url);
					   nxt();
				   }); 
		       });    
		});
	</script>

</head>
<body>
	<div class="row container">
		<div class="col-md-12">
			<br>
			<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label for="inputEmail1" class="col-lg-2 control-label">Provinsi</label>
			    <div class="col-lg-10">
			      	<select class="form-control" id="provinsi">
					  <option selected>- Pilih Provinsi -</option>
					  @foreach($data['provinsi'] as $provinsi)
					  	<option value="{{ $provinsi->idprovinsi }}">{{ $provinsi->provinsi }}</option>
					  @endforeach
					</select>
			    </div>
			  </div>
			  <div id="posisi">
				  <div class="loading" style="padding-bottom:10px"> Loading...</div>
			  </div>
			</form>
		</div>
	</div>
</body>
</html>
