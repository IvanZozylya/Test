<form method="post" action="{{url('/page')}}">
    <div class="form-group">
        <label for="email">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Введите имя" value="{{old('name')}}" >
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Введите email" value="{{old('email')}}">
    <div class="form-group">
        <label for="pass">Пароль</label>
        <input type="password" class="form-control" name="pass" placeholder="Пароль">
    </div>
    <div class="checkbox">
        <label><input type="checkbox"> Чекбокс</label>
    </div>
    <button type="submit" class="btn btn-success">Войти</button>
    {{ method_field('POST') }}
    {{ csrf_field() }}
</form>