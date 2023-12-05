<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\TestDetail;
use App\Models\Test;
use App\Models\InvestList;
use Exception;
use App\Http\Requests\Backend\TestDetail\StoreTestDetailRequest;
use App\Http\Requests\Backend\TestDetail\UpdateTestDetailRequest;

class TestDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testDetail = TestDetail::paginate(10);
        return view('backend.testDetail.index', compact('testDetail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $investList = InvestList::get();
        $test = Test::get();
        return view('backend.testDetail.create', compact('investList', 'test')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestDetailRequest $request)
    {
        try {
            $testDetail = new testDetail();
            $testDetail->test_id = $request->testId;
            $testDetail->inv_list_id = $request->invIistId;
            $testDetail->status = $request->status;
            $testDetail->created_by = currentUserId();
            if ($testDetail->save()) {
                $this->notice::success('Test Detail Successfully Added');
                return redirect()->route('testDetail.index');
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
    public function show(TestDetail $testDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testDetail = Test::findOrFail(encryptor('decrypt', $id));
        $investList = InvestList::get();
        $test = Test::get();
        return view('backend.testDetail.edit', compact('investList','test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestDetailRequest $request, TestDetail $testDetail)
    {
        try {
            $testDetail = new testDetail();
            $testDetail->test_id = $request->testId;
            $testDetail->inv_list_id = $request->invIistId;
            $testDetail->status = $request->status;
            $testDetail->created_by = currentUserId();
            if ($testDetail->save()) {
                $this->notice::success('Test Detail Successfully Updated');
                return redirect()->route('testDetail.index');
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
        $testDetail = Test::findOrFail(encryptor('decrypt', $id));
        if ($testDetail->delete()) {
            $this->notice::error('Test Detail Deleted Permanently!');
            return redirect()->back();
        }
    }
}
