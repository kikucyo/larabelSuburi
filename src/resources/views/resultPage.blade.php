<html>
  <head>
    <title>画面遷移テスト</title>
  </head>
  <body>
    <h1>POST結果</h1>
    <div>{{$msg}}</div>
    <div>果物名：{{$fruits_name}}</div>
    <div>果物数：{{$fruits_count}}</div>
    <div>単価&nbsp;&nbsp;&nbsp;：{{$fruits_value}}</div>
    <div>合計金額：{{$total_value}}</div>

    {{-- OK(ただしネームスペースの省略ができていない) --}}
    {{-- <a href="{{ action('App\Http\Controllers\postTestController@inputForm')}}">入力画面に戻る</a> --}}

    {{-- OK(RouteServiceProviderにnamespaceを指定) --}}
    <a href="{{ action('postTestController@inputForm')}}">入力画面に戻る</a>

    {{-- NG --}}
    {{-- <php? use App\Http\Controllers\postTestController; > --}}
    {{-- <a href="{{ action([postTestController::class,'inputForm'])}}">入力画面に戻る</a> --}}

    {{-- OK(ただし意図と異なるコントローラを指定すべき) --}}
    {{-- <a href="/inputForm">入力画面に戻る</a> --}}
  </body>
</html>
