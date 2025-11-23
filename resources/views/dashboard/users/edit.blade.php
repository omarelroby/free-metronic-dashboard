@extends('layouts.master')

@section('page-title', 'Edit User')
@section('breadcrumb', 'Edit User')

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
                    <h2>Edit User</h2>
                </div>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end">
                        <a href="{{ route('users.index') }}" class="btn btn-light me-3">Cancel</a>
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <form action="{{ route('users.update', $user->id) }}" method="POST" id="kt_edit_user_form">
                    @csrf
                    @method('PUT')
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Name</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="text" name="name" class="form-control form-control-solid mb-3 mb-lg-0 @error('name') is-invalid @enderror" placeholder="Enter user name" value="{{ old('name', $user->name) }}" required />
                        <!--end::Input-->
                        @error('name')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="required fw-semibold fs-6 mb-2">Email</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="email" name="email" class="form-control form-control-solid mb-3 mb-lg-0 @error('email') is-invalid @enderror" placeholder="Enter email address" value="{{ old('email', $user->email) }}" required />
                        <!--end::Input-->
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fw-semibold fs-6 mb-2">Password</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="password" name="password" class="form-control form-control-solid mb-3 mb-lg-0 @error('password') is-invalid @enderror" placeholder="Leave blank to keep current password" />
                        <!--end::Input-->
                        @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Leave blank to keep current password. Password must be at least 8 characters long if provided.</div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fw-semibold fs-6 mb-2">Confirm Password</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <input type="password" name="password_confirmation" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Confirm password" />
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="fv-row mb-7">
                        <!--begin::Label-->
                        <label class="fw-semibold fs-6 mb-2">Permissions</label>
                        <!--end::Label-->
                        <!--begin::Input-->
                        <div class="form-control form-control-solid" style="max-height: 300px; overflow-y: auto; padding: 1rem;">
                            @forelse($permissions as $permission)
                            <div class="form-check form-check-custom form-check-solid mb-5">
                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="permission_{{ $permission->id }}" 
                                    {{ in_array($permission->id, old('permissions', $user->permissions->pluck('id')->toArray())) ? 'checked' : '' }} />
                                <label class="form-check-label" for="permission_{{ $permission->id }}">
                                    <div class="fw-bold text-gray-800">{{ $permission->name }}</div>
                                    <div class="text-gray-500 fs-7">{{ $permission->slug }}</div>
                                    @if($permission->description)
                                    <div class="text-gray-400 fs-7 mt-1">{{ $permission->description }}</div>
                                    @endif
                                </label>
                            </div>
                            @empty
                            <div class="text-gray-400">No permissions available. <a href="{{ route('permissions.create') }}">Create one first</a>.</div>
                            @endforelse
                        </div>
                        <!--end::Input-->
                        @error('permissions')
                            <div class="text-danger fs-7 mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" class="btn btn-light me-3">Discard</button>
                        <button type="submit" class="btn btn-primary">
                            <span class="indicator-label">Update</span>
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

