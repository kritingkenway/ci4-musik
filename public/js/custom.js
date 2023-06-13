

function editProduk(id) {
    var url = `/admin/produk/${id}`;
    
    $('.modalbox-body').load(url);
}

function detailTransaksi(id) {
    var url = `/admin/transaksi/${id}`;
    
    $('.modalbox-body').load(url);
}

