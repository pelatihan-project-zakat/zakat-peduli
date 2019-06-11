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
					<h3 class="page-title">Kategori Program</h3>
					<div class="row">
						<div class="col-md-6">
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-body">
                                        <p class="demo-button">
                                            <a href ="donations/create" type="button" class="btn btn-default"><i class="fa fa-plus-square"></i> Donasi </a>
										</p>
									<table class="table table-striped">
										<thead>
											<tr>
												<th>ID</th>
                                                <th>Nama</th>
                                                <th>Image</th>
												<th>Keterangan</th>
												<th>Action</th>
											</tr>
                                        </thead>

                                        @foreach ($donations as $donation)
										<tbody>
											<tr>
												<td>{{ $donation->id }}</td>
												<td>{{ $donation->nama_donasi }}</td>
												<td>{{ $donation->keterangan }}</td>

												<td align="center">
													<a href="{{ route('admin.donations.edit', $donation->id) }}" class="btn btn-warning">Update</a>                                  
												</td>

												<td align="center">
													<form action="{{ route('admin.donations.destroy', $donation) }}" method="POST">
														@method("DELETE")
														@csrf
														<button type="submit" v class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</button>
													</form> 			 
												</td>
											</tr>
                                        </tbody>
                                        @endforeach
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
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
