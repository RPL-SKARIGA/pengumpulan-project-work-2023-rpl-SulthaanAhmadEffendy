<!-- Bootstrap core JavaScript -->
<script src="{{ asset('template-be/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('template-be/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript -->
<script src="{{ asset('template-be/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Page level plugins -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script> 

<!-- Custom scripts for all pages -->
<script src="{{ asset('template-be/js/sb-admin-2.min.js') }}"></script>

@include('sweetalert::alert')


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        
        deleteButtons.forEach(button => {
            button.addEventListener('click', function() {
                const itemId = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Data akan dihapus secara permanen!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const form = document.getElementById('deleteForm' + itemId);
                        form.submit();
                    }
                });
            });
        });
    });
</script>
