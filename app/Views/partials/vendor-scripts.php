<!-- JAVASCRIPT -->
<script src="<?=base_url('/assets/libs/jquery/jquery.min.js')?>"></script>
<script src="<?=base_url('/assets/libs/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<script src="<?=base_url('/assets/libs/metismenu/metisMenu.min.js')?>"></script>
<script src="<?=base_url('/assets/libs/simplebar/simplebar.min.js')?>"></script>
<script src="<?=base_url('/assets/libs/node-waves/waves.min.js')?>"></script>
<script src="<?=base_url('/assets/libs/waypoints/lib/jquery.waypoints.min.js')?>"></script>
<script src="<?=base_url('/assets/libs/jquery.counterup/jquery.counterup.min.js')?>"></script>
<script src="<?=base_url('/assets/libs/sweetalert2/sweetalert2.min.js')?>"></script>
<script src="<?=base_url('/assets/js/pages/sweet-alerts.init.js')?>"></script>
<script src="<?=base_url('/assets/js/pages/select2.min.js')?>"></script>
<script>
$(document).ready(function() {
    $('.deleteBtn').click(function() {
        var Id = $(this).data('id');
        var Name = $(this).data('name');
        var url = $(this).data('url');
        Swal.fire({
            title: 'Apakah Kamu yakin?',
            text: "Untuk Mendelete data ini (" + Name + "). Jika Dilakukan Tidak Dapat di Kembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#34c38f',
            cancelButtonColor: '#f46a6a',
            confirmButtonText: 'Yes, delete it!'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'POST',
                    url: '/'+ url +'/delete/' + Id,
                    success: function(response) {
                        Swal.fire('Deleted!', 'The record has been deleted.', 'success')
                        .then(function() {
                                location.reload();
                            });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire('Error!', 'An error occurred while deleting the record.', 'error');
                    }
                });
            }
        });
    });
});
function showErrorAlert(errors) {
        let errorString = '<ul>';
        for (let key in errors) {
            errorString += '<li>' + errors[key] + '</li>';
        }
        errorString += '</ul>';

        Swal.fire({
            title: 'Validation Errors',
            html: errorString,
            icon: 'error'
        });
    }
    function showSuccessAlert(message) {
        Swal.fire({
            title: 'Success',
            text: message,
            icon: 'success'
        });
    }
</script>
