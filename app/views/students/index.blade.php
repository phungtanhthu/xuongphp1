@extends('layout.main')
@section('content')
<table border="1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>

    </thead>
    <tbody>
         @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->gender }}</td>
                <th>
                    <a href="">Sửa</a>
                    <a href="{{route('xoa/').$student->id}}" onclick="confirm('Ban co muon xoa khong')">Xoa</a>
                </th>
            </tr>
        @endforeach
    </tbody>

</table>
@endsection
