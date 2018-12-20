<form method="post" action="{{route('testForm')}}">
    <div class="form-group">
        <label for="email">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Введите имя" value="{{old('name')}}" >
    </div>
        <div class="form-group">
            <label for="pass">Text</label>
            <input type="text" class="form-control" name="text" placeholder="text">
        </div>
    <button type="submit" class="btn btn-success">Войти</button>
    {{ method_field('POST') }}
    {{ csrf_field() }}
</form>