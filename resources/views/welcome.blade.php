@extends('layout')

@section('content')
        @if (session()->has('success'))
            <div class="alert alert-success" style="text-align:center;" role="alert">{{ session()->get('success')}}</div>
        @endif
        @if (session()->has('denied'))
            <div class="alert alert-danger" style="text-align:center;" role="alert">{{ session()->get('denied')}}</div>
        @endif
    <form method="POST" action="{{ route('formconfirm') }}">
        <h1 class="h1-auth">Регистрация на курс</h1>
        <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input required type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Ваш e-mail</label>
            <input required type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Ваш номер телефона</label>
            <input required type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="course" class="form-label">Выберите курс</label>
            <select required class="form-select" id="course" name="course">
                <option selected disabled>Выберите курс</option>
                @foreach($courses as $course)
                <option value="<?php echo"$course->course_full_name"?>">{{ $course->course_full_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Ваш пароль для moodle</label>
            <input required type="password" class="form-control" id="password" name="password">
        </div>
      
        @csrf
       <div class="submitdiv">
       <button type="submit" class="btn btn-form btn-primary">Записаться</button>
        <p class="confidential">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь c <a href="http://project3033659.tilda.ws/page14177895.html">политикой конфиденциальности</a></p>
        </div>
    </form>

    <!-- @foreach($courses as $course)
        <tr>
            <td>{{ $course->id}}</td>
            <td> 
                <form class="deleteform" action="{{ route('course.destroy', $course) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-form btn-danger" type="submit" value="Удалить">
                </form>
            </td>
        </tr>
    @endforeach -->
@endsection