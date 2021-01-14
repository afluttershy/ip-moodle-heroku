@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Дашборд - регистрация на курс</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="col-md-12 table">
                        <table class="table">
                            <tbody>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Имя
                                </th>
                                <th>
                                    Телефон
                                </th>
                                <th>
                                    E-mail
                                </th>
                                <th>
                                    Пароль
                                </th>
                                <th>
                                    Курс
                                </th>
                                <th>
                                    Действия
                                </th>
                            </tr>
                            @foreach($formusers as $formuser)
                                <tr>
                                    <td>{{ $formuser->id}}</td>
                                    <td>{{ $formuser->name }}</td>
                                    <td>{{ $formuser->phone }}</td>
                                    <td>{{ $formuser->email }}</td>
                                    <td>{{ $formuser->password }}</td>
                                    <td>{{ $formuser->course }}</td>
                                    <td> 
                                        <form class="deleteform" action="{{ route('formuser.destroy', $formuser) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-form btn-danger" type="submit" value="Удалить">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        <!-- <form method="POST" action="{{ route('addcourse') }}">
                            <h1 class="h1-auth">Добавление курса</h1>
                            <div class="mb-3">
                                <label for="course_id" class="form-label">ID курса</label>
                                <input required type="text" class="form-control" id="course_id" name="course_id">
                            </div>
                            <div class="mb-3">
                                <label for="course_full_name" class="form-label">Полное имя курса</label>
                                <input required type="taxt" class="form-control" id="course_full_name" name="course_full_name">
                            </div>
                            <div class="mb-3">
                                <label for="course_short_name" class="form-label">Сокращенное имя курса</label>
                                <input required type="text" class="form-control" id="course_short_name" name="course_short_name">
                            </div>
                            @csrf
                            <div class="submitdiv">
                                <button type="submit" class="btn btn-form btn-primary">Добавить</button>
                            </div>
                        </form> -->
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
