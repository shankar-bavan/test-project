@extends('layout')
@section('content')
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Logo</th>
            <th>Website</th>
        </tr>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td> <img src="{{ asset('storage/'.$company->logo) }}"/> </td>
                <td>@if($company->website) {{ $company->website }} @else 'N/A' @endif</td>
                <td>
                    <form action="{{ route('companies.destroy',$company->id) }}" method="POST">
                        <a href="{{ route('companies.show',$company->id) }}">View</a>
                        <a href="{{ route('companies.edit',$company->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
