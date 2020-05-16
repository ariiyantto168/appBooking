<section class="content-header">
    <h1>Fasilitas Externall</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-cubes"></i>Fasilitas Externall</li>
    </ol>
</section>

<section class="content">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('external/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
            {{-- <a href="{{url('categories/trash')}}" class="btn btn-box-tool" title="Restore"><i class="fa fa-undo"></i> Restore</a> --}}
        </div>
     </div>
</div>
<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($external as $number => $externals)
                <tr>
                    <td>{{$number+1}}</td>
                    <td>{{$externals->name}}</td>
                    <td>
                <center>
                @if ($externals->active)
                     <span class="label label-success">Actice</span>
                 @else
                    <span class="label label-danger">Inactive</span>
                @endif
                 </center>
                </td>

                <td>
                    <center>
                    <a href="{{url('/external/update/'.$externals->idexternal)}}"><i class="fa fa-pencil-square-o"></i></a>
                    </center>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>     