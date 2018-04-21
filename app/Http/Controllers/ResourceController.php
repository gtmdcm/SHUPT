<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Resource;
use App\User;
use Illuminate\Support\Facades\Storage;


class ResourceController extends Controller
{
    public function createResource(Request $request)
    {

        $id = Auth::id();

        $user = User::find($id);

        $resource = new Resource;

        $name = $request->input('title');

        $catagory = $request->input('type');

        $owner = $user->name;

        $resource->name = $name;

        $resource->catagory = $catagory;

        $resource->owner = $owner;

        $resource->visible = 'yes';

        $resource->banned = 'no';

        $resource->down50 = 'no';

        $resource->down30 = 'no';

        $resource->downfree = 'no';

        $resource->up200 = 'no';

        $resource->up200down50 = 'no';

        $resource->up200downfree = 'no';

        $resource->last_action = date('Y-m-d H:i:s');

        $resource->save();

    }

    public function downloadSeeds(Request $request, $pub, $seed, $name)
    {

        return Storage::download("/$pub/$seed/$name");
    }

}
