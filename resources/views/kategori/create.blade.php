@extends('layouts.dd')
@section('content')
<div class="container">
<div class="row">
	<div class="panel panel-default">	
    <div class="panel-heading">
      Tambah Kategori

    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>

		<div class="panel-body">
			<form action="{{route('kategori.store')}}" method ="post">
				{{csrf_field()}}
				<div class="form-group">
					<label class="control-lable">Kategori</label>
					<input type="text" name="a" class="form-control" required="">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Simpan</button>
					<button type="reset" class="btn btn-danger">Reset</button>
					<div class="btn-flat btn btn-primary" > <a href="{{URL::previous()}}"><font color="white"> Kembali</font></a></div>
				</div>
			</form>	
		</div>
	</div>
</div>
</div>
@endsection