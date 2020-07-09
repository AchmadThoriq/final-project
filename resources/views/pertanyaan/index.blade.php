@extends('template.master')

@section('content')

<div class ="ml-3 mt-3">
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi Pertanyaan</th>
        <th>Tag</th>
      </tr>
    </thead>
<tbody>
@foreach($pertanyaan as $key => $pertanyaan)
      <tr>
          <td> {{ $key + 1  }}</td>
          <td> {!! $pertanyaan->judul !!}</td>
          <td> {!! $pertanyaan->isi !!}</td>
          <td> {!! $pertanyaan->tag !!}</td>
      </tr>

@endforeach
</tbody> </table>
<a href = "/pertanyaan/create" class = "btn btn-primary mb-2"> Buat Artikel </a>
</div>

@endsection

