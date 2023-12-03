<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\InvestCat;
use Exception;
use App\Http\Requests\Backend\InvestCat\StoreInvestCatRequest;
use App\Http\Requests\Backend\InvestCat\UpdateInvestCatRequest;

class InvestCatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $investCat = InvestCat::paginate(10);
        return view('backend.investCat.index', compact('investCat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.investCat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvestCatRequest $request)
    {
        try {
            $investCat = new InvestCat();
            $investCat->invset_cat_name = $request->invsetCatName;
            $investCat->status = $request->status;

            $investCat->created_by = currentUserId();
            if ($investCat->save()) {
                $this->notice::success('Investigation Category Successfully Added');
                return redirect()->route('investCat.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back();
            }

        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(InvestCat $investCat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $investCat = InvestCat::findOrFail(encryptor('decrypt', $id));
        return view('backend.investCat.edit', compact('investCat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvestCatRequest $request, $id)
    {
        try {
            $investCat = InvestCat::findOrFail(\encryptor('decrypt', $id));
            $investCat->invset_cat_name = $request->invsetCatName;
            $investCat->status = $request->status;

            $investCat->created_by = currentUserId();
            if ($investCat->save()) {
                $this->notice::success('Investigation Category Successfully Updated');
                return redirect()->route('investCat.index');
            } else {
                $this->notice::error('Please try again');
                return redirect()->back();
            }

        } catch (Exception $e) {
            dd($e);
            $this->notice::error('Please try again');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $investCat = InvestCat::findOrFail(encryptor('decrypt', $id));
        if ($investCat->delete()) {
            $this->notice::error('Investigation Category Deleted Permanently!');
            return redirect()->back();
        }
    }
}
