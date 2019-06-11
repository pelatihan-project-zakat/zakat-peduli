<!doctype html>
<html lang="en">

@include('templates.partials.head')

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		
		@include('templates.partials.navbar')

		@include('templates.partials.sidebar')

		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Kategori Donasi</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- INPUTS -->
							<div class="panel">

								<form action="{{ route('admin.donations.store') }}" method="POST" enctype="multipart/form-data">
								@csrf

								<div class="panel-body">
									<p>Nama Donasi</p>
									<input type="text" class="form-control {{ $errors->has('nama_donasi') ? 'is-invalid' : ' ' }}" placeholder="Masukkan Nama Donasi" name="nama_donasi">
									<div class="invalid-feedback">
										{{ $errors->first('nama_donasi') }}
									</div>  
									<br>

									<p>Keterangan</p>
									<textarea name ="keterangan" class="form-control {{ $errors->has('keterangan') ? 'is-invalid' : ' ' }}" placeholder="Keterangan Donasi" rows="4"></textarea>
									<div class="invalid-feedback">
										{{ $errors->first('keterangan') }}
									</div> 
									<br>

									<input class="btn btn-primary" type="submit" value="Save" >
								</div>
							</div>
							<!-- END INPUTS -->
						</div>
						<div class="col-md-6">
							
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	
	@include('templates.partials.script2')
</body>

</html>
