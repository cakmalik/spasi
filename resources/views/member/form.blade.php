 @extends('adminlte::page')
 @section('title', 'Lengkapi data')

 @section('content')
     <!-- MultiStep Form -->
     <div class="container-fluid" id="grad1">
         <div class="row justify-content-center mt-0">
             <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                 <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                     <h2><strong>Lengkapi data</strong></h2>
                     <p>Isilah dengan benar</p>
                     <div class="row">
                         <div class="col-md-12 mx-0">
                             <form id="msform" method="POST" action="{{ route('member.store') }}"
                                 enctype="multipart/form-data">
                                 @csrf
                                 <ul id="progressbar">
                                     <li class="active" id="pribadi"><strong>Pribadi</strong></li>
                                     <li id="keluarga"><strong>Keluarga</strong></li>
                                     <li id="saudara"><strong>Anggota</strong></li>
                                     <li id="finish"><strong>Selesai</strong></li>
                                 </ul> <!-- fieldsets -->
                                 <fieldset>
                                     <div class="form-card">
                                         <h2 class="fs-title">Data pribadi</h2><br>
                                         <input type="number" name="nik" placeholder="NIK (Nomor induk kependudukan)" />
                                         <input type="text" name="nama_lengkap" placeholder="Nama lengkap" />
                                         <input type="text" name="nama_panggilan" placeholder="Nama panggilan" />
                                         <input type="text" name="tempat_lahir" placeholder="Tempat lahir" />
                                         <label for="tanggal_lahir">Tanggal lahir</label>
                                         <input type="date" name="tanggal_lahir" placeholder="Tanggal lahir" />
                                         <input type="text" name="alamat" placeholder="Alamat" />
                                         <input type="text" name="desa" placeholder="Dusun / Desa" />
                                         <input type="text" name="kecamatan" placeholder="Kecamatan" />
                                         <input type="text" name="kota" placeholder="Kota" />
                                         <input type="text" name="provinsi" placeholder="provinsi" />
                                         <input type="number" name="hp" placeholder="Nomor hp / wa" />
                                         <input type="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                                         <label for="foto">Foto (Jpg/png |Max : 500kb)</label>
                                         <input type="file" name="foto" id="foto">
                                     </div>
                                     <input type="button" name="next" class="next action-button" value="Next Step" />
                                 </fieldset>
                                 <fieldset>
                                     <div class="form-card">
                                         <h2 class="fs-title">Keluarga</h2>
                                         <br>
                                         <input type="text" name="ayah" placeholder="Nama ayah" />
                                         <input type="text" name="pekerjaan_ayah" placeholder="Pekerjaan ayah" />
                                         <input type="text" name="ibu" placeholder="Nama ibu" />
                                         <input type="text" name="pekerjaan_ibu" placeholder="Pekerjaan ibu" />
                                         <input type="number" name="anak_ke" placeholder="Anak ke" />
                                         <input type="number" name="jml_saudara" placeholder="Jumlah saudara" />
                                     </div>

                                     <input type="button" name="previous" class="previous action-button-previous"
                                         value="Previous" />
                                     <input type="button" name="next" class="next action-button" value="Next Step" />
                                 </fieldset>
                                 <fieldset>
                                     <div class="form-card">
                                         <h2 class="fs-title">Keanggotaan</h2>
                                         <br>
                                         @php
                                         $cbgs = DB::table('cabang')->get();
                                         @endphp
                                         <select class="list-dt" name="cabang">
                                             <option disabled selected>Cabang</option>
                                             @foreach ($cbgs as $cb)
                                                 <option value="{{ $cb->id }}">{{ $cb->cabang }}</option>
                                             @endforeach
                                         </select>
                                         <br><br>
                                         <input type="number" name="angkatan" placeholder="Tahun angkatan" />
                                         <input type="text" name="kader_dari" placeholder="kader dari" />

                                     </div>
                                     <input type="button" name="previous" class="previous action-button-previous"
                                         value="Previous" />
                                     <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                 </fieldset>
                                 <fieldset>
                                     <div class="form-card">
                                         <h2 class="fs-title text-center">Yakin ?</h2>
                                         <div class="row justify-content-center">

                                         </div>
                                         <div class="row justify-content-center">
                                             <div class="col-7 text-center">
                                                 <h5>Konfirmasi, bawa anda memang bagian dari kami</h5>
                                                 <input class="text-center" type="password" required name="codesp"
                                                     placeholder="password">
                                                 <br>

                                                 <button type="submit" class="btn btn-danger btn-flat btn-lg">KIRIM</button>
                                             </div>
                                         </div>
                                     </div>
                                 </fieldset>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 @stop
 @section('css')

     <style>
         * {
             margin: 0;
             padding: 0
         }



         #msform {
             text-align: center;
             position: relative;
             margin-top: 20px
         }

         #msform fieldset .form-card {
             background: white;
             border: 0 none;
             border-radius: 0px;
             /* box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2); */
             padding: 20px 40px 30px 40px;
             box-sizing: border-box;
             width: 94%;
             margin: 0 3% 20px 3%;
             position: relative
         }

         #msform fieldset {
             background: white;
             border: 0 none;
             border-radius: 0.5rem;
             box-sizing: border-box;
             width: 100%;
             margin: 0;
             padding-bottom: 20px;
             position: relative
         }

         #msform fieldset:not(:first-of-type) {
             display: none
         }

         #msform fieldset .form-card {
             text-align: left;
             color: #9E9E9E
         }

         #msform input,
         #msform textarea {
             padding: 0px 8px 4px 8px;
             border: none;
             border-bottom: 1px solid #ccc;
             border-radius: 0px;
             margin-bottom: 25px;
             margin-top: 2px;
             width: 100%;
             box-sizing: border-box;
             font-family: montserrat;
             color: #2C3E50;
             font-size: 16px;
             letter-spacing: 1px
         }

         #msform input:focus,
         #msform textarea:focus {
             -moz-box-shadow: none !important;
             -webkit-box-shadow: none !important;
             box-shadow: none !important;
             border: none;
             font-weight: bold;
             border-bottom: 2px solid #e74c3c;
             outline-width: 0
         }

         #msform .action-button {
             width: 100px;
             background: #e74c3c;
             font-weight: bold;
             color: white;
             border: 0 none;
             border-radius: 0px;
             cursor: pointer;
             padding: 10px 5px;
             margin: 10px 5px
         }

         #msform .action-button:hover,
         #msform .action-button:focus {
             box-shadow: 0 0 0 2px white, 0 0 0 3px #e74c3c
         }

         #msform .action-button-previous {
             width: 100px;
             background: #616161;
             font-weight: bold;
             color: white;
             border: 0 none;
             border-radius: 0px;
             cursor: pointer;
             padding: 10px 5px;
             margin: 10px 5px
         }

         #msform .action-button-previous:hover,
         #msform .action-button-previous:focus {
             box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
         }

         select.list-dt {
             border: none;
             outline: 0;
             border-bottom: 1px solid #ccc;
             padding: 2px 5px 3px 5px;
             margin: 2px
         }

         select.list-dt:focus {
             border-bottom: 2px solid #e74c3c
         }

         .card {
             z-index: 0;
             border: none;
             border-radius: 0.5rem;
             position: relative
         }

         .fs-title {
             font-size: 25px;
             color: #2C3E50;
             margin-bottom: 10px;
             font-weight: bold;
             text-align: left
         }

         #progressbar {
             margin-bottom: 30px;
             overflow: hidden;
             color: lightgrey
         }

         #progressbar .active {
             color: #000000
         }

         #progressbar li {
             list-style-type: none;
             font-size: 12px;
             width: 25%;
             float: left;
             position: relative
         }

         #progressbar #pribadi:before {
             font-family: FontAwesome;
             content: "1"
         }

         #progressbar #keluarga:before {
             font-family: FontAwesome;
             content: "2"
         }

         #progressbar #saudara:before {
             font-family: FontAwesome;
             content: "3"
         }

         #progressbar #finish:before {
             font-family: FontAwesome;
             content: "4"
         }

         #progressbar li:before {
             width: 50px;
             height: 50px;
             line-height: 45px;
             display: block;
             font-size: 18px;
             color: #ffffff;
             background: lightgray;
             border-radius: 50%;
             margin: 0 auto 10px auto;
             padding: 2px
         }

         #progressbar li:after {
             content: '';
             width: 100%;
             height: 2px;
             background: lightgray;
             position: absolute;
             left: 0;
             top: 25px;
             z-index: -1
         }

         #progressbar li.active:before,
         #progressbar li.active:after {
             background: #e74c3c
         }

         .radio-group {
             position: relative;
             margin-bottom: 25px
         }

         .radio {
             display: inline-block;
             width: 204;
             height: 104;
             border-radius: 0;
             background: lightblue;
             box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
             box-sizing: border-box;
             cursor: pointer;
             margin: 8px 2px
         }

         .radio:hover {
             box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
         }

         .radio.selected {
             box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
         }

         .fit-image {
             width: 100%;
             object-fit: cover
         }

     </style>

 @stop
 @section('js')
     {{-- <script>
         Swal.fire({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!'
         }).then((result) => {
             if (result.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Your file has been deleted.',
                     'success'
                 )
             }
         })

     </script> --}}

     <script>
         $(document).ready(function() {

             var current_fs, next_fs, previous_fs; //fieldsets
             var opacity;

             $(".next").click(function() {

                 current_fs = $(this).parent();
                 next_fs = $(this).parent().next();

                 //Add Class Active
                 $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                 //show the next fieldset
                 next_fs.show();
                 //hide the current fieldset with style
                 current_fs.animate({
                     opacity: 0
                 }, {
                     step: function(now) {
                         // for making fielset appear animation
                         opacity = 1 - now;

                         current_fs.css({
                             'display': 'none',
                             'position': 'relative'
                         });
                         next_fs.css({
                             'opacity': opacity
                         });
                     },
                     duration: 600
                 });
             });

             $(".previous").click(function() {

                 current_fs = $(this).parent();
                 previous_fs = $(this).parent().prev();

                 //Remove class active
                 $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                 //show the previous fieldset
                 previous_fs.show();

                 //hide the current fieldset with style
                 current_fs.animate({
                     opacity: 0
                 }, {
                     step: function(now) {
                         // for making fielset appear animation
                         opacity = 1 - now;

                         current_fs.css({
                             'display': 'none',
                             'position': 'relative'
                         });
                         previous_fs.css({
                             'opacity': opacity
                         });
                     },
                     duration: 600
                 });
             });

             $('.radio-group .radio').click(function() {
                 $(this).parent().find('.radio').removeClass('selected');
                 $(this).addClass('selected');
             });

             $(".submit").click(function() {
                 return false;
             })

         });

     </script>

     <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
     <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
     <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

 @stop
