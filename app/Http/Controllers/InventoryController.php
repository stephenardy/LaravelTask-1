<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class InventoryController extends Controller
{
    //
    public function index() {
        
        $tasks = Task::all();
        
        return view('index', ['tasks' => $tasks]);
    }

    public function addItem() {
        return view('add-item');
    }

    public function editItem($id) {
        $tasks = Task::find($id);
        return view('edit-item', ['tasks' => $tasks]);
    }
    
    public function inventoryCreate(Request $request) {
        Task::create([
            'name' => $request->name,
            'quantity' => $request->quantity
        ]);
    
        return redirect('/');
    }
    public function done($id){
        $tasks = Task::find($id);
        $tasks->delete();

        return redirect('/');
    }

    public function inventoryEdit(Request $request) {
        $tasks= Task::find($request->id);
        $tasks->name=$request->name;
        $tasks->quantity=$request->quantity;
        $tasks->save();

        return redirect('/');
    }

}
