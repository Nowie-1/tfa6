@extends('layouts.app')

@section('page_title', 'User Accounts')

@section('body')
    <h1>User Accounts</h1>

    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Full Name</th>
            </tr>
        </thead>
        <tbody>
            {{-- One table row for each User model retrieved from the database --}}
            @foreach ($users as $user)
                <tr>
                    <td>U-{{ str_pad($user->id, 3, '0', STR_PAD_LEFT) }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->full_name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
