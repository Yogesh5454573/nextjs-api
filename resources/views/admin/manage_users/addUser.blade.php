@extends('admin.layouts.app')
@section('title', 'Add User')
@section('content')
    <div class="module">
        <div class="module-head">
            <h3>Add User</h3>
        </div>
        <div class="module-body">
            <form action="{{ route('admin.addUpdateUser') }}" method="POST" class="form-horizontal row-fluid">
                @csrf
                <div class="control-group">
                    <label class="control-label" for="name">Name </label>
                    <div class="controls">
                        <input name="name" type="text" id="name" placeholder="Name" class="span8">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">Email </label>
                    <div class="controls">
                        <input name="email" type="text" id="email" placeholder="Email" class="span8"
                            >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="mobile">Mobile </label>
                    <div class="controls">
                        <input name="mobile" type="text" placeholder="Mobile"
                             class="span8">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="password">Password</label>
                    <div class="controls">
                        <input name="password" class="span8" type="password" placeholder="password">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Is Active</label>
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" name="is_active" id="Yes" value="Yes" checked="">
                            Yes
                        </label>
                        <label class="radio">
                            <input type="radio" name="is_active" id="No" value="No">
                            No
                        </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn">Submit Form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection