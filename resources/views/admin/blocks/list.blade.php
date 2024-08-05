@extends('admin.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Trạng thái</th>
                <th>Update</th>
                <th width="100px">#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($blocks as $key=>$item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['title']}}</td>
                    <td>
                        @if($item['active']==1)
                            <span class="btn btn-success btn-xs">Yes</span>
                        @else
                            <span class="btn btn-danger btn-xs">No</span>
                        @endif
                    </td>
                    <td>{{$item['updated_at']}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/blocks/edit/{{$item['id']}}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a class="btn btn-danger btn-sm" onclick="removeRow('.{{$item['id']}}.','{!! md5($item."tokenDeleteBlock2022") !!}')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            {{--{!! \App\Helpers\Helper::menu($menus) !!}--}}
        </tbody>
    </table>
    {{ $blocks->links() }}
@endsection