@extends('admin.layouts.app')
@section('title', 'User List')
@section('content')
<div class="module">
    <div class="module-head">
        <h3>DataTables</h3>
    </div>
    <div class="module-body table">
        <table cellpadding="0" cellspacing="0" border="0"
            class="datatable-1 table table-bordered table-striped	 display" width="100%">
            <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>
@endsection