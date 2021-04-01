<?php

namespace App\Http\Controllers\services;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class DiscussionController extends Controller
{
    public function addMessage(Request $request)
    {

        try {
            $user = $request->attributes->get('user');
            $discussion = new Discussion();
            $discussion->user_id    = $user->id;
            if ($request->group_id) {
                $discussion->group_id = $request->group_id;
            } else {
                $discussion->is_general = 1;
            }
            $discussion->chat = $request->text;
            $discussion->save();

            $res = new \stdClass();
            $res->msg_id = $discussion->id;
            $res->user_id = $discussion->user_id;
            $res->group_id = $discussion->group_id;
            $res->msg = $discussion->chat;

            return $this->sendResponse(200, $discussion);
        } catch (\Exception $e) {
            return $this->sendResponse(
                500,
                null,
                $e->getMessage()
            );
        }
    }


    public function discussion_list(Request $request, $user_id)
    {
        try {
            $msgs_list = Discussion::with('user:id,name,avatar')
                ->where('user_scholar_messaging.user_id', $user_id)
                ->orderby('created_at', 'desc')
                ->paginate(30, ['id as msg_id', 'sender', 'user_id', 'msg as text', 'scholar_id', 'created_at as createdAt']);
            $msgs_list->transform(function ($item) {
                $custom_user = new \stdClass();
                $scholar = $item->scholar;
                if ($item->sender == 'scholar') {

                    $custom_user->_id = $item->scholar_id;
                    $custom_user->name = $scholar->name;
                    $custom_user->avatar = $scholar->avatar;
                } else {
                    $user = $item->user;
                    $custom_user->_id = $item->user_id;
                    $custom_user->name = $user->name;
                    $custom_user->avatar = $user->avatar;
                }
                // echo $item->id;
                unset($item->user, $item->scholar);
                $item->user = new \stdClass();
                $item->user = $custom_user;

                return $item;
            });
            $msgs_list = $msgs_list->items();
            return $this->sendResponse(200, $msgs_list);
        } catch (\Exception $e) {
            return $this->sendResponse(
                500,
                null,
                $e->getMessage()
            );
        }
    }
}
