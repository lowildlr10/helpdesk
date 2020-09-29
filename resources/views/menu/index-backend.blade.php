@extends('layouts.backend')

@section('content')

<div class="container mt-5 py-4 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menus') }}</div>
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('menus.create') }}" class="btn btn-info" role="button">{{ __('Add Menu') }}</a>
                        <!-- <a class="nav-link" href="divisions/create">{{ __('Add Division') }}</a> -->
                        <!-- <button type="button" class="btn btn-success" href="divisions/create">Add Division</button> -->
                    </li>
                </ul>
                <div class="card-body">
                    <div class="upper">
                        @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br>
                        @endif

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <td>ID</td>
                                <td>Menu Name</td>
                                <td>Created At</td>
                                <td>Updated At</td>
                                <td colspan="2">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $menu)
                                <tr>
                                    <td>{{$menu->id}}</td>
                                    <td>{{$menu->name}}</td>
                                    <td>{{$menu->created_at}}</td>
                                    <td>{{$menu->updated_at}}</td>
                                    <td><a href="{{ route('menus.edit', $menu->id)}}" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        <form action="{{ route('menus.destroy', $menu->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
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