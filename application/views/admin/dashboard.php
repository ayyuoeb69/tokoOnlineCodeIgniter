
<!-- /top navigation -->

<!-- page content -->
	<h2 style="color:#555">Selamat Datang Admin :)</h2><br><br>
<div class="row">

	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-primary">
			<div class="card-body pb-0">
				<div class="text-value"><?= $member->jml ?></div>
				<div>Members Register</div>
			</div>
			<div class="chart-wrapper mt-3 mx-3" style="height:70px;">
				<canvas class="chart" id="card-chart1" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-info">
			<div class="card-body pb-0">
				<div class="text-value"><?= $tra->jml ?></div>
				<div>Online Transaction</div>
			</div>
			<div class="chart-wrapper mt-3 mx-3" style="height:70px;">
				<canvas class="chart" id="card-chart2" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-warning">
			<div class="card-body pb-0">
				<div class="text-value"><?= $pro->jml ?></div>
				<div>Online Product</div>
			</div>
			<div class="chart-wrapper mt-3" style="height:70px;">
				<canvas class="chart" id="card-chart3" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
	<div class="col-sm-6 col-lg-3">
		<div class="card text-white bg-success">
			<div class="card-body pb-0">
				<div class="text-value"><?= $suk->jml ?></div>
				<div>Success Transaction</div>
			</div>
			<div class="chart-wrapper mt-3 mx-3" style="height:70px;">
				<canvas class="chart" id="card-chart4" height="70"></canvas>
			</div>
		</div>
	</div>
	<!-- /.col-->
</div>

<!-- /page content -->

<!-- footer content -->
