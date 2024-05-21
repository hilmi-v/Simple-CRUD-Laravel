<x-layout class="mb-5 pb-5">
    <x-slot:title>{{ $title }}</x-slot:title>

    <button class="btn btn-primary my-4"><a class="text-light" href="{{url('/create')}}">New +</a></button>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>no</th>
                <th>nis</th>
                <th>nama</th>
                <th>kelas</th>
                <th>alamat</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $datas->firstItem() ?>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->kelas }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>
                        <button class="btn btn-warning mx-2 my-1"><a class="text-light text-decoration-none" href="{{ url('edit/'. $data->nis) }}">edit</a></button>
                        <form class="d-inline" action="{{ url('delete/'. $data->nis) }}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mx-2 my-1" value="delete" onclick="return confirm('delete data dengan nis : {{ $data->nis }}')">delete</button>
                        </form>
                    </td>
                </tr>
                @php
                $i++
                @endphp
            @endforeach
        </tbody>
    </table>

{{ $datas->links() }}

</x-layout>
