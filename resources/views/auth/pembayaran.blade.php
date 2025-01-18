<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <!-- Login Form -->
            <form id="payment-form" method="POST" action="#" class="form active">
                @csrf

                <h2>Pembayaran</h2>
                <p>Lakukan Pembayaran untuk menyelesaikan pendaftaran.</p>
                <p> Rekening Tujuan </p>
                <ul>
                    <li>
                        Bank: Bank Mega
                    </li>
                    <li>
                        Nomor: 011840011000573
                    </li>
                    <li>
                        Nama: PT Nasco International
                    </li>
                </ul>
                <ul>
                    <li>
                        Bank: BCA
                    </li>
                    <li>
                        Nomor: 6870731378
                    </li>
                    <li>
                        Nama: Julia (komisaris)
                    </li>
                </ul>
                <p>
                    Tambahkan tiga angka terakhir nomor telepon Anda pada jumlah yang dibayar untuk memudahkan kami mengenalinya. Misalnya, nomor telepon Anda 0812-131-5100 dan Anda ingin membayar Rp 199.000, maka transferlah Rp 199.100.
                </p>
                <p>
                    Upload Pembayaran anda kesini
                </p>
                <div class="input-group">
                    <label for="pembayaran">Pembayaran</label>
                    <input type="file" id="login-email" name="butibayar" placeholder="Bukti bayar" required>
                </div>
                <div class="actions">
                    <button type="submit" class="btn">Bayar</button>
                </div>
                <p class="switch-form">
                    Don't have an account? <a href="#" id="show-selection">Sign Up</a>
                </p>
            </form>
        </div>
    </div>

    <script src="{{ asset('./js/jquery-3.3.1.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const paymentForm = document.getElementById('payment-form')
        })

        $('#payment-form').submit(function(e){
        e.preventDefault();
        console.log('submit');
        const value = $('#payment-form').serialize();

        $.ajax({
            url: '/api/login',
            type: 'POST',
            data: value,
            success: function(response) {
                console.log(response);
                if (response.status) {
                    window.location.href = '/';
                } else {
                    console.log('error',response)
                    showAlert(response?.message, 'warning');
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
            }
        })
      });
    </script>
</body>
</html>