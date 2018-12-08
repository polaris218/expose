@extends('layouts.app')

@section('content')
<div class="containter text-center">
    <form action="{{ route('userupdate')}}" method="POST">
            @method('PUT')
            @csrf
            <table class="table">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>E-Mail</th>
                        <th>E-Mail Verified</th>
                        <th>RegisteredAt</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user["name"] }}</td>
                        <td>{{ $user["email"] }}</td>
                        @if( $user["email_verified_at"] == null)
                            <td>None</td>
                        @else
                            <td>{{ $user["email_verified_at"] }}</td>
                        @endif
                        <td>{{ $user["created_at"] }}</td>
                        <td>
                            <button
                                class="btn btn-danger"
                                type="submit"
                                name="{{ $user['name'] }}"
                            >
                            Remove
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </form>
</div>
@endsection