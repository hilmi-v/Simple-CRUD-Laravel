<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
   <div class="container-fluid  px-5">
        <form action="{{ url('update/'. $data->nis) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 px-5">
                <label for="nis" class="form-label">NIS</label>
                <p class="form-control"> {{ $data->nis }}</p>
            </div>
            <div class="mb-3 px-5">
                <label for="nama" class="form-label">nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Siswa" required value="{{ $data->nama }}"">
            </div>
            <div class="mb-3 px-5">
                <label for="nama" class="form-label">kelas</label>
                <select class="form-select" name="kelas">
                    <option selected value="{{ $data->nis }}">{{ $data->nis }}</option>
                    <option value="10 pplg">10 pplg</option>
                    <option value="11 pplg">11 pplg</option>
                    <option value="10 dkv">10 dkv</option>
                    <option value="11 dkv">11 dkv</option>
                  </select>
            </div>
            <div class="mb-3 px-5">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat siswa" value="{{ $data->alamat }}">
            </div>
            <div class="mb-3 px-5 d-flex flex-row-reverse">
                <input type="submit" class="btn btn-success" value="submit">
            </div>
        </form>
   </div>
</x-layout>
