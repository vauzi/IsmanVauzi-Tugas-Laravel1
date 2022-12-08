@php
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
            'active' => false,
            'alamat' => 'jl. cendra kendana II nomor 2 kanaad kecamatan amsterdam kabupaten Meksiko',
            'role' => 'admin',
        ],
    ];
    
    
    $user = array_filter($users, function ($user) {
        $filters = [
        "active" => true,
        "role" => "admin",
    ];
        return $user['active'] == $filters['active'] && $user['role'] == $filters['role'];
    });
@endphp
<x-app-layout>

    @foreach ($user as $u)

        <x-card-component>
            <div class="flex flex-wrap justify-center">

                <x-card-image>
                    <img src="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind/blob/main/build/assets/img/team-2.jpg?raw=true" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"/>
                </x-card-image>
                
                <x-card-bio>
                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1">{{ $u['nama'] }}</h3>
                    <div class="text-xs mt-0 mb-2 text-slate-400 font-bold uppercase">
                        <p>{{ $u['bio'] }}</p>
                    </div>
                    <div class="text-xs mt-0 mb-2 text-green-500 font-bold uppercase">
                        <p>{{ $u['role'] }}</p>
                    </div>
                </x-card-bio>

            </div>
            
            <x-card-body>
                <p class="font-light leading-relaxed text-slate-600 mb-4">{{ $u['alamat']}}</p>
                @if ($u['active'] == true)
                    <x-button-green>Active</x-button-green>
                @else
                    <x-button-red>Non Active</x-button-red>
                @endif
            </x-card-body>

        </x-card-component>
        

    @endforeach


</x-app-layout>