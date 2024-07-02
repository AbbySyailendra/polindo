<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
    crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    // GLOBAL SETUP 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // DAFTAR FREE 
    $('body').on('click', '.daftar-freetest', function(e) {
        //e.preventDefault();
        //$('#exampleModal').modal('show');
        $('.daftar-freetest').click(function() {
            createFreetest();
        });
    });

    // DAFTAR BERBAYAR 
    $('body').on('click', '.daftar-berbayar', function(e) {
        e.preventDefault();
        $('#exampleModal').modal('show');
        $('.tombol-simpan').click(function() {
            simpan();
        });
    });

    function createFreetest() {
    // Ambil user_id dari elemen yang menyimpannya, misalnya input hidden
    var user_id = $('#user_id').val();

    $.ajax({
        url: 'pesertaAjax', // URL untuk endpoint create
        type: 'POST', // Metode HTTP POST untuk create
        data: {
            user_id: user_id  // Hanya mengirimkan user_id
        },
        success: function(response) {
            if (response.errors) {
                console.log(response.errors);
                $('.alert-danger').removeClass('d-none');
                $('.alert-danger').html("<ul>");
                $.each(response.errors, function(key, value) {
                    $('.alert-danger').find('ul').append("<li>" + value + "</li>");
                });
                $('.alert-danger').append("</ul>");
            } else {
                // Tampilkan alert dengan user_id
                alert('User ID: ' + user_id);
            }
        }
    });
}

</script>