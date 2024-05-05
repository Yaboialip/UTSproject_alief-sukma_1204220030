<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Item;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $pageTitle = 'Menu List';
        // RAW SQL QUERY
        $items = DB::select('select *, items.id as item_id, categories.name as kategori_name from items left join categories on items.kategori_id = categories.id');
        return view('food.index', [
            'pageTitle' => $pageTitle,
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Menu Item';
        // Fetch categories using a raw SQL query
        $positions = DB::select('select * from categories');
        return view('food.create', compact('pageTitle', 'positions'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'firstName' => 'required',
            'Itemdescription' => 'required',
            'Price' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // INSERT QUERY
        DB::table('items')->insert([
            'firstname' => $request->firstName,
            'Itemdescription' => $request->Itemdescription,
            'Price' => $request->Price,
            'kategori_id' => $request->kategori,
        ]);
        return redirect()->route('food.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Item Detail';
        // Raw SQL Query to fetch item details with associated category name
        $item = collect(DB::select('
        SELECT *, items.id AS item_id, categories.name AS kategori_name
        FROM items
        LEFT JOIN categories ON items.kategori_id = categories.id
        WHERE items.id = ?
    ', [$id]))->first();

        // Check if item exists
        if (!$item) {
            // Handle case where item with the provided id doesn't exist
            abort(404); // or return a custom error view
        }

        return view('food.show', compact('pageTitle', 'item')); // Corrected variable name
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $pageTitle = 'Edit Menu Item';
    $item = DB::table('items')->find($id);
    $positions = DB::table('categories')->get();
    return view('food.edit', compact('pageTitle', 'item', 'positions'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'firstName' => 'required',
            'Itemdescription' => 'required',
            'Price' => 'required|numeric',
            'kategori' => 'required|exists:categories,id', // Validate kategori_id as existing category ID
        ]);
    
        // Update data in the items table
        DB::table('items')
            ->where('id', $id)
            ->update([
                'firstname' => $request->firstName,
                'Itemdescription' => $request->Itemdescription,
                'price' => $request->Price,
                'kategori_id' => $request->kategori,
            ]);
    
        // Redirect back or to a specific route after successful update
        return redirect()->route('food.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // QUERY BUILDER
        DB::table('items')
            ->where('id', $id)
            ->delete();
        return redirect()->route('food.index');
    }
}
