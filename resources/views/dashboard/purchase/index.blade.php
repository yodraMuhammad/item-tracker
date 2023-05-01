@extends('dashboard.layouts.main')


@section('container')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Pembelian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Purchase of Items</li>
        </ol>
        {{-- Add Button --}}
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addItem"><i class="fa-solid fa-plus"></i> Tambah Data</button>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Tanggal Beli</th>
                            <th>Platform Beli</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Koin</th>
                            <th>Cahsback</th>
                            <th>Total</th>
                            <th>Metode Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Tanggal Beli</th>
                            <th>Platform Beli</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Koin</th>
                            <th>Cahsback</th>
                            <th>Total</th>
                            <th>Metode Pembayaran</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Revlon Loose Powder</td>
                            <td>2011/04/25</td>
                            <td>Shopee</td>
                            <td>1</td>
                            <td>Rp320,800</td>
                            <td>Rp0</td>
                            <td>Rp0</td>
                            <td>Rp320,800</td>
                            <td>Dana</td>
                            <td>Lunas</td>
                            <td>
                                <a href="" class="btn btn-primary text-decoration-none" title="Edit"><i class="fas fa-edit"></i></a>    
                                <a href="" class="btn btn-danger text-decoration-none" title="Delete"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>Revlon Loose Powder</td>
                            <td>2011/04/25</td>
                            <td>Shopee</td>
                            <td>1</td>
                            <td>Rp320,800</td>
                            <td>Rp0</td>
                            <td>Rp0</td>
                            <td>Rp320,800</td>
                            <td>Dana</td>
                            <td>Lunas</td>
                            <td>
                                <a href="" class="btn btn-primary text-decoration-none"><i class="fas fa-edit"></i></a>    
                                <a href="" class="btn btn-danger text-decoration-none"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>Revlon Loose Powder</td>
                            <td>2011/04/25</td>
                            <td>Shopee</td>
                            <td>1</td>
                            <td>Rp320,800</td>
                            <td>Rp0</td>
                            <td>Rp0</td>
                            <td>Rp320,800</td>
                            <td>Dana</td>
                            <td>Lunas</td>
                            <td>
                                <a href="" class="btn btn-primary text-decoration-none"><i class="fas fa-edit"></i></a>    
                                <a href="" class="btn btn-danger text-decoration-none"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>Revlon Loose Powder</td>
                            <td>2011/04/25</td>
                            <td>Shopee</td>
                            <td>1</td>
                            <td>Rp320,800</td>
                            <td>Rp0</td>
                            <td>Rp0</td>
                            <td>Rp320,800</td>
                            <td>Dana</td>
                            <td>Lunas</td>
                            <td>
                                <a href="" class="btn btn-primary text-decoration-none"><i class="fas fa-edit"></i></a>    
                                <a href="" class="btn btn-danger text-decoration-none"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>Revlon Loose Powder</td>
                            <td>2011/04/25</td>
                            <td>Shopee</td>
                            <td>1</td>
                            <td>Rp320,800</td>
                            <td>Rp0</td>
                            <td>Rp0</td>
                            <td>Rp320,800</td>
                            <td>Dana</td>
                            <td>Lunas</td>
                            <td>
                                <a href="" class="btn btn-primary text-decoration-none"><i class="fas fa-edit"></i></a>    
                                <a href="" class="btn btn-danger text-decoration-none"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- Modal -->
<div class="modal fade modal-lg" id="addItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Purchase Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="/" method="POST">
            <div id="emailHelp" class="form-text mb-3">We'll never share your email with anyone else.</div>
            @csrf
            {{-- Tanggal Pembelian --}}
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal Pembelian <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="date" class="form-control" id="inputEmail3">
                </div>
            </div>

            {{-- Kode Intem --}}
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Kode Item <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-select" list="datalistOptions" id="inputEmail3" placeholder="123456.." >
                  <datalist class="" id="datalistOptions">
                    <option value="San Francisco">
                    <option value="New York">
                    <option value="Seattle">
                    <option value="Los Angeles">
                    <option value="Chicago">
                </datalist>
                </div>
            </div>

            {{-- Nama Item --}}
            <div class=" row mb-3">
                <label for="nama" class="col-sm-3 col-form-label">Nama Item <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" name="nama" value="{{old('nama')}}" placeholder="Wardah Sunblok">
                </div>
            </div>

            {{-- Merek --}}
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Merek <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Wardah">
                </div>
            </div>

            {{-- Jenis --}}
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Kategori <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Lipstik</option>
                        <option>Makeup</option>
                        <option>Liptin</option>
                    </select>
                </div>
            </div>

            {{-- Deskripsi Produk --}}
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Deskripsi</label>
                <div class="col-sm-9">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            </div>
            
            {{-- Platform --}}
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-3 col-form-label">Platform Pembelian <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Shopee</option>
                        <option>Lazada</option>
                        <option>Tokopedia</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="inputEmail3" placeholder="1" value="1">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Harga Beli <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="inputEmail3" placeholder="10000">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Total <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="inputEmail3" placeholder="10000">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Cashback</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="inputEmail3" placeholder="5000">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Harga Jual</label>
                <div class="col-sm-9">
                  <input type="number" class="form-control" id="inputEmail3" placeholder="10000">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Metode Pembayan <span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <select class="form-select" id="validationDefault04" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Dana</option>
                        <option>Ovo</option>
                        <option>BCA</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Keterangan</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Lunas">
                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

@endsection()