@extends ('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <h2>FORM DATA DIRI</h2>
    <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputNama">Nama</label>
      <input type="nama" class="form-control" id="inputNama">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail">Email</label>
      <input type="email" class="form-control" id="inputEmail">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Alamat</label>
    <input type="text" class="form-control" id="inputAlamat" placeholder="1234 Main St">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputKota">Kota</label>
      <input type="text" class="form-control" id="inputKota">
    </div>
    <div class="form-group col-md-4">
      <label for="inputNegara">Negara</label>
      <select id="inputNegara" class="form-control">
        <option selected>Pilih...</option>
        <option>Indonesia</option>
        <option>Jerman</option>
        <option>Inggris</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Dokumen Penting</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
    <h2>DETAIL TRANSPORTASI</h2>
    <form>
  <div class="form-row">
    <div class="col">
    <label for="inputKota">Kota Asal</label>
      <input type="text" class="form-control" placeholder="Kota Asal">
      <select id="inputNegara" class="form-control">
        <option selected>Pilih...</option>
        <option>Indonesia</option>
        <option>Jerman</option>
        <option>Inggris</option>
      </select>
    </div>
    <div class="col">
    <label for="inputKota">Kota Tujuan</label>
      <input type="text" class="form-control" placeholder="Kota Tujuan">
      <select id="inputNegara" class="form-control">
        <option selected>Pilih...</option>
        <option>Indonesia</option>
        <option>Jerman</option>
        <option>Inggris</option>
      </select>
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>
</form>
    </div>
</div>
@endsection