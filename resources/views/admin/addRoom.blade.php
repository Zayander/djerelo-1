@extends('layouts.app')

@section('content')
<form  align="center" method="post" action="{{route('addroom')}}" enctype="multipart/form-data" id="addroom">
    {{csrf_field()}}
  <p>Номер комнаты</p>
  <input type="text" name="room_number">
 <p>Категория на русском языке</p>
    <input align="center" type="text" name='category_ru'>
 <p>Категория на Украинском языке</p>
    <input align="center" type="text" name='category_ua'>
<p>Категория на Английском языке</p>
    <input align="center" type="text" name='category_en'>
<p>Тип комнаты на Русском языке</p>
<input type="text" name="type_ru"> 
<p>Тип комнаты на Украинском языке</p>
<input type="text" name="type_ua"> 
<p>Тип комнаты на Английском языке</p>
<input type="text" name="type_en">
    <p>Краткое описание на русском языке</p>
    <textarea name="short_description_ru" cols="1000" maxlength="1000" ></textarea>
     <p>Краткое описание на Украинском языке</p>
    <textarea name="short_description_ua" cols="1000" maxlength="1000" form="addroom"></textarea>
        <p>Краткое описание на Английском языке</p>
        <textarea name="short_description_en" cols="1000" maxlength="1000" form="addroom"></textarea>
            <p>Полное описание  на русском языке</p>
            <textarea name="full_description_ru" cols="2000" maxlength="2000" id="addroom"></textarea>
                <p>Полное  описание на Украинском языке</p>
                <textarea name="full_description_ua" cols="2000" maxlength="2000" id="addroom"></textarea>
              <p>Полное  описание на Английском языке</p>
                <textarea name="full_description_en" cols="2000" maxlength="2000" id="addroom"></textarea>
            <p>Количество людей</p>
            <input type="text" name="people_quantity">
            <p>Основное фото</p>
            <input type="file" name="img" multiple>
            
        <input type="submit" name="save" value="Сохранить">
        </form>
@endsection