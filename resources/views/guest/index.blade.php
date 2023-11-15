
@extends('layouts.main')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama tamu</th>
      <th scope="col">tanggal checkin</th>
      <th scope="col">tanggal checkout</th>
      <th scope="col">petugas checkin</th>
      <th scope="col">petugas checkout</th>
      <th scope="col">status</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($guests as $guest)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>{{-- di isi dengan nomor urut --}}
      <td>{{$guest->nama_tamu}}</td>{{-- di isi dengan nama tamu --}}
      <td>{{$guest->tanggal_checkin}}</td>{{-- di isi dengan tanggal checkin --}}
      <td>
      @if  ($guest->tanggal_checkout != null)
        {{$guest->tanggal_checkout}}
         {{-- jika tanggal checkout tidak kosong maka tampilan checkout --}}
      @else
        <a href="/checkout" class="btn btn-sm
        btn-success">checkout</a>
        {{--jika tanggal checkout kosong --}}
      @endif
      </td>{{-- di isi dengan tanggal checkout --}}
      <td></td>{{-- di isi dengan petugas checkin --}}
      <td></td>{{-- di isi dengan petugas checkout --}}
      <td>
      @if ($guest->tanggal_checkout != null)
        kunjungan selesai
         {{-- jika tanggal checkout tidak kosong maka tampilan checkout --}}
      @else
        tamu sedang berkunjung
        {{--jika tanggal checkout kosong --}}
      @endif
      </td>{{-- di isi dengan status tamu --}}
      <td>
        <a href="/detail" class="btn btn-sm btn-outline-success">details</a>
      </td>{{-- di isi dengan button detail/tombol detail --}}
    </tr>
    @endforeach
  </tbody>
</table>
@endsection