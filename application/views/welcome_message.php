<!-- content-wrapper starts -->
<div class="content-wrapper">

	<div class="row">
		<div class="col-xl-6 grid-margin stretch-card flex-column">
			<h5 class="mb-2 text-titlecase mb-4">Status statistics</h5>
			<div class="row">
				<div class="col-md-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<p class="mb-0 text-muted">Transactions</p>
								<p class="mb-0 text-muted">+1.37%</p>
							</div>
							<h4>1352</h4>
							<canvas id="transactions-chart" class="mt-auto" height="65"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6 grid-margin stretch-card">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<div class="d-flex justify-content-between align-items-center mb-2">
								<div>
									<p class="mb-2 text-muted">Sales</p>
									<h6 class="mb-0">563</h6>
								</div>
								<div>
									<p class="mb-2 text-muted">Orders</p>
									<h6 class="mb-0">720</h6>
								</div>
								<div>
									<p class="mb-2 text-muted">Revenue</p>
									<h6 class="mb-0">5900</h6>
								</div>
							</div>
							<canvas id="sales-chart-a" class="mt-auto" height="65"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="row h-100">
				<div class="col-md-6 stretch-card grid-margin grid-margin-md-0">
					<div class="card">
						<div class="card-body d-flex flex-column justify-content-between">
							<p class="text-muted">Sales Analytics</p>
							<div class="d-flex justify-content-between align-items-center mb-2">
								<h3 class="mb-">27632</h3>
								<h3 class="mb-">78%</h3>
							</div>
							<canvas id="sales-chart-b" class="mt-auto" height="38"></canvas>
						</div>
					</div>
				</div>
				<div class="col-md-6 stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="row h-100">
								<div class="col-6 d-flex flex-column justify-content-between">
									<p class="text-muted">CPU</p>
									<h4>55%</h4>
									<canvas id="cpu-chart" class="mt-auto"></canvas>
								</div>
								<div class="col-6 d-flex flex-column justify-content-between">
									<p class="text-muted">Memory</p>
									<h4>123,65</h4>
									<canvas id="memory-chart" class="mt-auto"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 grid-margin stretch-card flex-column">
			<h5 class="mb-2 text-titlecase mb-4">Income statistics</h5>
			<div class="row h-100">
				<div class="col-md-12 stretch-card">
					<div class="card">
						<div class="card-body">
							<div class="d-flex justify-content-between align-items-start flex-wrap">
								<div>
									<p class="mb-3">Monthly Increase</p>
									<h3>67842</h3>
								</div>
								<div id="income-chart-legend" class="d-flex flex-wrap mt-1 mt-md-0">
								</div>
							</div>
							<canvas id="income-chart"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- content-wrapper ends -->