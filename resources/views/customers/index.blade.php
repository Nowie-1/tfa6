@extends('layouts.app')

@section('page_title', 'Customer Accounts')

@section('body')
    <h1>Customer Accounts</h1>

    <table>
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            {{-- One table row for each Customer model retrieved from the database --}}
            @foreach ($customers as $customer)
                <tr>
                    <td>C-{{ str_pad($customer->id, 3, '0', STR_PAD_LEFT) }}</td>
                    <td>{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
