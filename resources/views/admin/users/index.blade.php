@extends('admin.layout')
@section('title', 'مدیریت کاربران')

@section('content')

    @session('error')
        <script>
            notifier.alert('{{ session('error') }}', {
                labels: {
                    alert: 'خطا'
                },
            })
        </script>
    @endsession

    @session('success')
        <script>
            notifier.success('{{ session('success') }}', {
                labels: {
                    success: 'تبریک'
                },
            })
        </script>
    @endsession

    <div class="row">
        <div class="col-12">
            <div class="px-2 d-flex align-items-center justify-content-between">
                <h5 class="text-bold-700 my-2 text-white">لیست کاربران</h5>
                <div>
                    @can('role-list')
                        <a href="{{ route('roles.index') }}" class="btn btn-sm text-white border-btn">
                            <span class="menu-title">مدیریت نقش ها</span>
                        </a>
                    @endcan
                    @can('user-create')
                        <a href="{{ route('users.create') }}" class="btn btn-sm text-white border-btn">
                            <span class="text">ایجاد کاربر جدید</span>
                        </a>
                    @endcan
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div id="recent-projects" class="media-list position-relative">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped compact dataTable" id="recent-project-table"
                                style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">شناسه</th>
                                        <th class="border-top-0">نام و نام خانوادگی</th>
                                        <th class="border-top-0">شماره موبایل</th>
                                        <th class="border-top-0">نقش ها</th>
                                        <th class="border-top-0" width="300px">اقدامات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ optional($user->document)->first_name . ' ' . optional($user->document)->last_name }}
                                            </td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @if (!empty($user->getRoleNames()))
                                                    @foreach ($user->roleObjects as $role)
                                                        <label class="badge badge-success">{{ $role->title }}</label>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                                    data-target="#actionsModal-{{ $user->id }}">
                                                    گزینه ها
                                                </button>

                                                <div class="modal fade" id="actionsModal-{{ $user->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="actionsModalLabel-{{ $user->id }}"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered modal-sm"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h6 class="modal-title"
                                                                    id="actionsModalLabel-{{ $user->id }}">اقدامات
                                                                    کاربر
                                                                </h6>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="بستن">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body d-flex flex-column">
                                                                @can('user-edit')
                                                                    <a href="{{ route('users.edit', $user->id) }}"
                                                                        class="btn btn-primary btn-sm">
                                                                        ویرایش
                                                                    </a>
                                                                @endcan

                                                                <a href="{{ route('documents.show', $user->id) }}"
                                                                    class="btn btn-sm btn-success">
                                                                    مشاهده مدارک
                                                                </a>
                                                                {{-- @can('user-delete')
                                                                <form method="POST" action="{{ route('users.destroy', $user->id) }}"
                                                                    onsubmit="return confirm('آیا از حذف کاربر مطمئن هستید؟')">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger btn-sm mb-1 w-100">
                                                                        <i class="fas fa-trash"></i> حذف
                                                                    </button>
                                                                </form>
                                                            @endcan --}}

                                                                <a href="{{ route('transactions.show', $user->id) }}"
                                                                    class="btn btn-sm btn-info btn-sm">
                                                                    تراکنش‌ها
                                                                </a>

                                                                <a href="{{ route('wallets.show', $user->id) }}"
                                                                    class="btn btn-sm btn-warning btn-sm">
                                                                    کیف پول
                                                                </a>

                                                                <a href="{{ route('subscriptions.show', $user->id) }}"
                                                                    class="btn btn-sm btn-secondary btn-sm">
                                                                    اشتراک‌ها
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {!! $data->links('pagination::bootstrap-5') !!}


@endsection
