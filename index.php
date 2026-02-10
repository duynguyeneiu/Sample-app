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
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="clearForm()">
                    Clear
                </button>


                <form class="mt-4" method="POST" action="calculate.php">
                    <input type="reset">
                    <div class="mb-3">
                        <label class="form-label fw-medium">Số thứ nhất</label>
                        <input type="number" name="operand1" required
                            class="operA form-control form-control-lg rounded-3" value=<?= $operand1 ?> />
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-medium">Phép tính</label>
                        <select name="operator" class="form-select form-select-lg rounded-3">
                            <option value="+">Cộng (+)</option>
                            <option value="-">Trừ (-)</option>
                            <option value="*">Nhân (*)</option>
                            <option value="/">Chia (÷)</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-medium">Số thứ hai</label>
                        <input type="number" name="operand2" required
                            class="operB form-control form-control-lg rounded-3" value=<?= $operand2 ?> />
                    </div>

                    <button type="submit" class="btn btn-dark w-100 py-3 fw-semibold rounded-3">
                        Calculate
                    </button>

                    <h3>Result:
                        <?= $result ?? 0 ?>
                    </h3>


                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function clearForm() {
            document.querySelector('form').reset();
            document.querySelector('.operA').setAttribute('value', "")
            document.querySelector('.operB').setAttribute('value', "")

            document.querySelector('h3').innerText = 'Result: 0';
        }
    </script>
</body>

</html>