@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
    <center><h1>Kategori</h1></center>
    <div class="panel panel-primary">
        <div class="panel-heading">Kategori Buku
        <div class="panel-title pull-right"><a href="/admin/jenis/create">Tambah Data</a></div></div>
        <div class="panel-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Kategori</th>
                        <th colspan="3">Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($jenis as $data)
                    <tr>
                        <td>{{$data->kategori}}</td>
                        <td><a class="btn btn-warning" href="/admin/jenis/{{$data->id}}/edit">Edit</a></td>
                            <td><form action="{{route('jenis.destroy',$data->id)}}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token">
                                <input type="submit" class="btn btn-danger" value="Delete">
                                {{csrf_field()}}
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
@endsection