@extends('layouts.dashboard.master')

@section('page_css')
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">DataTables.net</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-striped table-bordered dataTable dtr-inline"
                            cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info"
                            style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                        colspan="1" style="width: 191px;" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                        style="width: 293px;" aria-label="Position: activate to sort column ascending">
                                        Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                        style="width: 137px;" aria-label="Office: activate to sort column ascending">
                                        Phone</th>
                                        <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                        style="width: 80px;" aria-label="Age: activate to sort column ascending">Company
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1"
                                        style="width: 80px;" aria-label="Age: activate to sort column ascending">Subscription
                                    </th>
                                    <th class="disabled-sorting text-right sorting" tabindex="0"
                                        aria-controls="datatable" rowspan="1" colspan="1" style="width: 100px;"
                                        aria-label="Actions: activate to sort column ascending">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Phone</th>
                                    <th rowspan="1" colspan="1">Company</th>
                                    <th rowspan="1" colspan="1">Subscription</th>
                                    <th class="disabled-sorting text-right" rowspan="1" colspan="1">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $user)
                                <tr role="row">
                                    <td tabindex="0" class="sorting_1">{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->phone}}</td>
                                    <td>{{$user->company->name}}</td>
                                    <td>{{$user->name}}</td>
                                    <td class="text-right">
                                        <a href="#" class="btn btn-info btn-link btn-icon btn-sm like"><i
                                                class="fa fa-heart"></i></a>
                                        <a href="#" class="btn btn-warning btn-link btn-icon btn-sm edit"><i
                                                class="fa fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-link btn-icon btn-sm remove"><i
                                                class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- end content-->
    </div><!--  end card  -->
</div> <!-- end col-md-12 -->
</div>
@endsection

@section('page_script')
<script>
    $(document).ready(function() {
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }

      });

      var table = $('#datatable').DataTable();

    //   // Edit record
    //   table.on('click', '.edit', function() {
    //     $tr = $(this).closest('tr');

    //     var data = table.row($tr).data();
    //     alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    //   });

    //   // Delete a record
    //   table.on('click', '.remove', function(e) {
    //     $tr = $(this).closest('tr');
    //     table.row($tr).remove().draw();
    //     e.preventDefault();
    //   });

    //   //Like record
    //   table.on('click', '.like', function() {
    //     alert('You clicked on Like button');
    //   });
    });
</script>
@endsection
