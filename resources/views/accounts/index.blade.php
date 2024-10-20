@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Your Bank Accounts</h2>

    <table class="table">
        <thead>
            <tr>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Balance</th>
            </tr>
        </thead>
        <tbody>
            @foreach($accounts as $account)
            <tr>
                <td>{{ $account->account_number }}</td>
                <td>{{ ucfirst($account->account_type) }}</td>
                <td>{{ number_format($account->balance, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
