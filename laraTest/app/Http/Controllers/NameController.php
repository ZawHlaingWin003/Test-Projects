<?php

namespace App\Http\Controllers;

use App\Models\Name;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function showAllNames(Request $request)
    {
        $names = Name::when($request->has('archieve'), function($query){
            $query->onlyTrashed();
        })->get();
        return view('show-names', compact('names'));
    }
    public function deleteName($id)
    {
        $name = Name::find($id);
        $name->delete();

        return back();
    }
    // public function getDeletedNames()
    // {
    //     $deletedNames = Name::onlyTrashed()->get();
    //     return view('deleted-names', compact('deletedNames'));
    // }
    public function restore($id)
    {
        $name = Name::onlyTrashed()->findOrFail($id);
        $name->restore();

        return back()->with('success', 'Name Restored Successfully');
    }
    public function forceDelete($id)
    {
        $name = Name::onlyTrashed()->findOrFail($id);
        $name->forceDelete();

        return back()->with('success', 'Name Deleted Successfully');
    }
}
