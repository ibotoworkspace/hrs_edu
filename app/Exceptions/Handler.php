<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use App\Libraries\APIResponse;

class Handler extends ExceptionHandler
{
    use APIResponse;
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        return parent::render($request, $e);
        $url = $request->fullUrl();

    	if(!strpos($url,'/api/') ){

	    		if($e instanceof NotFoundHttpException) {

		    		Log::alert($e->getMessage());
		    		return Redirect('error/error404');
	    		}

		    	else{
		    		Log::error($e->getMessage());
		    		return   Redirect('error/error500');
		    	}
    	}


    	if($e instanceof NotFoundHttpException) {
            
    		Log::alert($e->getMessage());
    		return $this->sendResponse(404, null, ['Invalid url']);
    	}

    	elseif($e instanceof UnAuthorizedRequestException) {
    		Log::alert('Unauthorized Request');
    		return $this->sendResponse(401, null, ['Unauthorized Request'], 401);
    	}

    	elseif ($e instanceof ModelNotFoundException) {
    		Log::error($e->getMessage());
    		return $this->sendResponse(404, null, ['Resource Not Found'], 404);
    	}

    	elseif ($e instanceof QueryException) {
    		Log::critical($e->getMessage());
    		return $this->sendResponse(500, null, ['Internal Server Error'], 500);
    	}

    	elseif ($e instanceof MethodNotAllowedHttpException) {
    		Log::critical($e->getMessage());

    		return $this->sendResponse(405, null, ['HTTP Method Not Allowed'], 405);
    	}

    	elseif ($e instanceof UnAuthorizedRequestException){
    		Log::critical($e->getMessage());
    		return $this->sendResponse(405, null, ['User not found'], 405);
    	}
        elseif ($e instanceof ValidationException){
            Log::critical($e->getMessage());
            return $this->sendResponse(422, null, $e->validator->getMessageBag()->all(), 422);
        }

    	else {
    		Log::error($e->getMessage());
    		return $this->sendResponse(500, null, [$e->getMessage()], $e->getCode());
    	}
        return parent::render($request, $e);
    }
}
