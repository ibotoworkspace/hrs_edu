<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Choices;
use App\Models\Quiz;
use App\Models\Test_assigned;
use App\Models\Test_result;
use App\Models\UserQuiz;
use App\Models\Ebooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;

class EbooksController extends Controller
{


    public function get_ebooks(Request $request)
    {

        try {
            $ebooks = Ebooks::paginate(10,['id','name','avatar']);
            $ebooks = $ebooks->items();
            return $this->sendResponse(200, $ebooks);
        } catch (\Exception $e) {
            return [
                'status' => Config::get('error.code.INTERNAL_SERVER_ERROR'),
                'response' => null,
                'error' => [$e->getMessage()],
                'custom_error_code' => $e->getCode()
            ];
        }




    }



}
