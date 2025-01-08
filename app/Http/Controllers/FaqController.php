<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('admin.pages.faq', compact('faqs'));
    }
    public function store(StoreFaqRequest $request)
    {
        $data = $request->validated();
        Faq::create($data);

        toast('FAQ Added', 'success');

        return redirect()->back();
    }

    public function edit() {}

    public function update(UpdateFaqRequest $request, $id)
    {
        $data = $request->validated();

        Faq::where('id', $id)->update($data);

        toast('FAQ Updated', 'success');

        return redirect()->back();
    }

    public function destroy(string $id)
    {
        $id = Faq::find($id);


        if ($id->image) {
            Storage::disk('public')->delete($id->image);
        } else {
            $id->delete();
        }

        toast('Faq Deleted', 'success');

        return redirect()->back();
    }
}
