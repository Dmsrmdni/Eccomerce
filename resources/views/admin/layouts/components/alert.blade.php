@if ($message = Session::get('success'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-right',
            icon: 'success',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true
        })
    </script>
@endif

@if ($message = Session::get('error'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-right',
            icon: 'success',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true
        })
    </script>
@endif

@if ($message = Session::get('berhasil'))
    <script>
        Swal.fire({
            title: '{{ $message }}',
            icon: 'success',
            showCancelButton: true,
            showConfirmButton: false,
            cancelButtonText: 'Oke',
        })
    </script>
@endif

@if ($message = Session::get('warning'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-right',
            icon: 'warning',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true
        })
    </script>
@endif

@if ($message = Session::get('info'))
    <script>
        Swal.fire({
            toast: true,
            position: 'top-right',
            icon: 'info',
            title: '{{ $message }}',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true
        })
    </script>
@endif

@if ($message = Session::get('gagal'))
    <script>
        Swal.fire({
            title: '{{ $message }}',
            icon: 'error',
            showCancelButton: true,
            showConfirmButton: false,
            cancelButtonColor: '#d33',
            cancelButtonText: 'Oke',
        })
    </script>
@endif
