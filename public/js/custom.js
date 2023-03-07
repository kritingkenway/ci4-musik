


function editProduk(id) {
    var url = `/admin/produk/${id}`;
    
    $('.modalbox-body').load(url);
}
