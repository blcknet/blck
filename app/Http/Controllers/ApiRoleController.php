<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ApiRoleController extends Controller
{
    public function destroy(Request $request)
    {
        $message = '';
        $roles = explode(',', $request->roles);

        foreach ($roles as $roleId) {

            $role = Role::find($roleId);
            if ($role->name == 'Admin') {
                $message = 'No puedes eliminar rol de administrador';
                continue;
            }
            $role->delete();
        }

        return response()->json([
            'roles' => $roles,
            'message' => $message
        ]);
    }
}
