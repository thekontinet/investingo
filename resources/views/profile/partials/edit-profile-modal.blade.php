    <!-- @@ Profile Edit Modal @e -->
    @if ($errors->profile->all())
        @push('scripts')
            <script>
                (new bootstrap.Modal('#profile-edit')).show();
            </script>
        @endpush
    @endif

    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-header">
                    <h5 class="title">Update Profile</h5>
                </div>
                <div class="modal-body modal-body-lg">
                    <form action="{{ route('profile.update') }}" method="post" class="container-fluid" id="personal">
                        @csrf
                        @method('PATCH')
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Full Name</label>
                                    <x-text-input type="text" name="name" class="form-control form-control-lg"
                                        id="full-name" :value="old('name', $user->name)" placeholder="Enter Full name" />
                                    <x-input-error :messages="$errors->profile->get('name')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email</label>
                                    <x-text-input type="text" name='email' class="form-control form-control-lg"
                                        id="email" :value="old('email', $user->email)" placeholder="Email Address" />
                                    <x-input-error :messages="$errors->profile->get('email')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone">Phone Number</label>
                                    <x-text-input type="text" name="phone" class="form-control form-control-lg"
                                        id="phone" :value="old('phone', $user->phone)" placeholder="Enter Phone Number" />
                                    <x-input-error :messages="$errors->profile->get('phone')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="country">Country</label>
                                    <x-text-input type="text" name="country" class="form-control form-control-lg"
                                        id="country" :value="old('country', $user->country)" placeholder="Country" />
                                    <x-input-error :messages="$errors->profile->get('country')" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="state">State</label>
                                    <x-text-input type="text" name="state" class="form-control form-control-lg"
                                        id="state" :value="old('state', $user->state)" placeholder="state" />
                                    <x-input-error :messages="$errors->profile->get('state')" />
                                </div>
                            </div>
                            <div class="col-12">
                                <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                    <li>
                                        <button class="btn btn-lg btn-primary">Update Profile</button>
                                    </li>
                                    <li>
                                        <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form><!-- .tab-pane -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
