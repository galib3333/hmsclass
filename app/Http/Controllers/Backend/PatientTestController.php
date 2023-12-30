<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\PatientTestDetail;
use App\Models\PatientTest;
use App\Models\Patient;
use App\Models\InvestCat;
use App\Models\InvestList;
use App\Models\PatientAdmit;
use App\Models\PatientPayment;
use Exception;
use App\Http\Requests\Backend\TestDetail\StoreTestDetailRequest;
use App\Http\Requests\Backend\TestDetail\UpdateTestDetailRequest;

class PatientTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patientstest = PatientTest::paginate(10);
        return view('backend.patienttest.index', compact('patientstest'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient = Patient::get();
        $investList = InvestList::get();
        $InvestCat = InvestCat::get();
        return view('backend.patienttest.create', compact('investList', 'InvestCat','patient'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestDetailRequest $request)
    {
        try {
            $admit_id=PatientAdmit::where('patient_id',$request->patient_id)
                                    ->where('status',1)->first();

            $testDetail = new PatientTest();
            $testDetail->patient_id = $request->patient_id;
            $testDetail->sub_price = $request->sub_price;
            $testDetail->vat = $request->vat;
            $testDetail->discount = $request->discount;
            $testDetail->total_amount = $request->total_amount;
            $testDetail->paid = $request->advance;

            if($admit_id)
                $testDetail->admit_id = $admit_id->id;

            $testDetail->status = 1;
            $testDetail->created_by = currentUserId();
            if ($testDetail->save()) {
                if($request->test){
                    foreach($request->test as $test){
                        $tdetails=new PatientTestDetail();
                        $tdetails->patient_test_id=$testDetail->id;
                        $tdetails->inv_list_id=$test['invId'];
                        $tdetails->amount=$test['price'];
                        $tdetails->save();
                    }
                }
                if($request->advance){
                    $payment=new PatientPayment();
                    $payment->patient_id=$request->patient_id;
                    if($admit_id)
                        $payment->admit_id = $admit_id->id;

                    $payment->date=date('Y-m-d');
                    $payment->amount=$request->advance;
                    $payment->save();
                }
                $this->notice::success('Test Detail Successfully Added');
                return redirect()->route('patienttest.index');
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
    public function show(PatientTest $testDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestDetailRequest $request, PatientTest $testDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patientstest = PatientTest::findOrFail(encryptor('decrypt', $id));
        if ($patientstest->delete()) {
            $this->notice::error('Test Category Deleted Permanently!');
            return redirect()->back();
        }
    }
}
