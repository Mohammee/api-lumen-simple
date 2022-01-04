<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alarm;
use App\Models\Notification;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AlarmNotificationController extends Controller
{

    public function index()
    {
        $key = request()->header('x-generate-key');

        $notifications = Notification::where(['key' => $key, 'read_at' => null])->get();
        Notification::where('key', $key)->update(['read_at' => Carbon::now()]);

        return $this->apiResponse($notifications, 'notifications');
    }

    public static function createNotification()
    {
        $alarms = Alarm::with('cryptocurrency')->get();

        foreach ($alarms as $alarm) {
            $cryptocurrency = $alarm->cryptocurrency;
            $operator = $alarm->operator_type;

            $check_arr = [
                'equals' => $cryptocurrency->price_usd == $alarm->value,
                'larger' => $cryptocurrency->price_usd > $alarm->value,
                'smaller' => $cryptocurrency->price_usd < $alarm->value,
                ];

            if ($check_arr[$operator]) {
                Notification::create([
                    'data' => $cryptocurrency,
                    'key' => $alarm->generate_key
                ]);

                Alarm::where('id', $alarm->id)->delete();
            }

        }

    }
}
