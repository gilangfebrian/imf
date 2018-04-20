<div class="table-responsive">
<table class="table datatable table-striped table-condensed table-middle">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Diklat</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Penyelenggara</th>
            <th>Status</th>
            <th class="ac">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($d_trainings as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>
                {{ $data->diklat }}
            </td>
            <td>
                {{ $data->tanggal }}
            </td>
            <td>
                {{ $data->lokasi }}
            </td>
            <td>
                {{ $data->penyelenggara }}
            </td>
            <td> 
                {{ $data->status }}
            </td>
            <td class="ac">
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="icon icon-pencil"></i></button>
                    <button type="button" class="btn btn-default btn-sm btn-delete"><i class="icon icon-trash"></i></button>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>