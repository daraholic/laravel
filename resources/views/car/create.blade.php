<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>新增一個表單</h3>
    
    {{-- 隱藏action的一個方式 http://localhost/cars_get_form 在route那邊設定 --}}
    <form action="{{ route('cars.myform') }}" method="post">
      {{-- @csrf --}}
      {{-- post傳值 避免被CSRF攻擊 進行保護 建立token --}}
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>name</th>
                    <th>chinese</th>
                    <th>math</th>
                    <th>english</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="name" id="name"></td>
                    <td><input type="text" name="chinese" id="chinese"></td>
                    <td><input type="text" name="english" id="english"></td>
                    <td><input type="text" name="math" id="math"></td>
                </tr>
                <tr>
                  <button type="submit">送出</button>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>
