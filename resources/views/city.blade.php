@extends('master')
@section('main-content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cities</th>
                <th scope="col">Shops</th>
                <th scope="col">Employees</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $key => $city)
                {{-- @if (count($cities['shops']) > 0)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $city->country_name }}</td>
                        <td>{{ $city->shops_count }}</td>
                    </tr>
                @endif --}}
                <tr>
                    <th scope="row">{{ ++$key }}</th>
                    <td>{{ $city->city_name }}</td>
                    <td>{{ $city->shops_count }}</td>
                    <td>{{ $city->employees_count }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
