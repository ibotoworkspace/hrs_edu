<?php

namespace App\libraries;
use Response;
use DB;
// use Excel;

trait Common
{
    public function prepare_excel($data , $field_not_required = []){
        $users = [];
        foreach ($data as $rec_key => $value){
            foreach ($value as $key=>$v){
                if(!in_array($key , $field_not_required)){
                    $users[$rec_key][str_replace("_"," ",$key)] = $v;
                }
            }
        }
        return $users;
    }

    public function move_img_get_path($image,$root,$type,$image_name='')
    {
        $uniqid = time();
        $extension = mb_strtolower($image->getClientOriginalExtension());
        $name = $uniqid . $image_name . '.' . $extension;//.$image->getClientOriginalName();
        // $imgPath = public_path() . '/images/' . $type;
        $imgPath = public_path() . '/public/images/' . $type;
        $image->move($imgPath, $name);
        $remove_index = str_replace("index.php", "", $root);
        return $remove_index . '/images/' . $type . '/' . $name;
    }
    function get_embeddedyoutube_url($url) {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "//www.youtube.com/embed/$2",
            $url
        );

    //  "<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",

    }


        public function sort_asc_array($arr,$column){
            usort($arr, function ($a, $b) use ($column) {
                return $a[$column] <=> $b[$column];
            });
            return $arr;
        }























}
