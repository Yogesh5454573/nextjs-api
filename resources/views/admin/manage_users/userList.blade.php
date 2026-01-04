@extends('admin.layouts.app')
@section('title', 'User List')
@section('content')
<div class="module">
    <div class="module-head">
        <h3>DataTables</h3>
    </div>
    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0" id="data-table"
            class="datatable-1 table table-bordered table-striped display" width="100%">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Is Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection
@section('custom_js')
    <script src="{{ asset('backend/assets/bootstrap/datatables-bs5/datatables-bootstrap5.js') }}"></script>

    <script type="text/javascript">
        $(function() {

            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.userList') }}",
                columns: [{
                        data: 'id',
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        }
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'mobile',
                        name: 'mobile'
                    },
                    {
                        data: 'is_active',
                        name: 'is_active'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });

        });

        jQuery(document).on("click", "button.user_delete_alert", function() {
            if (confirm("Are you sure, want to delete?"))
                jQuery(this).parent().submit();
        });
    </script>
@endsection