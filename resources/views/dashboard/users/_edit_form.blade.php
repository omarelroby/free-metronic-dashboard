<!--begin::Form-->
<form action="{{ route('users.update', $user->id) }}" method="POST" id="kt_edit_user_form">
    @csrf
    @method('PUT')
    <!--begin::Heading-->
    <div class="mb-13 text-center">
        <h1 class="mb-3">Edit User</h1>
    </div>
    <!--end::Heading-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Name</span>
        </label>
        <input type="text" name="name" class="form-control form-control-solid @error('name') is-invalid @enderror" placeholder="Enter user name" value="{{ old('name', $user->name) }}" required />
        @error('name')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span class="required">Email</span>
        </label>
        <input type="email" name="email" class="form-control form-control-solid @error('email') is-invalid @enderror" placeholder="Enter email address" value="{{ old('email', $user->email) }}" required />
        @error('email')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span>Password</span>
        </label>
        <input type="password" name="password" class="form-control form-control-solid @error('password') is-invalid @enderror" placeholder="Leave blank to keep current password" />
        @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
        @enderror
        <div class="form-text">Leave blank to keep current password. Password must be at least 8 characters long if provided.</div>
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span>Confirm Password</span>
        </label>
        <input type="password" name="password_confirmation" class="form-control form-control-solid" placeholder="Confirm password" />
    </div>
    <!--end::Input group-->
    <!--begin::Input group-->
    <div class="d-flex flex-column mb-8 fv-row">
        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            <span>Permissions</span>
        </label>
        <div class="form-control form-control-solid" style="max-height: 200px; overflow-y: auto; padding: 1rem;">
            @forelse($permissions as $permission)
            <div class="form-check form-check-custom form-check-solid mb-3">
                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="edit_permission_{{ $permission->id }}" 
                    {{ in_array($permission->id, old('permissions', $user->permissions->pluck('id')->toArray())) ? 'checked' : '' }} />
                <label class="form-check-label" for="edit_permission_{{ $permission->id }}">
                    <div class="fw-bold text-gray-800">{{ $permission->name }}</div>
                    <div class="text-gray-500 fs-7">{{ $permission->slug }}</div>
                </label>
            </div>
            @empty
            <div class="text-gray-400">No permissions available.</div>
            @endforelse
        </div>
        @error('permissions')
            <div class="text-danger fs-7 mt-1">{{ $message }}</div>
        @enderror
    </div>
    <!--end::Input group-->
    <!--begin::Actions-->
    <div class="text-center">
        <button type="reset" id="kt_modal_edit_user_cancel" class="btn btn-light me-3">Discard</button>
        <button type="submit" id="kt_modal_edit_user_submit" class="btn btn-primary">
            <span class="indicator-label">Update</span>
            <span class="indicator-progress">Please wait...
            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Form-->

