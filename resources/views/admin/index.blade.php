@extends('admin.admin_dashboard')

@section('admin')


<div class="page-content">

  <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">
      <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
        <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i
            data-feather="calendar" class="text-primary"></i></span>
        <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
      </div>
      <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
        <i class="btn-icon-prepend" data-feather="printer"></i>
        Print
      </button>
      <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        <i class="btn-icon-prepend" data-feather="download-cloud"></i>
        Download Report
      </button>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-xl-12 stretch-card">
      <div class="row flex-grow-1">
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Sells</h6>
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">3,897</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Orders</h6>
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">3,897</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Total Products</h6>
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">{{ $totalProducts }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-baseline">
                <h6 class="card-title mb-0">Daily Visitors</h6>
              </div>
              <div class="row">
                <div class="col-6 col-md-12 col-xl-5">
                  <h3 class="mb-2">89.87</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-7 col-xl-8 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Monthly sales</h6>
          </div>
          <p class="text-muted mb-2">Sales are activities related to selling or the number of goods or services sold in
            a given time period.</p>
          <div id="monthlySalesChart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-xl-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline">
            <h6 class="card-title mb-0">Cloud storage</h6>
          </div>
          <div id="storageChart"></div>
          <div class="row mb-3">
            <div class="col-6 d-flex justify-content-end">
              <div>
                <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase fw-bolder">Total
                  storage <span class="p-1 ms-1 rounded-circle bg-secondary"></span></label>
                <h5 class="fw-bolder mb-0 text-end">8TB</h5>
              </div>
            </div>
            <div class="col-6">
              <div>
                <label class="d-flex align-items-center tx-10 text-uppercase fw-bolder"><span
                    class="p-1 me-1 rounded-circle bg-primary"></span> Used storage</label>
                <h5 class="fw-bolder mb-0">~5TB</h5>
              </div>
            </div>
          </div>
          <div class="d-grid">
            <button class="btn btn-primary">Upgrade storage</button>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- row -->

  <div class="row">
    <div class="col-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-baseline mb-2">
            <h6 class="card-title mb-0">Recents Orders</h6>
          </div>
          <div class="table-responsive">
            <table class="table table-hover mb-0">
              <thead>
                <tr>
                  <th class="pt-0">Order Id</th>
                  <th class="pt-0">Customer</th>
                  <th class="pt-0">Product</th>
                  <th class="pt-0">Amount</th>
                  <th class="pt-0">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Fahim</td>
                  <td>Leather bag</td>
                  <td>$98.00</td>
                  <td><span class="badge bg-success">Paid</span></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Mahim</td>
                  <td>Fashion jeket</td>
                  <td>$55.00</td>
                  <td><span class="badge bg-danger">Pending</span></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Likhon</td>
                  <td>Cotton tops</td>
                  <td>$85.00</td>
                  <td><span class="badge bg-danger">Unpaid</span></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Bijoy</td>
                  <td>Black half shirt</td>
                  <td>$50.00</td>
                  <td><span class="badge bg-danger">Unpaid</span></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Rahim</td>
                  <td>Leather shoe</td>
                  <td>$60.00</td>
                  <td><span class="badge bg-danger">Unpaid</span></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Karim</td>
                  <td>Leather bag</td>
                  <td>$98.00</td>
                  <td><span class="badge bg-success">Paid</span></td>
                </tr>
                <tr>
                  <td class="border-bottom">7</td>
                  <td class="border-bottom">Hasem</td>
                  <td class="border-bottom">Fashion jeket</td>
                  <td class="border-bottom">$55.00</td>
                  <td class="border-bottom"><span class="badge bg-danger">Pending</span></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="row">
  <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Inbox</h6>
          <div class="dropdown mb-2">
            <a type="button" id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column">
          <a href="javascript:;" class="d-flex align-items-center border-bottom pb-3">
            <div class="me-3">
              <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="text-body mb-2">Leonardo Payne</h6>
                <p class="text-muted tx-12">12.30 PM</p>
              </div>
              <p class="text-muted tx-13">Hey! there I'm available...</p>
            </div>
          </a>
          <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            <div class="me-3">
              <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="text-body mb-2">Carl Henson</h6>
                <p class="text-muted tx-12">02.14 AM</p>
              </div>
              <p class="text-muted tx-13">I've finished it! See you so..</p>
            </div>
          </a>
          <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            <div class="me-3">
              <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="text-body mb-2">Jensen Combs</h6>
                <p class="text-muted tx-12">08.22 PM</p>
              </div>
              <p class="text-muted tx-13">This template is awesome!</p>
            </div>
          </a>
          <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            <div class="me-3">
              <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="text-body mb-2">Amiah Burton</h6>
                <p class="text-muted tx-12">05.49 AM</p>
              </div>
              <p class="text-muted tx-13">Nice to meet you</p>
            </div>
          </a>
          <a href="javascript:;" class="d-flex align-items-center border-bottom py-3">
            <div class="me-3">
              <img src="https://via.placeholder.com/35x35" class="rounded-circle wd-35" alt="user">
            </div>
            <div class="w-100">
              <div class="d-flex justify-content-between">
                <h6 class="text-body mb-2">Yaretzi Mayo</h6>
                <p class="text-muted tx-12">01.19 AM</p>
              </div>
              <p class="text-muted tx-13">Hey! there I'm available...</p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-7 col-xl-8 stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Projects</h6>
          <div class="dropdown mb-2">
            <a type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="eye" class="icon-sm me-2"></i> <span class="">View</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="trash" class="icon-sm me-2"></i> <span class="">Delete</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Print</span></a>
              <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Download</span></a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-hover mb-0">
            <thead>
              <tr>
                <th class="pt-0">#</th>
                <th class="pt-0">Project Name</th>
                <th class="pt-0">Start Date</th>
                <th class="pt-0">Due Date</th>
                <th class="pt-0">Status</th>
                <th class="pt-0">Assign</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>NobleUI jQuery</td>
                <td>01/01/2022</td>
                <td>26/04/2022</td>
                <td><span class="badge bg-danger">Released</span></td>
                <td>Leonardo Payne</td>
              </tr>
              <tr>
                <td>2</td>
                <td>NobleUI Angular</td>
                <td>01/01/2022</td>
                <td>26/04/2022</td>
                <td><span class="badge bg-success">Review</span></td>
                <td>Carl Henson</td>
              </tr>
              <tr>
                <td>3</td>
                <td>NobleUI ReactJs</td>
                <td>01/05/2022</td>
                <td>10/09/2022</td>
                <td><span class="badge bg-info">Pending</span></td>
                <td>Jensen Combs</td>
              </tr>
              <tr>
                <td>4</td>
                <td>NobleUI VueJs</td>
                <td>01/01/2022</td>
                <td>31/11/2022</td>
                <td><span class="badge bg-warning">Work in Progress</span>
                </td>
                <td>Amiah Burton</td>
              </tr>
              <tr>
                <td>5</td>
                <td>NobleUI Laravel</td>
                <td>01/01/2022</td>
                <td>31/12/2022</td>
                <td><span class="badge bg-danger">Coming soon</span></td>
                <td>Yaretzi Mayo</td>
              </tr>
              <tr>
                <td>6</td>
                <td>NobleUI NodeJs</td>
                <td>01/01/2022</td>
                <td>31/12/2022</td>
                <td><span class="badge bg-primary">Coming soon</span></td>
                <td>Carl Henson</td>
              </tr>
              <tr>
                <td class="border-bottom">3</td>
                <td class="border-bottom">NobleUI EmberJs</td>
                <td class="border-bottom">01/05/2022</td>
                <td class="border-bottom">10/11/2022</td>
                <td class="border-bottom"><span class="badge bg-info">Pending</span></td>
                <td class="border-bottom">Jensen Combs</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> 
    </div>
  </div>
</div> -->
</div>


@endsection