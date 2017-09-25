@extends('layouts.app')

@section('content')
    <div class="container">
        <p>Отображение комнат</p>
        <a href="{{route('formroom')}}">Добавить комнату </a>
        <table border="1" id="roomstable">
            <tr>
                <td>Изображение</td>
                <td>№ комнаты</td>
                <td>Категория</td>
                <td></td>
            </tr>
            @foreach($rooms as $room)
                <tr>
                    <td>
                        <img src="uploads/{{$room['img']}}">
                    </td>
                    <td>{{$room['room_number']}}</td>
                    <td>{{$room['category_ru']}}</td>
                    <td>
                        <a href="{{route('edit', ['id'=>$room['id']])}}">Редактировать</a>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>
@endsection