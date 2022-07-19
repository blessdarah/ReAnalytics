<div class="dropdown d-inline-block">
    <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="rounded-circle header-profile-user" src="https://ui-avatars.com/api/?name={{auth()->user()->name}}&background=random" alt="Header Avatar">
        <span class="d-none d-xl-inline-block ms-2 fw-medium font-size-15">{{auth()->user()->name}}</span>
    </button>
    <div class="dropdown-menu dropdown-menu-end pt-0">
        <div class="p-3 border-bottom">
            <h6 class="mb-0">{{auth()->user()->name}}</h6>
            <p class="mb-0 font-size-11 text-muted">{{auth()->user()->email}}</p>
        </div>
        <a class="dropdown-item" href="{{route('profile')}}"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Profile</span></a>
        <a class="dropdown-item" href="{{route('contact.messages')}}"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Contact messages</span></a>
        <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Help</span></a>
        <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-2"></i> <span class="align-middle me-3">Settings</span><span class="badge badge-soft-success ms-auto">New</span></a>
        <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Lock screen</span></a>
        <div class="dropdown-divider"></div>
        <livewire:logout-button />
    </div>
</div>
