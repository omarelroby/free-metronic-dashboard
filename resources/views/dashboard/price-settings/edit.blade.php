@extends('layouts.master')

@section('page-title', 'Price Setting')
@section('breadcrumb', 'Price Setting')

@section('content')
<div id="kt_app_content" class="app-content flex-column-fluid">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2>Price Setting</h2>
                </div>
                <!--end::Card title-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ route('price-settings.update') }}" method="POST" id="kt_price_setting_form">
                    @csrf
                    @method('PUT')
                    
                    <!--begin::Row with 3 columns-->
                    <div class="row">
                        <!--begin::Column 1 - Additional Amount-->
                        <div class="col-md-4">
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Additional Amount</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" 
                                       name="additional_amount" 
                                       class="form-control form-control-solid @error('additional_amount') is-invalid @enderror" 
                                       placeholder="Enter additional amount" 
                                       value="{{ old('additional_amount', $priceSetting->additional_amount) }}" 
                                       step="0.01" 
                                       min="0" 
                                       required />
                                <!--end::Input-->
                                @error('additional_amount')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!--end::Column 1-->

                        <!--begin::Column 2 - Commission-->
                        <div class="col-md-4">
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Commission</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" 
                                       name="commission" 
                                       class="form-control form-control-solid @error('commission') is-invalid @enderror" 
                                       placeholder="Enter commission" 
                                       value="{{ old('commission', $priceSetting->commission) }}" 
                                       step="0.01" 
                                       min="0" 
                                       required />
                                <!--end::Input-->
                                @error('commission')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!--end::Column 2-->

                        <!--begin::Column 3 - Shipping Price-->
                        <div class="col-md-4">
                            <div class="fv-row mb-7">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-2">Shipping Price</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="number" 
                                       name="shipping_price" 
                                       class="form-control form-control-solid @error('shipping_price') is-invalid @enderror" 
                                       placeholder="Enter shipping price" 
                                       value="{{ old('shipping_price', $priceSetting->shipping_price) }}" 
                                       step="0.01" 
                                       min="0" 
                                       required />
                                <!--end::Input-->
                                @error('shipping_price')
                                    <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!--end::Column 3-->
                    </div>
                    <!--end::Row-->

                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Update Settings</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content container-->
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('kt_price_setting_form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const submitButton = form.querySelector('button[type="submit"]');
                const indicatorLabel = submitButton?.querySelector('.indicator-label');
                const indicatorProgress = submitButton?.querySelector('.indicator-progress');
                
                if (indicatorLabel && indicatorProgress) {
                    indicatorLabel.style.display = 'none';
                    indicatorProgress.style.display = 'inline-block';
                }
                if (submitButton) {
                    submitButton.disabled = true;
                }
            });
        }
    });
</script>
@endpush

