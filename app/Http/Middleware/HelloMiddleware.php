<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
        // $nextを実行し結果を$responseに代入
        $response = $next($request);

        // コントローラが実行され、結果のレスポンスが変数$responseに収まる
        // このレスポンスを使って処理を行う
        // まず、レスポンスから返送されるコンテンツを取得
        $content = $response->content();


        $pattern = '/<middleware>(.*)<\/middleware>/i';
        $replace = '<a href="http://$1">$1</a>';
        $content = preg_replace($pattern, $replace, $content);
        $response->setContent($content);
        return $response;
    }
}
