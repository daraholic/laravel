<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {{-- 在Laravel寫判斷 --}}
 

  @isset($data['name'])
  <h3>message~</h3>
  @endif

  @empty(!$data['name'])
  <h3>message!!!</h3>
  @endif

  @switch($data['name'])
      @case('ann1')
          hello {{$data['name']}}
          @break
      @default
          hey 
  @endswitch

  @php
    // dd($data)
  @endphp



  test car
  <br>
  {{-- 只顯示值 --}}
  {{$data['name']}}<br>
  {{$data['id']}}<br>
  {{$data['chinese']}}<br>

  {{-- 這是屬於比較乾淨的寫法 把計算搬到controller做--}}
  avg = {{$data['avg']}}
  <br>
  
  <?php
  // 這是屬於比較混亂的寫法
  // 用Laravel目的本來就是要顯示跟控制分開
  $data['avg']=($data['chinese']+$data['math']+$data['english'])/3;
  ?>


  {{-- 兩種不同方式: --}}
  {{-- html 與 php 分開 --}}
  {{-- <h1>hello {{$name}}</h1> --}}

  {{-- 全部使用字串 --}}
  <?php
  // echo "<h1>hello $name</h1>";
  ?>
  <br>


  <a href="{{route('cars.create')}}">add</a>
</body>
</html>