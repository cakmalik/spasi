 @extends('adminlte::page')
 @section('title', 'Lengkapi data')
     @if ($mem)
         @section('content')
             <div class="container">
                 <div class="main-body">
                     <div class="alert alert-dark text-center">
                         <h5 style="font-family: 'Gill Sans', sans-serif; ">ANGGOTA SEDULUR PATI</h5>
                     </div>
                     <div class=" row gutters-sm">
                         <div class="col-md-4 mb-3">
                             <div class="card bg-danger">
                                 <div class="card-body">
                                     <div class="d-flex flex-column align-items-center text-center">
                                         @php
                                         if($mem->foto){
                                         $foto ='storage/foto/' . $mem->foto;
                                         }else{
                                         $foto = 'storage/foto/defaultfoto.png';
                                         }
                                         @endphp
                                         <img src="{{ url($foto) }}" alt="Admin" class="rounded-circle" width="120">
                                         <div class="mt-3">
                                             <div class="text-center">
                                                 <h4 class="">{{ $mem->nama_panggilan }}</h4>
                                                 <p class="text-light mb-1">{{ $mem->cabang . ', ' . $mem->angkatan }}</p>
                                             </div>
                                             <hr>
                                             <div class="">
                                                 {!! QrCode::size(250)
                                                 ->size(80)
                                                 ->color(255, 255, 255)
                                                 ->backgroundColor(255, 0, 0, 25)
                                                 ->generate('Malik') !!}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="col-md-8">
                             <div class="card mb-3">
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <h6 class="mb-0">Nama lengkap</h6>
                                         </div>
                                         <div class="col-sm-9 text-secondary">
                                             {{ $mem->nama_lengkap }}
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <h6 class="mb-0">No Hp</h6>
                                         </div>
                                         <div class="col-sm-9 text-secondary">
                                             {{ $mem->hp }}
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <h6 class="mb-0">Alamat</h6>
                                         </div>
                                         <div class="col-sm-9 text-secondary">
                                             {{ $mem->desa . ', ' . $mem->kecamatan . ', ' . $mem->kota }}
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <h6 class="mb-0">Tempat, Tgl lahir</h6>
                                         </div>
                                         <div class="col-sm-9 text-secondary">
                                             {{ $mem->tempat_lahir . ', ' . $mem->tanggal_lahir }}
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <h6 class="mb-0">Nama ayah</h6>
                                         </div>
                                         <div class="col-sm-9 text-secondary">
                                             {{ $mem->ayah }}
                                         </div>
                                     </div>
                                     <hr>
                                     <div class="row">
                                         <div class="col-sm-3">
                                             <h6 class="mb-0">Nama ibu</h6>
                                         </div>
                                         <div class="col-sm-9 text-secondary">
                                             {{ $mem->ibu }}
                                         </div>
                                     </div>
                                 </div>
                             </div>

                         </div>
                     </div>
                 </div>
             </div>
         @stop
     @else
         @section('content', 'DATA BELUM ADA, SILAHKAN LENGKAPI TERLEBIH DULU')

         @endif
