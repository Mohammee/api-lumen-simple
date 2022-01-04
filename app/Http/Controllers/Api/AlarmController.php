<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlarmRequest;
use App\Http\Resources\AlarmResource;
use App\Models\Alarm;
use App\Models\Cryptocurrency;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Expr\Cast\Object_;

class  AlarmController extends Controller
{
    /**
     * @var AlarmRequest
     */
    private $validator;

    public function __construct(AlarmRequest $request)
    {
        $this->validator = $request;
    }

    public function index()
    {
        $generate_key = request()->header('x-generate-key');
        $items = Alarm::where('generate_key', $generate_key)->with('cryptocurrency')->paginate(2);

        return $this->apiResponse(AlarmResource::collection($items), 'data');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->validator->rules());
        Alarm::create($data);

        return $this->responseWithMessage('Alarm Created Successfully');
    }

    public function destroy($id)
    {
        $alarm = Alarm::findOrFail($id);
        $alarm->delete();

        return $this->responseWithMessage('Alarm Deleted Successfully.');
    }
}
