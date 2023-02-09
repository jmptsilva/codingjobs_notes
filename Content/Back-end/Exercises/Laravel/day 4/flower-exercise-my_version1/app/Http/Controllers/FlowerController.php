<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFlowerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flower;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::all();

        return view('all-flowers', ['flowers' => $flowers]);
    }

    public function show($id)
    {
        $flower = Flower::find($id);

        return view('flower-detail', ['flower' => $flower]);
    }

    public function create()
    {
        return view('new-flower');
    }

    public function insert(StoreFlowerRequest $request)
    {
        $validate = $request->validated();

        $flower = new Flower;
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->save();

        if ($flower)
            return redirect('/flowers')->with('message', 'Successfully insert in the DB !');
    }

    public function edit($id)
    {

        $flower = Flower::find($id);

        return view('edit-flower', ['flower' => $flower]);
    }

    public function update(StoreFlowerRequest $request, $id)
    {

        $validate = $request->validated();

        $flower = Flower::find($id);
        $flower->name = $request->name;
        $flower->price = $request->price;
        $flower->save();

        if ($flower)
            return redirect('/flowers')->with('message', $request->name . ' updated successfully.');
        else
            echo "problem inserting";
    }

    public function destroy($id)
    {
        // delete
        $flower = Flower::find($id);

        $flower->delete();

        if ($flower)
            return redirect('/flowers')->with('message', 'Flower deleted successfully.');
        else
            return redirect('/flowers')->with('error', 'Problem deleted the flower');
    }
}
