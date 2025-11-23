@extends('layouts.master')

@section('page-title', 'Users')
@section('breadcrumb', 'Users')

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
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Users">
                    </div>
                    <!--end::Search-->
                </div>
                <!--begin::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Toolbar-->
                    <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                        <!--begin::Filter-->
                        <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Filter</button>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Separator-->
                            <div class="separator border-gray-200"></div>
                            <!--end::Separator-->
                            <!--begin::Content-->
                            <div class="px-7 py-5" data-kt-user-table-filter="form">
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <label class="form-label fs-6 fw-semibold">Has Permissions:</label>
                                    <select class="form-select form-select-solid fw-bold select2-hidden-accessible" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="permissions" data-hide-search="true" data-select2-id="select2-data-9-g5ld" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                        <option data-select2-id="select2-data-11-bunf"></option>
                                        <option value="all">All</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                    <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Filter-->
                        <!--begin::Export-->
                        <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_users_export_modal">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Export</button>
                        <!--end::Export-->
                        <!--begin::Add user-->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                            <i class="ki-duotone ki-plus fs-2"></i>Add User</button>
                        <!--end::Add user-->
                    </div>
                    <!--end::Toolbar-->
                    <!--begin::Group actions-->
                    <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                        <div class="fw-bold me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                        <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                    </div>
                    <!--end::Group actions-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Table-->
                <div id="kt_users_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_users_table">
                            <thead>
                                <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="" style="width: 29.9px;">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_users_table .form-check-input" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_users_table" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 177.538px;">Name</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_users_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 177.538px;">Email</th>
                                    <th class="min-w-250px sorting" tabindex="0" aria-controls="kt_users_table" rowspan="1" colspan="1" aria-label="Permissions: activate to sort column ascending" style="width: 189.438px;">Permissions</th>
                                    <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_users_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 177.538px;">Created Date</th>
                                    <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 136.438px;">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-semibold">
                                @forelse($users as $user)
                                <tr class="odd">
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#" class="text-gray-800 text-hover-primary mb-1" data-bs-toggle="modal" data-bs-target="#kt_modal_view_user" data-user-id="{{ $user->id }}">{{ $user->name }}</a>
                                    </td>
                                    <td>
                                        <a href="mailto:{{ $user->email }}" class="text-gray-600 text-hover-primary mb-1">{{ $user->email }}</a>
                                    </td>
                                    <td>
                                        @if($user->permissions->count() > 0)
                                            @foreach($user->permissions->take(3) as $permission)
                                                <span class="badge badge-light-primary me-1">{{ $permission->name }}</span>
                                            @endforeach
                                            @if($user->permissions->count() > 3)
                                                <span class="badge badge-light-info">+{{ $user->permissions->count() - 3 }} more</span>
                                            @endif
                                        @else
                                            <span class="text-gray-400">No permissions</span>
                                        @endif
                                    </td>
                                    <td data-order="{{ $user->created_at->format('Y-m-d') }}">{{ $user->created_at->format('M d, Y') }}</td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                            <i class="ki-duotone ki-down fs-5 m-0">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_view_user" data-user-id="{{ $user->id }}">View</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_edit_user" data-user-id="{{ $user->id }}">Edit</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="menu-link px-3 text-danger" onclick="return confirm('Are you sure you want to delete this user?')" style="background: none; border: none; width: 100%; text-align: left; padding: 0;">Delete</button>
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-10">
                                        <div class="text-gray-400">No users found.</div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                        <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="dataTables_paginate paging_simple_numbers" id="kt_users_table_paginate">
                                {{ $users->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Table-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Content container-->
</div>

<!--begin::Modals-->
<!--begin::Modal - Add User-->
<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin::Form-->
                <form id="kt_modal_add_user_form" class="form" action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Create New User</h1>
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <input type="text" name="name" class="form-control form-control-solid" placeholder="Enter user name" value="{{ old('name') }}" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Email</span>
                        </label>
                        <input type="email" name="email" class="form-control form-control-solid" placeholder="Enter email address" value="{{ old('email') }}" required />
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Password</span>
                        </label>
                        <input type="password" name="password" class="form-control form-control-solid" placeholder="Enter password" required />
                        <div class="form-text">Password must be at least 8 characters long.</div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Confirm Password</span>
                        </label>
                        <input type="password" name="password_confirmation" class="form-control form-control-solid" placeholder="Confirm password" required />
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
                                <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $permission->id }}" id="add_permission_{{ $permission->id }}" />
                                <label class="form-check-label" for="add_permission_{{ $permission->id }}">
                                    <div class="fw-bold text-gray-800">{{ $permission->name }}</div>
                                    <div class="text-gray-500 fs-7">{{ $permission->slug }}</div>
                                </label>
                            </div>
                            @empty
                            <div class="text-gray-400">No permissions available.</div>
                            @endforelse
                        </div>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        {{-- <button type="reset" id="kt_modal_add_user_cancel" class="btn btn-light me-3">Discard</button> --}}
                        <button type="submit" id="kt_modal_add_user_submit" class="btn btn-primary">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Add User-->

