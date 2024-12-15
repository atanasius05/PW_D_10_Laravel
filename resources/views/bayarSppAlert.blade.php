<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar SPP</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            overflow: hidden; 
        }
    </style>
</head>
<body>
    <div class="modal fade" id="loginAlertModal" tabindex="-1" aria-labelledby="loginAlertLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginAlertLabel">Akses Ditolak</h5>
                </div>
                <div class="modal-body">
                    Silakan login untuk mengakses halaman Bayar SPP.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="closeButton">Tutup</button>
                    <a href="{{ url('loginpage') }}" class="btn btn-primary">Login Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const isLoggedIn = false; 

            if (!isLoggedIn) {
                const loginAlertModal = new bootstrap.Modal(document.getElementById('loginAlertModal'));
                loginAlertModal.show();
            }

            document.getElementById('closeButton').addEventListener('click', function() {
                window.location.href = "{{ url('homepage') }}"; 
            });
        });
    </script>

</body>
</html>
