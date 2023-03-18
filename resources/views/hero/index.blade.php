@extends('layouts.app')

@section('template_title')
    Hero
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Hero') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('heroes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Real Name</th>
										<th>Hero Name</th>
										<th>Image</th>
										<th>Info</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($heroes as $hero)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $hero->real_name }}</td>
											<td>{{ $hero->hero_name }}</td>
											<td>{{ $hero->image }}</td>
											<td>{{ $hero->info }}</td>

                                            <td>
                                                <form action="{{ route('heroes.destroy',$hero->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('heroes.show',$hero->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('heroes.edit',$hero->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $heroes->links() !!}
            </div>
        </div>
    </div>
@endsection
