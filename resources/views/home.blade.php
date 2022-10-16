@extends('layouts.mainLayout')
@section('title', 'Home')

@section('content')

    <div class="container">
        <h1>Home</h1>
        <h2>Selamat datang, {{ $name }}. Anda adalah {{ $role }}</h2>

        {{-- IF ELSE --}}
        {{-- @if ($role == 'admin')
            <a href="#">Halaman Admin</a>
        @elseif ($role == 'staff')
            <a href="#">Halaman Gudang</a>
        @else
            <a href="#">Halaman Whatever</a>
        @endif --}}
        {{-- IF ELSE --}}

        {{-- SWITCH CASE --}}
        @switch($role)
            @case($role == 'admin')
                <a href="#">Halaman Admin</a>
            @break

            @case($role == 'staff')
                <a href="#">Halaman Gudang</a>
            @break

            @default
                <a href="#">Halaman Whatever</a>
        @endswitch
        {{-- SWITCH CASE --}}

        {{-- LOOPING --}}

        {{-- For --}}
        @for ($i = 0; $i < 5; $i++)
            {{ $i }}
        @endfor
        {{-- For --}}

        {{-- For Each --}}

        {{-- For Each --}}

        {{-- LOOPING --}}
    </div>

    <div class="container-fluid">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buah as $data)
                    <tr>
                        {{-- <td>{{ $loop->index }}</td> --}}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
