@extends('layout.main')
@section('content')

 <h2>Thêm sinh viên</h2>
 @if(isset($_SESSION["errors"])&&isset($_GET['msg']))
   @foreach($_SESSION["errors"] as $eror)
    <li style="color: red;" >{{$eror}}</li>
   @endforeach
 @endif
 <form action="{{route('add/')}}" method="POST">
    <label for="">Tên</label>
    <input type="text" name="name">
    <p></p>
    <label for="">Email</label>
    <input type="text" name="email"  >
    <p></p>
    <label for="">Gender</label>
    <select name="gender" id="" value=''>
        <option value="Male">Male</option>
        <option  value="Female">Female</option>
    </select>
    <p></p>
    <button type="submit" name="submit" >Sửa</button>
 </form>
@endsection
