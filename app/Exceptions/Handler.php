<?php

namespace App\Exceptions;

use App\Traits\CustomHandler;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    use CustomHandler;

    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        //
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if (app()->isLocal()) {
            // \NotFoundHttpException
            if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
                return self::notFoundException($request, $e, 'route');
            }
            // \MethodNotAllowedHttpException
            if ($e instanceof \Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException) {
                return self::methodNotAllowedException($request, $e);
            }
            // \QueryException
            if ($e instanceof \Illuminate\Database\QueryException) {
                return self::queryException($request, $e, 'db_query');
            }
            // \RelationNotFoundException
            if ($e instanceof \Illuminate\Database\Eloquent\RelationNotFoundException) {
                return self::queryException($request, $e, 'db_relation');
            }
            // \TypeError
            if ($e instanceof \TypeError) {
                return self::queryException($request, $e, 'data_type');
            }
            // Symfony\\Component\\Mailer\\Exception\\TransportException
            if ($e instanceof \Symfony\Component\Mailer\Exception\TransportException) {
                return self::queryException($request, $e, 'mail_transport');
            }
            // League\\OAuth2\\Server\\Exception\\OAuthServerException
            if ($e instanceof \League\OAuth2\Server\Exception\OAuthServerException) {
                return self::unauthenticatedException($request, $e);
            }
            // \Error || \ErrorException || \LogicException || \BadMethodCallException ||
            // \UnexpectedValueException || \FatalError || \BindingResolutionException
            if (
                $e instanceof \Error ||
                $e instanceof \ErrorException ||
                $e instanceof \LogicException ||
                $e instanceof \BadMethodCallException ||
                $e instanceof \UnexpectedValueException ||
                $e instanceof \Symfony\Component\ErrorHandler\Error\FatalError ||
                $e instanceof \Illuminate\Contracts\Container\BindingResolutionException
            ) {
                return self::queryException($request, $e, 'server');
            }
            // \Illuminate\Http\Exceptions\ThrottleRequestsException
            if ($e instanceof \Illuminate\Http\Exceptions\ThrottleRequestsException) {
                return self::tooManyRequestsException($request, $e);
            }
        }

        return parent::render($request, $e);
    }
}
