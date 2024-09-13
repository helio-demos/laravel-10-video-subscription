@extends('_layouts.lite')
@section('content')

  <div class="col-md-8 mx-auto">





    <div class="card">
      <div class="table-responsive">
        <table class="table table-vcenter card-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Title</th>
              <th>Email</th>
              <th>Role</th>
              <th class="w-1"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Paweł Kuna</td>
              <td class="text-secondary">
                UI Designer, Training
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
              <td class="text-secondary">
                User
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
            <tr>
              <td>Jeffie Lewzey</td>
              <td class="text-secondary">
                Chemical Engineer, Support
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
              <td class="text-secondary">
                Admin
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
            <tr>
              <td>Mallory Hulme</td>
              <td class="text-secondary">
                Geologist IV, Support
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
              <td class="text-secondary">
                User
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
            <tr>
              <td>Dunn Slane</td>
              <td class="text-secondary">
                Research Nurse, Sales
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
              <td class="text-secondary">
                Owner
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
            <tr>
              <td>Emmy Levet</td>
              <td class="text-secondary">
                VP Product Management, Accounting
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
              <td class="text-secondary">
                Admin
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
            <tr>
              <td>Maryjo Lebarree</td>
              <td class="text-secondary">
                Civil Engineer, Product Management
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
              <td class="text-secondary">
                User
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
            <tr>
              <td>Egan Poetz</td>
              <td class="text-secondary">
                Research Nurse, Engineering
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
              <td class="text-secondary">
                Admin
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
            <tr>
              <td>Kellie Skingley</td>
              <td class="text-secondary">
                Teacher, Services
              </td>
              <td class="text-secondary"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
              <td class="text-secondary">
                Owner
              </td>
              <td>
                <a href="#">Edit</a>
              </td>
            </tr>
          </tbody>
        </table>
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
