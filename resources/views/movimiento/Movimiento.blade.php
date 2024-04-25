@extends('layout')
@section('content')

    <h1>Movimientos</h1>
    <a href="{{route('movimientos.create')}}">Crear</a>
    <section>
        <table>
            <thead>
            <tr>
                <td>Tipo</td>
                <td>Producto</td>
                <td>Cantidad</td>
                <td>Caja</td>
                <td>Fecha</td>
            </tr>
            </thead>
            <tbody>
                @foreach($movimientos as $movimiento)
                    <tr>
                        <td>{{ $movimiento ->type }}</td>
                        <td></td>
                        <td>{{$movimiento->ammount}}</td>
                        <td>{{$movimiento->save_point}}</td>
{{--                        <td>{{$movimiento->create_ad->format('d-m-Y')}}</td>--}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection
