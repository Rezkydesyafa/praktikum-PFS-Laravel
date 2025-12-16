<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUsername(Request $request, $id)
    {
        // Mengambil username dari query parameter
        $username = $request->query('jabatan');
        
        // Mengirim data ke view
        return view('show-username', [
            'id' => $id,
            'username' => $username
        ]);
    }
}
