@extends('master')
@section('main-content')
    
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Country</th>
                        <th scope="col">Cities</th>
                        <th scope="col">Shops</th>
                        

                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $key => $country)
                        @if (count($country['shops']) > 0)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $country->country_name }}</td>
                                <td>{{ $country->cities_count }}</td>
                                <td>{{ $country->shops_count }}</td>
                                

                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
       
@endsection
