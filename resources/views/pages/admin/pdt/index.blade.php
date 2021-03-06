@extends('layouts.admin')

<!-- Set Title -->
@section('title', 'Pendeta')

@section('content')
<header class="bg-white shadow">
    <div class="flex max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h1 class="flex-grow text-3xl font-bold text-gray-900">
            List Pendeta
        </h1>
        <a href="/admin/addPdt" class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded flex w-15">Tambah Pendeta</a>
    </div>
</header>
<!-- table -->
<div class="pb-16 pt-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8  lg:flex-row flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200" id="table-pdt">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tempat / Tgl Lahir</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Alamat</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">No. HP</th>
                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200" style="text-align: center;">
                        @foreach($pdt as $dataPdt)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$loop->index+1}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$dataPdt->nama}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$dataPdt->tempat}} , {{ $dataPdt->tgl_lahir }}
                            </td>
                            <td class="px-6 py-4 whitespace-wrap">
                                {{$dataPdt->alamat}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$dataPdt->email}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                {{$dataPdt->no_hp}}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                <a style="align-self: center; margin-right:1rem" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" href="/admin/pdt/edit/{{$dataPdt->id}}" data-id='{{$dataPdt->id}}'>
                                    Edit
                                </a>
                                <a id="hapus_pdt" style="align-self: center;" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded hapus" href="#!" data-id="{{$dataPdt->id}}">Hapus</a>

                            </td>
                        </tr>
                        @endforeach

                        <!-- More items... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

@push('after-style')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    .btn-outline-header-2-3 {
        border: 1px solid #707092;
        color: #707092;
    }

    .btn-outline-header-2-3:hover {
        border: 1px solid #ffffff;
        color: #ffffff;
    }

    .btn-outline-header-2-3:hover div path {
        fill: #ffffff;
    }

    .box-shadow-header-2-3:hover {
        --tw-shadow: inset 0 0px 25px 0 rgba(20, 20, 50, 0.7);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
            var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .navigation-header-2-3 a:hover,

    .active::after {
        font-weight: 600;
    }

    .navigation-header-2-3 a:hover {
        color: #e7e7e8;
    }

    .navigation-header-2-3 {
        color: #707092;
    }

    .bg-screen-header-2-3 {
        background-color: #707092;
    }

    .bg-popup-header-2-3 {
        background-color: #141432;
    }
</style>
@endpush
@push('after-script')
<script>
    $(document).ready(function() {
        $('#table-pdt').DataTable();
    });
    $(document).on('click', 'a#hapus_pdt', function() {
        // console.log($(this).data('id'));
        let data = {
            '_token': '{{csrf_token()}}',
        }
        swal({
                title: "Yakin Hapus Data?",
                text: "Data tidak akan kembali",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.post('/admin/pdt/delete/' + $(this).data('id'), data,
                        function(respon) {
                            window.location.reload()
                        })
                    swal("Data Telah di Hapus!", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi di hapus");
                }
            });

    });
</script>
@endpush