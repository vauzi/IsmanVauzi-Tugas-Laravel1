<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    function index()
    {
        $users = [
            [
                'nama' => 'Iskandar lang',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 2 lobang kecamatan ketrok kabupaten lembah anyar',
                'role' => 'admin',
            ],
            [
                'nama' => 'lukmanul Hakimi',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 2 kanaad kecamatan amsterdam kabupaten Meksiko',
                'role' => 'user',
            ],
            [
                'nama' => 'jainudin',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => false,
                'alamat' => 'jl. cendra kendana II nomor 2 kelapang kecamatan kaolang kabupaten kulon kui',
                'role' => 'user',
            ],
            [
                'nama' => 'Json',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 2 kelombuing kecamatan adem kabupaten kale',
                'role' => 'user',
            ],
            [
                'nama' => 'Angular Development',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 6 ksodjd kecamatan ake kabupaten sdombing',
                'role' => 'admin',
            ],
            [
                'nama' => 'Reac Js',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 6 ksodjd kecamatan ake kabupaten sdombing',
                'role' => 'user',
            ],
            [
                'nama' => 'Vue js',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 6 ksodjd kecamatan ake kabupaten sdombing',
                'role' => 'user',
            ],
            [
                'nama' => 'Node Json',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 6 ksodjd kecamatan ake kabupaten sdombing',
                'role' => 'user',
            ],
            [
                'nama' => 'Laravel',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 6 ksodjd kecamatan ake kabupaten sdombing',
                'role' => 'user',
            ],
            [
                'nama' => 'web',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => false,
                'alamat' => 'jl. cendra kendana II nomor 6 ksodjd kecamatan ake kabupaten sdombing',
                'role' => 'user',
            ],
            [
                'nama' => 'Express js',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 2 kanaad kecamatan amsterdam kabupaten Meksiko',
                'role' => 'user',
            ], [
                'nama' => 'Codeigniter',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 2 kanaad kecamatan amsterdam kabupaten Meksiko',
                'role' => 'user',
            ], [
                'nama' => 'Nest Js',
                'foto' => 'http://localhost/user/image/foto.jpg',
                'bio' => 'lorem Ips op so sad sad asDebugString localhost',
                'active' => true,
                'alamat' => 'jl. cendra kendana II nomor 2 kanaad kecamatan amsterdam kabupaten Meksiko',
                'role' => 'user',
            ],
        ];
        $user = $users;
        if ($_GET['role'] && $_GET['active']) {
        }
        // dd($_GET['active']);
        return view('app', ['user' => $user]);
    }
}
