@extends('layouts.dashboard')

@section('title')
    {{ trans('users.title.index')}}
@endsection

@section('breadcrumbs')
    {{ Breadcrumbs::render('users')}}
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
          <div class="card-header">
             <div class="row">
                <div class="col-md-6">
                   <form action="" method="GET">
                      <div class="input-group">
                         <input name="keyword" value="" type="search" class="form-control" placeholder="">
                         <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                               <i class="fas fa-search"></i>
                            </button>
                         </div>
                      </div>
                   </form>
                </div>
                <div class="col-md-6">
                   <a href="" class="btn btn-primary float-right" role="button">
                      Create
                      <i class="fas fa-plus-square"></i>
                   </a>
                </div>
             </div>
          </div>
          <div class="card-body">
             <div class="row">
                <!-- list users:Start -->
                @forelse ($users as $user)
                    <div class="col-md-4">
                        <div class="card my-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-2">
                                    <i class="fas fa-id-badge fa-5x"></i>
                                </div>
                                <div class="col-md-10">
                                    <table>
                                    <tr>
                                        <th>
                                            {{ trans('users.label.name')}}
                                        </th>
                                        <td>:</td>
                                        <td>
                                            {{ $user->name}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('users.label.email') }}
                                        </th>
                                        <td>:</td>
                                        <td>
                                            {{ $user->email}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            {{ trans('users.label.role')}}
                                        </th>
                                        <td>:</td>
                                        <td>
                                            {{ $user->roles->first()->name }}
                                        </td>
                                    </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="float-right">
                                <!-- edit -->
                                <a href="" class="btn btn-sm btn-info" role="button">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <!-- delete -->
                                <form action="" method="POST" role="alert" class="d-inline">
                                    <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                @empty
                    <p>
                        <strong>
                            {{ trans('users.label.no_data.fetch') }}
                        </strong>
                    </p>
                @endforelse
                <!-- list users:End -->
             </div>
          </div>
          <div class="card-footer">
             <!-- Todo:paginate -->
          </div>
       </div>
    </div>
 </div>
@endsection
