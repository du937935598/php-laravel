<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <div class="wrapper">
            @include('common.header',['page'=>'首页view'])
            <div class="content">
                <div>
                    view 这是view静态资源
                    <p>{{ $name }}</p>
                    <p>{!!$name!!}</p>
                    <p>{!!$date!!}</p>
                    <p>
                        @if($num < 60)
                        不及格
                        @else
                        及格
                        @endif
                    </p>

                    <p>
                        @unless($num > 60)
                        不及格
                        @endunless
                    </p>
                    @for($i=0;$i<=$num;$i++)
                    {{$i}}
                    @endfor

                    <p>
                        @foreach($arrays as $v)
                            {{ $v }}
                        @endforeach
                    </p>
                    <p>
                        @forelse($arrays1 as $v)
                            {{ $v }}
                            @empty
                            没有数据
                        @endforelse
                    </p>
                    <p>
                        @foreach($arrays as $k=>$v)
                            @if($k > 1)
                                    {{ $k }} => {{ $v }}<br/>
                                @else
                                    {{ $v }}<br/>
                            @endif
                        @endforeach
                    </p>
                </div>
            </div>
            @include('common.footer',['page'=>'底部'])
        </div>
    </body>
</html>
