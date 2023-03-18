@extends('layouts.app')

@section('template_title')
    {{ $hero->name ?? "{{ __('Show') Hero" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Hero</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('heroes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Real Name:</strong>
                            {{ $hero->real_name }}
                        </div>
                        <div class="form-group">
                            <strong>Hero Name:</strong>
                            {{ $hero->hero_name }}
                        </div>
                        <div class="form-group">
                            <strong>Image:</strong>
                            {{ $hero->image }}
                        </div>
                        <div class="form-group">
                            <strong>Info:</strong>
                            {{ $hero->info }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
