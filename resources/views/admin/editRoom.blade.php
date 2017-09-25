@extends('layouts.app')

@section('content')
    <form  align="center" method="post"  enctype="multipart/form-data" id="addroom">
        {{csrf_field()}}
        @foreach($roomData as $room)
            <p>Номер комнаты</p>
            <input type="text" value="{{$room['room_number']}}" name="room_number">
            <p>Категория на русском языке</p>
            <input align="center" type="text" name='category_ru' value="{{$room['category_ru']}}">
            <p>Категория на Украинском языке</p>
            <input align="center" type="text" name='category_ua' value="{{$room['category_ua']}}">
            <p>Категория на Английском языке</p>
            <input align="center" type="text" name='category_en' value="{{$room['category_en']}}">
            <p>Тип комнаты на Русском языке</p>
            <input type="text" name="type_ru" value="{{$room['type_ru']}}">
            <p>Тип комнаты на Украинском языке</p>
            <input type="text" name="type_ua" value="{{$room['type_ua']}}">
            <p>Тип комнаты на Английском языке</p>
            <input type="text" name="type_en" value="{{$room['type_en']}}">
            <p>Краткое описание на русском языке</p>
            <textarea name="short_description_ru" cols="1000" maxlength="1000">{{ $room['short_description_ru'] }}</textarea>
            <p>Краткое описание на Украинском языке</p>
            <textarea name="short_description_ua" cols="1000" maxlength="1000" form="addroom">{{ $room['short_description_ua'] }}
    </textarea>
            <p>Краткое описание на Английском языке</p>
            <textarea name="short_description_en" cols="1000" maxlength="1000" form="addroom">{{ $room['short_description_en'] }}
        </textarea>
            <p>Полное описание  на русском языке</p>
            <textarea name="full_description_ru" cols="2000" maxlength="2000" id="addroom">{{$room['full_description_ru']}}</textarea>
            <p>Полное  описание на Украинском языке</p>
            <textarea name="full_description_ua" cols="2000" maxlength="2000" id="addroom">{{$room['full_description_ua']}}</textarea>
            <p>Полное  описание на Английском языке</p>
            <textarea name="full_description_en" cols="2000" maxlength="2000" id="addroom">{{$room['full_description_en']}}</textarea>
            <p>Количество людей</p>
            <input type="text" name="people_quantity" value="{{$room['people_quantity']}}">
            <p>Основное фото</p>
            <img src="/uploads/{{$room['img']}}">
            <p>Для изменения основного фото, выберите новое изображение</p>
            <input type="file" name="img" size="10" multiple>

            <input type="submit"  value="Сохранить">
        @endforeach
    </form>
@endsection