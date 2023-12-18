@extends('backend.app')

@section('title', trans('Test Invoice'))

@section('content')
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                            <li class="nav-item">
                                <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                    class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Test
                                        Invoice</span></a>
                            </li>
                        </ul>
                        <form action="{{route('patienttest.store')}}" method="post">
                            @csrf
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <div class="row">
                                        <div class="col-md-7 mt-3">
                                            <label for="status">Patient's ID:</label>
                                            <select class="form-control" name="patient_id" id="">
                                                <option value="">Select Patient</option>
                                                @forelse ($patient as $p)
                                                    <option value="{{$p->id}}">{{$p->name_en}} - {{$p->contact_no_en}} - {{$p->patient_id}}</option>
                                                @empty
                                                    
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 mt-2 repeater">
                                            <div class="row">
                                                <div class="form-group col-md-4 col-12 mb-0">
                                                    <label for="invsetCatName">Investigation Category<i class="text-danger">*</i></label>
                                                </div>
                                                <div class="form-group col-md-4 col-12 mb-0">
                                                    <label for="roomCatId">Investigation Name<i class="text-danger">*</i></label>
                                                </div>
                                                <div class="form-group col-md-4 col-12 mb-0">
                                                    <label for="price">Price</label>
                                                </div>
                                            </div>
                                            <div data-repeater-list="test">
                                                <div data-repeater-item>
                                                    <div class="row">
                                                        <div class="form-group col-md-4 col-12">
                                                            <select onchange="$(this).closest('.row').find('.invct').hide();$(this).closest('.row').find('.invct'+this.value).show()" class="form-control" name="invsetCatName">
                                                                <option value="">--Investigation Category--</option>
                                                                @forelse($InvestCat as $rc)
                                                                    <option value="{{ $rc->id }}"> {{ $rc->invset_cat_name }}</option>
                                                                @empty
                                                                    <option value="">No Room Category found</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4 col-12">
                                                            <select class="form-control invId" onchange="addprice(this)" name="invId">
                                                                <option value="">--Investigation Name--</option>
                                                                @forelse($investList as $rc)
                                                                    <option data-price="{{$rc->price}}" class="invct invct{{$rc->inv_cat_id}}" value="{{ $rc->id }}">{{ $rc->invset_name }}</option>
                                                                @empty
                                                                    <option value="">No Room Category found</option>
                                                                @endforelse
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4 col-12">
                                                            <input type="number" class="form-control price" name="price" placeholder="Enter Price">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <input data-repeater-create type="button" class="btn btn-primary float-right" value="Add"/>
                                                </div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="form-group col-sm-4 col-12"></div>
                                                <div class="form-group col-sm-3 col-12 text-right">
                                                    <label for="price">Sub Total</label>
                                                </div>
                                                <div class="form-group col-sm-5 col-12 text-right">
                                                    <input type="hidden"  id="sub_price" name="sub_price">
                                                    <b id="sub_pricet"></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-4 col-12"></div>
                                                <div class="form-group col-sm-3 col-12 text-right">
                                                    <label for="discount">Discount</label>
                                                </div>
                                                <div class="form-group col-sm-3 col-12">
                                                    <input type="number" class="form-control" onkeyup="caltotal()" id="discount" name="discount" placeholder="Enter Discount">
                                                </div>
                                                <div class="form-group col-sm-2 col-12 text-right">
                                                    <b id="discountt"></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-4 col-12"></div>
                                                <div class="form-group col-sm-3 col-12 text-right">
                                                    <label for="price">Vat</label>
                                                </div>
                                                <div class="form-group col-sm-3 col-12">
                                                    <input type="number" class="form-control" onkeyup="caltotal()" id="vat" name="vat" placeholder="Enter VAT">
                                                </div>
                                                <div class="form-group col-sm-2 col-12 text-right">
                                                    <b id="vatt"></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-4 col-12"></div>
                                                <div class="form-group col-sm-3 col-12 text-right">
                                                    <label for="total_amount">Total</label>
                                                </div>
                                                <div class="form-group col-sm-5 col-12 text-right">
                                                    <input type="hidden" id="total_amount" name="total_amount">
                                                    <b id="total_amountt"></b>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-4 col-12"></div>
                                                <div class="form-group col-sm-3 col-12 text-right">
                                                    <label for="advance">Advance</label>
                                                </div>
                                                <div class="form-group col-sm-5 col-12 text-right">
                                                    <input type="text" class="form-control" id="advance" name="advance">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group justify-content-end">
                                    <button type="submit" class="btn btn-light px-3">submit</button>
                                </div>
                            </div>
                            {{-- end of print container --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

    </div>

    <!-- End container-fluid-->

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

@endsection
@push('scripts')
<script src="{{ asset('public/assets/js/jquery.repeater.min.js')}}"></script>
<script>
    function addprice(e){
        let price=$(e).find('option:selected').data('price');
        $(e).closest('.row').find('.price').val(price);
        caltotal();
    }
    function caltotal(){

        let subtotal=discount=vat=total=0
        $('.price').each(function(e){
            subtotal+=parseFloat($(this).val());
        })
        

        let discount_=$('#discount').val();
        if(discount_){
            discount=(subtotal*(parseFloat(discount_)/100));
        }
        let vat_=$('#vat').val();
        if(vat_){

            vat=((subtotal - discount)*(parseFloat(vat_)/100));
        }
        total=((subtotal-discount)+vat)

        $('#sub_price').val(subtotal);
        $('#sub_pricet').text(subtotal);
        $('#discountt').text(discount);
        $('#vatt').text(vat);
        $('#total_amount').val(total);
        $('#total_amountt').text(total);
    }
    $(document).ready(function () {
        $('.repeater').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }]
        });
    });
</script>
@endpush