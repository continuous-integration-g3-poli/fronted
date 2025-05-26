<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function indexLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'user' => 'required',
            'password' => 'required',
        ]);

        $response = Http::post('http://localhost:8000/auth/login/', [
            'user' => $request->input('user'),
            'password' => $request->input('password'),
        ]);

        $data = $response->json();

        if (isset($data['status']) && $data['status'] === 'success') {
            // Buscar o crear un usuario localmente en Laravel
            $user = User::firstOrCreate(
                ['email' => $request->input('user') . '@canmint.local'], // puedes ajustar esto
                ['name' => 'Empleado CanMint', 'password' => bcrypt('fake')] // el password no se usará
            );

            Auth::login($user); // Autenticarlo

            return redirect()->route('admin.home')->with([
                'message' => 'Bienvenido',
                'color' => 'primary',
            ]);
        } else {
            return back()->withErrors([
                'login' => 'Credenciales inválidas.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->to('/')->with([
            'message' => 'Sesión cerrada.',
            'color' => 'success',
        ]);
    }
}
