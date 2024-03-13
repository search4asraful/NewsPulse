@extends('backend.master')

@section('content')
<main class="main-wrapper">
    <div class="main-content">
      <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Home</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:void(0)"></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">eCommerce</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
      <div class="row row-cols-1 row-cols-xl-4">
        <div class="col">
          <div class="card border-primary border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">Total Sales</p>
                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">$8925.60</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart1"></div>
               </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-success border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">Total Income</p>
                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">$9627.20</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart2"></div>
               </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-danger border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">Product Views</p>
                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">65.7K</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart3"></div>
               </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card border-warning border-bottom rounded-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0 fs-6">New Accouts</p>
                  <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle-nocaret options dropdown-toggle"
                      data-bs-toggle="dropdown">
                      <span class="material-icons-outlined fs-5">more_vert</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:void(0)">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:void(0)">Something else here</a></li>
                    </ul>
                  </div>
               </div>
               <div class="d-flex align-items-center justify-content-between mt-3">
                  <div class="">
                    <h4 class="mb-0 fw-bold">2497</h4>
                    <div class="d-flex align-items-center justify-content-start gap-1 text-success mt-3">
                      <span class="material-icons-outlined fs-6">north</span>
                      <p class="mb-0 fs-6">5.6%</p>
                    </div>
                  </div>
                  <div id="chart4"></div>
               </div>
            </div>
          </div>
        </div>
      </div><!--end row-->


      <div class="row">
        <div class="col-12 col-xl-6">
          <div class="card rounded-4">
            <div class="card-body">
              <div id="chart5" class="mb-4"></div>
              <h4 class="mb-0">Total Earning</h4>
              <div class="d-flex align-items-center gap-4 mt-0">
                <div class="">
                  <h1 class="mb-0">36.7%</h1>
                </div>
                <div class="d-flex align-items-center align-self-end gap-2">
                  <span class="material-icons-outlined text-success">trending_up</span>
                  <p class="mb-0 text-success">34.5%</p>
                </div>
              </div>
              <p class="mb-5">Compare to last year</p>
              <div class="d-flex flex-column gap-3">
                <div class="d-flex align-items-center gap-3">
                  <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                      class="material-icons-outlined fs-6 text-primary">fiber_manual_record</span>Sales</p>
                  <div class="progress w-100" style="height: 5px;">
                    <div class="progress-bar bg-primary" style="width: 65%"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                      class="material-icons-outlined fs-6 text-danger">fiber_manual_record</span>Product</p>
                  <div class="progress w-100" style="height: 5px;">
                    <div class="progress-bar bg-danger" style="width: 65%"></div>
                  </div>
                </div>
                <div class="d-flex align-items-center gap-3">
                  <p class="mb-0 d-flex align-items-center gap-2 w-25"><span
                      class="material-icons-outlined fs-6 text-success">fiber_manual_record</span>Income</p>
                  <div class="progress w-100" style="height: 5px;">
                    <div class="progress-bar bg-success" style="width: 65%"></div>
                  </div>
                </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-xl-6">
          <div class="card rounded-4">
            <div class="card-body">
              <div id="chart6"></div>
              <div class="d-flex align-items-start justify-content-around bg-light p-3 rounded-3 mt-3">
                <div class="">
                  <p class="mb-1 fs-6 fw-bold">Monthly</p>
                  <h2 class="mb-0">65,127</h2>
                  <p class="mb-0"><span class="text-success me-2 fw-medium">16.5%</span><span>55.21 USD</span></p>
                </div>
                <div class="vr"></div>
                <div class="">
                  <p class="mb-1 fs-6 fw-bold">Yearly</p>
                  <h2 class="mb-0">984,246</h2>
                  <p class="mb-0"><span class="text-success me-2 fw-medium">24.9%</span><span>267.35 USD</span></p>
                </div>
              </div>

              <div class="d-flex flex-column mt-3">
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0">Los Angeles</p>
                  <p class="mb-0 fw-bold">301,548</p>
                </div>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0">New York</p>
                  <p class="mb-0 fw-bold">987,457</p>
                </div>
                <hr>
                <div class="d-flex align-items-center justify-content-between">
                  <p class="mb-0">Canada</p>
                  <p class="mb-0 fw-bold">249,124</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!--end row-->
    </div>
  </main>
@endsection