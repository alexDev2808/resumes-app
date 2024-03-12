@extends('layouts.app')

@section('content')
<div class="container">
    <table
        class="table table-striped"
    >
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resumes as $resume)
                <tr>
                    <td>
                        <a href="{{ route('resumes.show', $resume->id ) }}">{{ $resume->title }}</a>
                    </td>
                    <td>
                        <div 
                            class="d-flex justify-content-end gap-2 ">
                            <div>
                                <a 
                                    class="btn btn-warning "
                                    href="{{ route('resumes.edit', $resume->id ) }}"
                                    >
                                    Edit
                                </a>
                            </div>

                            <div>
                                <a 
                                    class="btn btn-danger "
                                    href="{{ route('resumes.destroy', $resume->id ) }}"
                                    >
                                    Delete
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