<!--begin::Modal - Edit User-->
<div class="modal fade" id="kt_modal_edit_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15" id="kt_modal_edit_user_body">
                <!-- Content will be loaded via AJAX -->
                <div class="text-center py-10">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Edit User-->

<!--begin::Modal - View User-->
<div class="modal fade" id="kt_modal_view_user" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15" id="kt_modal_view_user_body">
                <!-- Content will be loaded via AJAX -->
                <div class="text-center py-10">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - View User-->
<!--end::Modals-->

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Handle edit user modal
        const editModal = document.getElementById('kt_modal_edit_user');
        if (editModal) {
            // Function to handle form submission
            function handleEditFormSubmit(form, userId, modalBody, csrfToken, editModal) {
                return function(e) {
                    e.preventDefault();
                    
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
                    
                    const formData = new FormData(form);
                    formData.append('_method', 'PUT');
                    
                    // Ensure CSRF token is included
                    if (csrfToken && !formData.has('_token')) {
                        formData.append('_token', csrfToken);
                    }
                    
                    fetch(form.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': csrfToken || ''
                        }
                    })
                    .then(response => {
                        const contentType = response.headers.get('content-type');
                        if (contentType && contentType.includes('application/json')) {
                            return response.json().then(data => ({ ok: response.ok, data }));
                        } else {
                            return response.text().then(html => ({ ok: response.ok, html }));
                        }
                    })
                    .then(result => {
                        if (result.ok && result.data && result.data.success) {
                            // Success - reload page
                            const modal = bootstrap.Modal.getInstance(editModal);
                            if (modal) {
                                modal.hide();
                            }
                            location.reload();
                        } else if (result.data && result.data.errors) {
                            // JSON validation errors - display them
                            let errorMessages = [];
                            for (const [field, messages] of Object.entries(result.data.errors)) {
                                errorMessages.push(...messages);
                                // Also show field-specific errors
                                const fieldInput = form.querySelector(`[name="${field}"]`);
                                if (fieldInput) {
                                    fieldInput.classList.add('is-invalid');
                                    const errorDiv = document.createElement('div');
                                    errorDiv.className = 'invalid-feedback d-block';
                                    errorDiv.textContent = messages[0];
                                    fieldInput.parentNode.appendChild(errorDiv);
                                }
                            }
                            if (errorMessages.length > 0) {
                                alert('Validation errors:\n' + errorMessages.join('\n'));
                            }
                        } else if (result.html) {
                            // HTML validation errors - show them in the form
                            const parser = new DOMParser();
                            const errorDoc = parser.parseFromString(result.html, 'text/html');
                            let errorForm = errorDoc.querySelector('form');
                            
                            // If form not found directly, try card-body
                            if (!errorForm) {
                                const cardBody = errorDoc.querySelector('.card-body');
                                if (cardBody) {
                                    errorForm = cardBody.querySelector('form');
                                    if (errorForm) {
                                        modalBody.innerHTML = cardBody.innerHTML;
                                    }
                                }
                            } else {
                                modalBody.innerHTML = result.html;
                            }
                            
                            const updatedForm = modalBody.querySelector('form');
                            if (updatedForm) {
                                updatedForm.action = `/users/${userId}`;
                                // Re-attach submit handler
                                updatedForm.addEventListener('submit', handleEditFormSubmit(updatedForm, userId, modalBody, csrfToken, editModal));
                            } else {
                                alert('Error updating user. Please check the form for errors.');
                            }
                        } else {
                            alert(result.data?.message || 'Error updating user. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Error updating user. Please try again.');
                    })
                    .finally(() => {
                        if (indicatorLabel && indicatorProgress) {
                            indicatorLabel.style.display = 'inline-block';
                            indicatorProgress.style.display = 'none';
                        }
                        if (submitButton) {
                            submitButton.disabled = false;
                        }
                    });
                };
            }
            
            editModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const userId = button.getAttribute('data-user-id');
                const modalBody = document.getElementById('kt_modal_edit_user_body');
                
                if (!userId) {
                    modalBody.innerHTML = '<div class="text-danger text-center py-10">User ID not found.</div>';
                    return;
                }
                
                modalBody.innerHTML = '<div class="text-center py-10"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';
                
                // Get CSRF token
                const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || 
                                 document.querySelector('input[name="_token"]')?.value;
                
                fetch(`/users/${userId}/edit`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'text/html'
                    }
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`HTTP error! status: ${response.status}`);
                        }
                        return response.text();
                    })
                    .then(html => {
                        // For AJAX requests, we get the partial view directly (just the form)
                        // For non-AJAX requests (fallback), we need to extract from card-body
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        let form = doc.querySelector('form');
                        
                        // If form is not found directly, try to find it in card-body (for non-AJAX fallback)
                        if (!form) {
                            const cardBody = doc.querySelector('.card-body');
                            if (cardBody) {
                                form = cardBody.querySelector('form');
                                if (form) {
                                    modalBody.innerHTML = cardBody.innerHTML;
                                }
                            }
                        } else {
                            // Direct form from partial view - insert it directly
                            modalBody.innerHTML = html;
                        }
                        
                        // Get the form from the inserted HTML
                        form = modalBody.querySelector('form');
                        
                        if (!form) {
                            throw new Error('Form not found in response');
                        }
                        
                        // Update form action
                        form.action = `/users/${userId}`;
                        
                        // Attach submit handler
                        form.addEventListener('submit', handleEditFormSubmit(form, userId, modalBody, csrfToken, editModal));
                    })
                    .catch(error => {
                        console.error('Error loading edit form:', error);
                        modalBody.innerHTML = '<div class="text-danger text-center py-10">Error loading user data. Please refresh the page and try again.</div>';
                    });
            });
        }

        // Handle view user modal
        const viewModal = document.getElementById('kt_modal_view_user');
        if (viewModal) {
            viewModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                const userId = button.getAttribute('data-user-id');
                const modalBody = document.getElementById('kt_modal_view_user_body');
                
                modalBody.innerHTML = '<div class="text-center py-10"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>';
                
                fetch(`/users/${userId}`)
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const doc = parser.parseFromString(html, 'text/html');
                        const content = doc.querySelector('.card-body');
                        if (content) {
                            modalBody.innerHTML = content.innerHTML;
                        }
                    })
                    .catch(error => {
                        modalBody.innerHTML = '<div class="text-danger text-center py-10">Error loading user data.</div>';
                    });
            });
        }

        // Handle add user form submission
        const addUserForm = document.getElementById('kt_modal_add_user_form');
        if (addUserForm) {
            addUserForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const formData = new FormData(this);
                
                fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => {
                    if (response.ok) {
                        return response.json();
                    }
                    throw new Error('Network response was not ok');
                })
                .then(data => {
                    if (data.success) {
                        location.reload();
                    }
                })
                .catch(error => {
                    alert('Error creating user. Please try again.');
                });
            });
        }
    });
</script>
@endpush
@endsection
