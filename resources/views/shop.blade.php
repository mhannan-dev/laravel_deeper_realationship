@extends('master')
@section('main-content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Country</th>
                <th scope="col">Shops</th>
                <th scope="col">Employees</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shops as $key => $shop)
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $shop->city->country->country_name }}</td>
                    <td>{{ $shop->shop_name }}</td>
                    <td>{{ $shop->employees_count }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
