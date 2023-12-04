<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\InvestList;
use App\Models\InvestCat;
use Exception;
use App\Http\Requests\Backend\Investigation\StoreInvestListRequest;
use App\Http\Requests\Backend\Investigation\UpdateInvestListRequest;

class InvestListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invest = InvestList::paginate(10);
        return view('backend.invest.index', compact('invest'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $investCat = InvestCat::get();
        return view('backend.invest.create', compact('investCat'));   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInvestListRequest $request)
    {
        try {
            $invest = new InvestList();
            $invest->inv_cat_id = $request->invCatId;
            $invest->invset_name = $request->invsetName;
            $invest->description = $request->description;
            $invest->price = $request->price;
            $invest->status = $request->status;
            $invest->created_by = currentUserId();
            if ($invest->save()) {
                $this->notice::success('Investigation Successfully Added');
                return redirect()->route('invest.index');
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
    public function show(InvestList $investList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $invest = InvestList::findOrFail(encryptor('decrypt', $id));
        $investCat = InvestCat::get();
        return view('backend.invest.edit', compact('investCat','invest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInvestListRequest $request, $id)
    {
        try {
            $invest = InvestList::findOrFail(\encryptor('decrypt', $id));
            $invest->inv_cat_id = $request->invCatId;
            $invest->invset_name = $request->invsetName;
            $invest->description = $request->description;
            $invest->price = $request->price;
            $invest->status = $request->status;
            $invest->updated_by = currentUserId();
            if ($invest->save()) {
                $this->notice::success('Investigation Successfully Updated');
                return redirect()->route('invest.index');
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
        $invest = InvestList::findOrFail(encryptor('decrypt', $id));
        if ($invest->delete()) {
            $this->notice::error('Investigation Deleted Permanently!');
            return redirect()->back();
        }
    }
}
