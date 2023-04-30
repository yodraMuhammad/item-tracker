@extends('dashboard.layouts.main')


@section('container')

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Data Pembelian</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Purchase of Items</li>
        </ol>
        <a href="" class="btn btn-primary mb-3">Tambah Data</a>
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
                                <a href="" class="badge bg-primary text-decoration-none">Edit</a>    
                                <a href="" class="badge bg-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
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
                                <a href="" class="badge bg-primary text-decoration-none">Edit</a>    
                                <a href="" class="badge bg-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
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
                                <a href="" class="badge bg-primary text-decoration-none">Edit</a>    
                                <a href="" class="badge bg-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
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
                                <a href="" class="badge bg-primary text-decoration-none">Edit</a>    
                                <a href="" class="badge bg-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
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
                                <a href="" class="badge bg-primary text-decoration-none">Edit</a>    
                                <a href="" class="badge bg-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
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
                                <a href="" class="badge bg-primary text-decoration-none">Edit</a>    
                                <a href="" class="badge bg-danger text-decoration-none">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection()