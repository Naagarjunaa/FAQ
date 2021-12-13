<?php

namespace App\Http\Controllers;

use App\DataTables\FaqDataTable;
use App\Models\Faq;
use Illuminate\Http\Request;
use App\Features\Faq\CreateFaq;
use App\Features\Faq\UpdateFaq;

class FaqController extends Controller
{
    /**
     * Display a listing of the faq.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FaqDataTable $faqDatatable)
    {
        return $faqDatatable->render('faq.index');
    }

    /**
     * Show the form for creating a new faq.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faq.create');
    }

    /**
     * Store a newly created faq in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newFaq = (new CreateFaq())->create($request->post());
        return redirect('/faqs')
            ->with('message', 'FAQ added Successfully');
    }

    /**
     * Display the specified faq.
     *
     * @param  \App\ModelsCreateNewFaq\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
        return view('faq.show', compact('faq'));
    }

    /**
     * Show the form for editing the specified faq.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq)
    {
        return view('faq.create', compact('faq'));
    }

    /**
     * Update the specified faq in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq)
    {
        (new UpdateFaq())->updateFaq($faq, $request->post());
        return redirect('/faqs')->with('message', 'FAQ updated Successfully');
    }

    /**
     * Remove the specified faq from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();
        return response()->json(['success' => true, 'message' => 'FAQ Deleted Successfully'], 200);
    }
}
