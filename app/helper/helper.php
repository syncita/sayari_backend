<?php

function uploadImage($request,$object,$type)
{
    # code...
    if($request->hasFile($type)){
        $file = $request->$type;
        $newName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('images',$newName);
        $object->$type = "images/$newName";
    }

}