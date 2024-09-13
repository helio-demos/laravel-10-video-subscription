@extends('_layouts.lite')
@section('content')

  <div class="col-md-8 mx-auto">

            <h1>
              Sweet Alerts
            </h1>

            <a class="btn btn-primary me-3" id="confirm-approve">
              Confirm Approve
            </a>
            <a class="btn btn-primary me-3" id="confirm-reject">
              Confirm Reject
            </a>
            <a class="btn btn-primary me-3" id="processing-approve">
              Procession Approve
            </a>
            <a class="btn btn-primary me-3" id="processing-reject">
              Procession Reject
            </a>
            <a class="btn btn-primary me-3" id="approve-success">
              Approve Success
            </a>
            <a class="btn btn-primary me-3" id="reject-success">
              Reject Success
            </a>
            <a class="btn btn-primary me-3" id="another-admin-alerady-updated">
              Another Admin Already Updated
            </a>
            <a class="btn btn-primary me-3" id="back-online-reload-orders">
              Back online reload orders?
            </a>


            <h1>
              Toasts
            </h1>
            <a class="btn btn-primary me-3">
              No Internet Connections
            </a>
            <a class="btn btn-primary me-3">
              Other admin logs
            </a>




            <h1>
              Sales Order Status
            </h1>

            <a class="btn btn-primary me-3">
              No New Sales Orders
            </a>
            <a class="btn btn-primary me-3">
              Show 1000 New Sales Order of 50 Orders
            </a>
            <a class="btn btn-primary me-3">
              Loading Sales Orders ....
            </a>


            <h1>
              Sales Orders
            </h1>


            @for($i=0;$i<10;$i++)
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col">
                        <h3 class="card-title mb-1">
                          <a href="#" class="text-reset">Sales Order ID#{{$i}}</a>
                        </h3>
                        <div class="text-secondary">
                          Transation ID: {{rand(1000,1200)}}
                        </div>
                      </div>
                      <div class="col-auto">
                        <div class="dropdown">
                          <a href="#" class="btn btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                          </a>
                          <div class="dropdown-menu dropdown-menu-end" style="">
                            <a href="#" class="dropdown-item">Approve</a>
                            <a href="#" class="dropdown-item">Reject</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            @endfor

  </div>



  {{-- Sweet Alert --}}

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    // Confirm Approve
    document.querySelector('#confirm-approve')
      .addEventListener('click', function(){
        swal({
          title: "Confirm Approce",
          text: "Process can not undo!",
          icon: "success",
          button: "Approve",
        });

    });
    // Confirm Reject
    document.querySelector('#confirm-reject')
      .addEventListener('click', function(){
        swal({
          title: "Confirm Reject",
          text: "Process can not undo!",
          icon: "success",
          button: "Reject",
        });

    });
    // processing-approve
    document.querySelector('#processing-approve')
      .addEventListener('click', function(){
        swal({
          title: "Processing ...",
          text: "Approve process processing",
          button: false,
        });

    });
    // processing-reject
    document.querySelector('#processing-reject')
      .addEventListener('click', function(){
        swal({
          title: "Processing ...",
          text: "Reject process processing",
          button: false,
        });

    });
    // Approve Success
    document.querySelector('#approve-success')
      .addEventListener('click', function(){
        swal({
          title: "Approce Success",
          text: "Sales Order Successfully Approved",
          icon: "success",
          button: "Close",
        });

    });
    // Reject Success
    document.querySelector('#reject-success')
      .addEventListener('click', function(){
        swal({
          title: "Reject Success",
          text: "Sales Order Successfully Rejected",
          icon: "success",
          button: "Close",
        });

    });
    // Another Admin Already Updated
    document.querySelector('#another-admin-alerady-updated')
      .addEventListener('click', function(){
        swal({
          title: "Already Updated",
          text: "Another Admin Already Updated",
          button: "Close",
        });

    });
    // Back online reload orders
    document.querySelector('#back-online-reload-orders')
      .addEventListener('click', function(){
        swal({
          title: "Back Online",
          text: "Check new sales orders",
          button: "Check",
        });

    });

  </script>

@endsection
