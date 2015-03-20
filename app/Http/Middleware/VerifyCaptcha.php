<?php namespace App\Http\Middleware;

use BotDetectCaptcha\LaravelCaptcha\BotDetectLaravelCaptcha;
use Closure;
use Illuminate\Contracts\Routing\Middleware;

class VerifyCaptcha implements Middleware {

    protected $config;
    protected $captchaObj;

    public function __construct($config)
    {
        $this->config = $config;
        $this->captcha = BotDetectLaravelCaptcha::GetCaptchaInstance($config);
    }
    public function handle($request, Closure $next)
    {
        if ($this->isReading($request) || $this->tokensMatch($request))
        {
            return $this->addCookieToResponse($request, $next($request));
        }

        throw new TokenMismatchException;
    }
}
