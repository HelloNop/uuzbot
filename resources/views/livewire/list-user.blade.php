
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div x-data="{ open: false}">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Users Lists</h3>
                            <div class="nk-block-des text-soft">
                                <p>admin user {{$adminCount}}</p>
                                <p>Total User VIP {{$vip}} | Belum VIP {{$uzer}}</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                                <ul class="nk-block-tools g-3">
                                    <li class="nk-block-tools-opt">
                                        <button @click="open = ! open"  class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></button >
                                        <button  @click= "open = ! open" ct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Admin</span></a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
                {{-- add admin --}}
                <div  x-show="open" class="nk-block mb-4">
                    <div class="row g-3">
                        <div class="col-4">
                            <div class="form-group">
                                <label class="form-label" for="nama-admin">Nama</label>
                                <div class="form-control-wrap">
                                    <input wire:model ="name" type="text" class="form-control" id="nama-admin">
                                </div>
                                @error('name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="form-label" for="email-admin">Email</label>
                                <div class="form-control-wrap">
                                    <input wire:model="email" type="text" class="form-control" id="email-admin">
                                </div>
                                @error('email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label class="form-label" for="password-admin">Password</label>
                                <div class="form-control-wrap">
                                    <input wire-model="password" type="password" class="form-control" id="password-admin">
                                </div>
                                @error('password') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <button wire:click="addAdmin" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Tambah Admin</span></button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- end add admin --}}
            <div class="nk-block">
                <div class="card card-bordered card-stretch">
                    <div class="card-inner-group">
                        <div class="card-inner position-relative card-tools-toggle">
                            <div class="card-title-group">
                                <div class="form-control-wrap w-30">
                                    <div class="form-icon form-icon-right"><em class="icon ni ni-search"></em>
                                    </div>
                                    <input  wire:model="search" type="text" class="form-control" id="" placeholder="Cari User">
                                </div>
                                <div class="card-tools mr-n1">
                                    <ul class="btn-toolbar gx-1">
                                        <li>
                                            <a href="#" class="btn btn-icon btn-white btn-outline-light"><em
                                            class="icon ni ni-trash-empty-fill"></em></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-inner p-0">
                            <div class="nk-tb-list nk-tb-ulist is-compact">
                                <div class="nk-tb-item nk-tb-head">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext"><input
                                                type="checkbox" class="custom-control-input" id="uid"><label
                                                class="custom-control-label" for="uid"></label></div>
                                    </div>
                                    <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                    <div class="nk-tb-col "><span class="sub-text">Email</span></div>
                                    <div class="nk-tb-col "><span class="sub-text">Role</span></div>
                                    <div class="nk-tb-col "><span class="sub-text">Tanggal Daftar</span></div>
                                    <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                    <div class="nk-tb-col"><span class="sub-text">Action</span></div>
                                    <div class="nk-tb-col"><span class="sub-text">Edit</span></div>
                                </div>

                                @foreach ($users as $user)
                                <div class="nk-tb-item">
                                    <div class="nk-tb-col nk-tb-col-check">
                                        <div class="custom-control custom-control-sm custom-checkbox notext"><input
                                                type="checkbox" class="custom-control-input" id="uid1"><label
                                                class="custom-control-label" for="uid1"></label></div>
                                    </div>
                                    @if ($editState !== $user->id)
                                        <div class="nk-tb-col ">
                                            <div class="user-name"><span class="tb-lead">{{$user->name}}</span></div>
                                        </div>
                                        <div class="nk-tb-col "><span>{{$user->email}}</span></div>
                                        <div class="nk-tb-col "><span>{{$user->roles}}</span></div>
                                    @endif
                                    @if ($editState === $user->id)
                                        <div class="nk-tb-col">
                                                <div class="user-name">
                                                <span class="tb-lead">
                                                    <div class="form-control-wrap">
                                                        <input wire:model="name" type="text" class="form-control" id="name-user">
                                                    </div>
                                                </span>
                                                </div>

                                        </div>
                                        <div class="nk-tb-col">
                                            <span>
                                                <div class="form-control-wrap">
                                                    <input wire:model="email" type="text" class="form-control" id="name-user">
                                                </div>
                                            </span>
                                        </div>
                                        <div class="nk-tb-col "><span>{{$user->roles}}</span></div>
                                    @endif
                                    <div class="nk-tb-col"><span>{{$user->created_at->diffForHumans()}}</span></div>
                                    @if ($user->roles === 'user')
                                    <div class="nk-tb-col"><span class="tb-status text-danger">Belum VIP</span></div>
                                    @else
                                    <div class="nk-tb-col"><span class="tb-status text-success">Sudah VIP</span></div>
                                    @endif

                                    <div class="nk-tb-col"><span class="tb-status text-success"><a wire:click = "suspend({{ $user->id}})"
                                                class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Suspend"><em
                                                    class="icon ni ni-user-cross-fill"></em></a></span>
                                    <span class="tb-status text-success"><a wire:click = "active({{ $user->id}})"
                                                class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Active VIP"><em class="icon ni ni-check-fill-c"></em></a></span></div>
                                    <div class="nk-tb-col">
                                        @if ($editState !== $user->id)
                                            <span class="tb-status text-success"><a wire:click = "showEdit({{ $user->id}})"
                                                    class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Active VIP"><em class="icon ni ni-edit"></em></a>
                                            </span>
                                        @elseif ($editState === $user->id)
                                            <span class="tb-status text-success"><a wire:click = "update({{ $user->id}})"
                                                class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip"
                                                data-placement="top" title="" data-original-title="Save"><em class="icon ni ni-save-fill"></em></a>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="card-inner">
                            <ul class="pagination justify-content-center justify-content-md-start">
                                {{$users->links()}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
