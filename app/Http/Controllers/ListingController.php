<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Inertia\ResponseFactory;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response|ResponseFactory
     */
    public function index(): \Inertia\Response|ResponseFactory
    {
        return inertia('Listing/Index',
            [
                'listings' => Listing::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response|ResponseFactory
     */
    public function create(): \Inertia\Response|ResponseFactory
    {
        return inertia('Listing/Create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        Listing::create(
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:15|max:1500',
                'city' => 'required',
                'code' => 'required',
                'street' => 'required',
                'street_nr' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ])
        );

       return redirect()->route('listing.index')->with('success', 'Listing was created');
    }

    /**
     * Display the specified resource.
     *
     * @param Listing $listing
     * @return \Inertia\Response|ResponseFactory
     */
    public function show(Listing $listing): \Inertia\Response|ResponseFactory
    {
        return inertia('Listing/Show',
            [
                'listing' => $listing
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Listing $listing
     * @return \Inertia\Response|ResponseFactory
     */
    public function edit(Listing $listing): \Inertia\Response|ResponseFactory
    {
        return inertia('Listing/Edit',
            [
                'listing' => $listing
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Listing $listing
     * @return RedirectResponse
     */
    public function update(Request $request, Listing $listing): RedirectResponse
    {
        $listing->update(
            $request->validate([
                'beds' => 'required|integer|min:0|max:20',
                'baths' => 'required|integer|min:0|max:20',
                'area' => 'required|integer|min:15|max:1500',
                'city' => 'required',
                'code' => 'required',
                'street' => 'required',
                'street_nr' => 'required|min:1|max:1000',
                'price' => 'required|integer|min:1|max:20000000',
            ])
        );

        return redirect()->route('listing.index')->with('success', 'Listing was changed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Listing $listing
     * @return RedirectResponse
     */
    public function destroy(Listing $listing): RedirectResponse
    {
        $listing->delete();

        return redirect()->back()->with('success', 'Listing was deleted');
    }
}
