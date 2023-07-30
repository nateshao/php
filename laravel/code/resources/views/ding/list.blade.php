<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>首页</h1>
    {{--使用控制器分配的变量--}}
    {{--默认的标签不解析(过滤)--}}
    {{$name}}
    {{-- 不过滤 --}}
    {!! $name !!}
    {{$sex}}
    {{$age}}
    <hr>
    {{md5($age)}} <br>
    {{date("Y-m-d h:i:s",time())}}
    <hr>
    @if($point >= 90)
        优秀
    @elseif($point >= 80)
        良好
    @elseif($point >= 60)
        及格
    @else
        不及格
    @endif |

    @isset($abc)
        abc存在
    @else
        abc不存在
    @endisset |

    @empty($abc)
        abc为空
    @endempty |

    {{$point>=60?'及格':'不及格'}} |
    {{$abc??'默认值'}}
    <hr>
    @foreach($arr as $k=>$v)
        {{$v['id']}} - {{$v['name']}} - {{$v['age']}} <br>
    @endforeach
    <hr>
    @forelse($arr as $k=>$v)
        {{$v['id']}} - {{$v['name']}} - {{$v['age']}} <br>
    @empty
        没有值
    @endforelse
    <hr>
    @for($i=1;$i<=10;$i++)
        {{$i}}
    @endfor
    <hr>
    @php
        echo 77777;
    @endphp
</body>
</html>
