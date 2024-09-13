@extends('_layouts.lite')
@section('content')

  <div class="col-md-8 mx-auto">
    <div class="card mb-3">
      <div class="card-body">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="card-title mb-1">
              <a href="#" class="text-reset">
                Admin Account Logout
              </a>
            </h3>
          </div>
          <div class="col-auto">
            <div class="dropdown">
              <a href="#" class="btn btn-outline-primary" data-bs-toggle="dropdown" aria-expanded="false">
                Logout
              </a>
              <div class="dropdown-menu dropdown-menu-end">
                <a href="#" class="dropdown-item">Logout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
