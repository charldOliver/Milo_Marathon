<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Runner;
class RunnerController extends Controller
{
    // SAVE RUNNER
   public function store(Request $request)
{
    $request->validate([
        'fullname' => 'required',
        'age' => 'required|integer',
        'gender' => 'required',
        'contact' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'category' => 'required',
        'emergency_contact' => 'required',
        'shirt_size' => 'required|in:XS,S,M,L,XL,XXL'
    ]);

    Runner::create([
        'full_name' => $request->fullname,
        'age' => $request->age,
        'gender' => $request->gender,
        'phone' => $request->contact,
        'email' => $request->email,
        'address' => $request->address,
        'marathon_category' => $request->category,
        'registration_date' => now(),
        'emergency_contact' => $request->emergency_contact,
        'shirt_size' => $request->shirt_size
    ]);

    return redirect()->back()->with('success', 'Runner Registered Successfully!');
}
  // SHOW EDIT FORM
    public function edit($id)
    {
        $runner = Runner::findOrFail($id);
        return view('editRunner', compact('runner'));
    }

    // SAVE UPDATED RUNNER
    public function update(Request $request, $id)
    {
        $request->validate([
            'fullname'          => 'required',
            'age'               => 'required|integer',
            'gender'            => 'required',
            'contact'           => 'required',
            'email'             => 'required|email',
            'address'           => 'required',
            'category'          => 'required',
            'emergency_contact' => 'required',
            'shirt_size'        => 'required|in:XS,S,M,L,XL,XXL'
        ]);
        $runner = Runner::findOrFail($id);
        $runner->full_name         = $request->fullname;
        $runner->age               = $request->age;
        $runner->gender            = $request->gender;
        $runner->marathon_category = $request->category;
        $runner->email             = $request->email;
        $runner->phone             = $request->contact;
        $runner->address           = $request->address;
        $runner->emergency_contact = $request->emergency_contact;
        $runner->shirt_size        = $request->shirt_size;
        $runner->save();
        return redirect('/allRunners')->with('success', 'Runner updated successfully!');
    }


    // DISPLAY RUNNERS
public function index(Request $request)
{
    $search = $request->search;
    $query = Runner::query();
    if ($search) {
        $query->where('full_name', 'like', "%{$search}%")
              ->orWhere('marathon_category', 'like', "%{$search}%")
              ->orWhere('gender', 'like', "%{$search}%");
    }
    $runners = $query->latest()->get();
    return view('allRunners', compact('runners'));
}
}