@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Open a New Bank Account</h2>

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Account opening form -->
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="account_type" class="form-label">Account Type</label>
            <select id="account_type" name="account_type" class="form-control" required>
                <option value="savings">Savings Account</option>
                <option value="current">Current Account</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Open Account</button>
    </form>
</div>
@endsection
