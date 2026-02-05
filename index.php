<?php
$sum = null;

$operator1= $_POST['a']??null;
$operator2= $_POST['b']??null;

if ($operator1!==null && $operator2!== null) {
    $sum = $operator1+$operator2;
}
?>

<!doctype html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calculator</title>

    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="bg-light">

    <div class="min-vh-100 d-flex align-items-center justify-content-center p-4">
        <div class="w-100" style="max-width: 420px;">
            <div class="bg-white rounded-4 shadow p-4">

                <h1 class="fs-5 fw-semibold text-dark">Calculator</h1>
                <p class="text-secondary small mt-1">
                    Nhập 2 số và bấm Calculate để xem kết quả.
                </p>

                <form class="mt-4" method="POST">

                    <div class="mb-3">
                        <label class="form-label fw-medium">Số thứ nhất</label>
                        <input type="number" name="a" required class="form-control form-control-lg rounded-3"
                            placeholder="VD: 10" />
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-medium">Số thứ hai</label>
                        <input type="number" name="b" required class="form-control form-control-lg rounded-3"
                            placeholder="VD: 20" />
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-3 fw-semibold rounded-3">
                        Calculate
                    </button>
                    <?php
                    if ($sum!==null) {
                         echo "Kết quả là: $sum";
                    }
                   
                            ?>

                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>