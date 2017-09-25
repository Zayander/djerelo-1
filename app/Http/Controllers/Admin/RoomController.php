<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
   public function index ()
   {
       $data['rooms'] = Room::get()->toArray();

       return view('admin/showRoom', $data);
   }

   public function addRoom(Request $request)
   {
       if($request->hasFile('img') && $request->file('img')->isValid()) {
            $imageName = $request->file('img')->getClientOriginalName();
            $newImageName = time() .$imageName;
            $request->file('img')->move(public_path('uploads'), $newImageName);
        }

        $data = $request->all();
        $data['img'] = $newImageName;

        Room::create($data);

        return redirect()->route('rooms');
   }
   public function editRoom(Request $request)
   {
        $id = $request->get('id');
        $data['roomData'] = Room::where('id', $id)->get()->toArray();

        if($request->isMethod('get') && !empty($id)) {
            return view('admin/editRoom', $data);
        }

        $oldImgName = $data['roomData'][0]['img'];

        if($request->isMethod('post')) {
            $data = $request->all();

            if(isset($data['_token'])) {
                unset($data['_token']);
            }

            if($request->hasFile('img') && $request->file('img')->isValid()) {
                unlink(public_path('uploads/') . $oldImgName);
                $imageName = $request->file('img')->getClientOriginalName();
                $newImageName = time() .$imageName;
                $request->file('img')->move(public_path('uploads'), $newImageName);
                $data['img'] = $newImageName;
            }

            Room::where('id', $id)->update($data);

            return redirect()->route('rooms');
        }

   }
}
