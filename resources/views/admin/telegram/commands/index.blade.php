@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Commands') }}</div>

                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                            /alert
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                     data-parent="#accordionExample">
                                    <div class="card-body">
                                        <form action="{{route('tg.commands.handler','alert')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputMsg">Сообщение</label>
                                                <textarea name="message" class="form-control" id="inputMsg"
                                                          rows="5" aria-describedby="msg">{{old('msg')}}</textarea>
                                                @error('message')
                                                <small id="msg" class="form-text text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                            <input type="submit" class="btn btn-primary">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
