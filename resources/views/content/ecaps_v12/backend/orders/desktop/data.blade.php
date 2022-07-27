@extends('template.'.$template.'.datatable')

@section('title', $panel_name)

@section('content')  

    <div class="ecaps-page-content">
        <!-- Top Header Area -->
        <x-ecaps_v120.top-header-area />

        <!-- Main Content Area -->
        <div class="main-content">
            <div class="main-container container-fluid">
                <div class="row">
                    <div class="col-lg-12 mb-30">
                        <div class="card">
                            <div class="card-header"> 
                                <div class="row">
                                    <div class="col-6">
                                        Data {{$panel_name}} 
                                    </div>
                                    <div class="col-6 text-right"> 
                                    </div>

                                </div>
                                 
                            </div>
                            <div class="card-body">

                                <!-- Table -->
                                <div class="table-responsive mt-3">
                                    <table id="example" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">
                                                    Tanggal
                                                </th>
                                                <th scope="col">
                                                    AWB 
                                                </th>
                                                <th scope="col">
                                                    Pengirim
                                                </th>  
                                                <th scope="col">
                                                    Penerima
                                                </th>   
                                                <th scope="col">
                                                    Status
                                                </th> 
                                                <th scope="col"> 
                                                </th> 
                                            </tr>
                                        </thead>
                                        <tbody> 
                                            @forelse ($data as $row)
                                                <tr>
                                                    <td>
                                                        {{ date_format($row->created_at,"Y-m-d") }}
                                                    </td>
                                                    <td>
                                                        {{$row->no_job}}
                                                    </td>
                                                    <td>  
                                                        {{$row->nama_pengirim}}<br/>
                                                        {{$row->alamat_pengirim}}<br/>
                                                        {{$row->provinsi_pengirim}}<br/>
                                                        {{$row->kota_pengirim}}<br/>
                                                        {{$row->kecamatan_pengirim}}<br/>
                                                        {{$row->kelurahan_pengirim}}
                                                    </td>
                                                    <td>
                                                        {{$row->nama_penerima}}<br/>
                                                        {{$row->alamat_penerima}}<br/>
                                                        {{$row->provinsi_penerima}}<br/>
                                                        {{$row->kota_penerima}}<br/>
                                                        {{$row->kecamatan_penerima}}<br/>
                                                        {{$row->kelurahan_penerima}}
                                                    </td>  
                                                    <td>
                                                        @if($row->is_approval == 2)
                                                            Disetujui oleh {{$row->admin->name}}
                                                        @elseif($row->is_approval == 3)
                                                            Ditolak
                                                        @endif
                                                    </td>
                                                    <td> 
                                                        @if($row->is_approval == 1)
                                                            <div class="dropdown d-flex justify-content-center">	
                                                                <div class="btn-group  btn-group-sm  pull-right" role="group" aria-label="Basic example"> 
                                                                    <a type="button" href="{{ route('Orders.approve', $row->id) }}" class="btn btn-outline-primary">
                                                                        Setuju
                                                                    </a>
                                                                    <a type="button" href="{{ route('Orders.cancel', $row->id) }}" class="btn btn-danger">
                                                                        Tolak
                                                                    </a>
                                                                </div>
                                                            </div>  
                                                        @elseif($row->is_approval == 2)
                                                            <div class="dropdown d-flex justify-content-center">	
                                                                <div class="btn-group  btn-group-sm  pull-right" role="group" aria-label="Basic example"> 
                                                                    <a type="button" href="{{ route('Orders.approve', $row->id) }}" class="btn btn-outline-primary">
                                                                        Selesai
                                                                    </a> 
                                                                </div>
                                                            </div> 

                                                        @endif 
                                                    </td>
                                                </tr> 
                                            @empty
                                                <tr class="text-center"> 
                                                    <x-message.tr-no-record-data col="7" />   
                                                </tr>
                                            @endforelse

                                        </tbody> 
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>

@endsection