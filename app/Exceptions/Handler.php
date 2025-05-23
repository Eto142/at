<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
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

    public function render($request, Throwable $exception)
{
    if ($exception instanceof HttpExceptionInterface) {
        return response()->view('errors.any', ['exception' => $exception], $exception->getStatusCode());
    }

      // Fallback for all other errors
    return response()->view('errors.any', ['exception' => new \Symfony\Component\HttpKernel\Exception\HttpException(500, $exception->getMessage())], 500);

    return parent::render($request, $exception);
}
}
