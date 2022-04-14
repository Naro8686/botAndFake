@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Mentoring') }}</div>

                    <div class="card-body">
                        <div class="table-responsive-md">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Аккаунт ТГ</th>
                                    <th scope="col">Количество ссылок «{{date('Y-m-d')}}»</th>
                                    <th scope="col">Общая количество ссылок</th>
                                    <th scope="col">Последняя созданная ссылка</th>
                                    <th scope="col">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($children as $child)
                                    @php
                                        $fakes = $child->fakes();
                                        $lastFake = optional($child->fakes()->orderByDesc('fakes.id')->first());
                                        $allCount = $fakes->count();
                                        $todayCount = $fakes->whereDate('fakes.created_at', \Illuminate\Support\Carbon::today())->count();
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{!! $child->accountLinkVisibly(true) !!}</td>
                                        <td>{{$todayCount}}</td>
                                        <td>{{$allCount}}</td>
                                        <td>
                                            <a href="{{$lastFake->linkForGet(true)}}">{{$lastFake->track_id}}</a>
                                            - {{$lastFake->created_at}}
                                        </td>
                                        <td>
                                            <div class='d-flex justify-content-between' role='group'>
                                                <button type='button' class='btn btn-sm btn-danger mr-1' data-toggle='modal'
                                                        data-target='#confirmModal' title="Отказаться от наставничества"
                                                        data-url='{{route('mentor.destroy',$child->id)}}'><span aria-hidden="true">×</span>
                                                </button>
                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                    <tr><td class="text-center" colspan="6">{{__('Empty')}}</td></tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-3">
                            {!! $children->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
