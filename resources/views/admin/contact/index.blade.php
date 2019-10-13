@extends('layouts.admin.master')
@section('title','Show Contact Message')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Messages</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Serial
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                               Phone Number
                            </th>
                            <th>
                               Messages
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $message)
                            <tr>
                                <td>
                                    {{ $message->id }}
                                </td>
                                <td>
                                    {{ $message->name }}
                                </td>
                                <td>
                                    {{ $message->phone }}
                                </td>
                                <td>
                                    {{ $message->email }}
                                </td>
                                <td>
                                    {{ $message->message }}
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
