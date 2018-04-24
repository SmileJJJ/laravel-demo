<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
        'student/save',
        'student/create',
        'student/update/?',   //在verf验证中，这个路由没办法添加进去，因为路径后面还有一个id
    ];
}
