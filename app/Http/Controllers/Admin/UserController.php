<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{

    public function userList(Request $request)
    {
        // dd('Fetching admin list...'); // Debugging line, can be removed later
        try {
            if ($request->ajax()) {

                $userList = User::query();

                return DataTables::of($userList)
                    ->addIndexColumn()
                    ->addColumn('action', function ($userList) {

                        $edit = '<a href="/admin/editAdmin/' . $userList->token . '"><button type="button" class="btn btn-sm btn-success">Edit</button></a>';
                        $delete = '<form method="POST" action="/admin/deleteAdmin/' . $userList->token . '" accept-charset="UTF-8" class="delete" style="display:inline">
                    ' . csrf_field() . '
                    <input name="_method" value="DELETE" type="hidden">
                    <button type="button" class="btn btn-danger btn-sm admin_delete_alert">Delete</button></form>';

                        return $edit . ' ' . $delete;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }
        } catch (\Exception $e) {
            info("Error in adminList(): " . $e->getMessage());
            Session::flash("error", "There was some error, please try again later.");
        }
        return view('admin.manage_users.userList');
    }
    public function userList()
    {
        return view("admin.manage_users.userList");
    }
    public function addUser()
    {
        return view("admin.manage_users.addUser");
    }

    public function editUser()
    {
        return view("admin.manage_users.editUser");
    }

    public function addUpdateUser(Request $request, $token = false)
    {
        try {
            if ($request->method() == "PUT") {
                $updateUser = User::where(['token' => $token])->first();
                $post = $request->all();
                $post['id'] = $updateUser->id;
                if ($request->password != "") {
                    $post['password'] = Hash::make($request->password);
                } else {
                    unset($post['password']);
                }
                $updateUser->update($post);
                Session::flash("success", "User details have been successfully updated.");
            } else {
                $post = $request->all();
                $post['token'] = strtoupper((string) Str::uuid());
                $post['password'] = Hash::make($post['password']);
                User::create($post);
                Session::flash("success", "User details have been successfully updated.");
            }
        } catch (\Exception $e) {
            info("Error in addUpdateUser(): " . $e->getMessage());
            Session::flash("error", "There was some error, please try again later.");
        }
        return redirect()->route('admin.userList');

    }


}
