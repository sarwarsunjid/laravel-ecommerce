<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Division;
use App\Models\District;

class DivisionsController extends Controller
{
   public function __construct()
    {
      $this->middleware('auth:admin');
    }
  public function index()
  {
    $division = Division::orderby('priority','asc')->get();
    return view('backend.pages.divisions.index', compact('division'));
  }
  public function create()
  {
    return view('backend.pages.divisions.create');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
    'name' => 'required',
    'priority' => 'required',

  ],
  [
    'name.required' => 'Please provide a division name',
    'priority.required' => 'Please provide a division priority',

]);

      $division = new Division();
      $division->name = $request->name;
      $division->priority = $request->priority;
      $division->save();

      session()->flash('success', 'A New Division Has Added Successfully !!');
      return redirect()->route('admin.divisions');
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
    'name' => 'required',
    'priority' => 'required',

  ],
  [
    'name.required' => 'Please provide a division name',
    'priority.required' => 'Please provide a division priority',

]);
    $division= Division::find($id);
    $division->name = $request->name;
    $division->priority = $request->priority;
    $division->save();
    session()->flash('success', 'Division Updated Successfully !!');
    return redirect()->route('admin.divisions');


  }
  public function edit($id)
  {
    $division = Division::find($id);
    if(!is_null($division))
    {
        return view('backend.pages.divisions.edit', compact('division'));
    }
    else
    {
        return redirect()->route('admin.divisions');
    }
  }
    public function delete($id)
   {
     $division = Division::find($id);
     if (!is_null($division))
     {
       $districts = District::where('division_id',$division->id)->get();
       foreach($districts as $districts){
          $districts->delete();
       }
       $division->delete();
      }
     session()->flash('success', 'Division Has Deleted Successfully !!');
    return back();
  }

}
