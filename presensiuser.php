<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Presensi</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: sans-serif;
            font-size: 14px;
            height: 100vh;
            margin: 50px;
            margin-bottom: 100px;
        }

        .container {
            background-color: #ffffff;
            border-radius: 30px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
            width: 768px;
            max-width: 100%;
            min-height: 700px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .card-container {
            display: flex;
            flex: 1;
        }

        .left,
        .right {
            display: flex;
            flex: 1;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .left {
            background-color: rgba(9, 42, 117, 0.815);
            color: #ffffff;
            flex-direction: column;
            text-align: center;
        }

        .right {
            background-color: #ffffff;
            flex-direction: column;
        }

        .left-container h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .left-container p {
            font-size: 1rem;
            line-height: 1.5rem;
        }

        .right-container {
            width: 100%;
            max-width: 500px;
        }

        .right-container h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        input,
        select {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
            font-size: 1rem;
        }

        button {
            border-radius: 20px;
            background-color: rgba(9, 42, 117, 0.815);
            color: #ffffff;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            width: 100%;
            border: none;
            padding: 14px 28px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }

        .radio-group{
            display: flex;
            gap: 20px;
            margin-top: 8px;
            
        }

        .radio-item {
            display: flex;
            align-items: center;
        }

        .radio-item input {
            margin-right: 5px;
        }

        .mb-3{
            margin-bottom: 20px;
            font-size: 1rem;
        }
    </style>
</head>
<?php date_default_timezone_set('Asia/Jakarta'); ?>
<body>
    <div class="container">
        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h1>Hello, <?= $_SESSION['username']?>!</h1>
                    <p>Please check your attendances</p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <h3 class="text-center">Attendance</h3>
                    <form action="input_absen.php" method="POST">
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-control" id="nim" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Name</label>
                            <input type="text" name="nama" class="form-control" placeholder="" required>
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Class</label>
                            <select class="form-select" name="kelas" aria-label="Default select example">
                                <option selected>Select Class</option>
                                <option value="SI-A">SI-A</option>
                                <option value="SI-B">SI-B</option>
                                <option value="SI-C">SI-C</option>
                                <option value="SI-D">SI-D</option>
                                <option value="SI-E">SI-E</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="matkul" class="form-label">Course</label>
                            <select class="form-select" name="matkul" aria-label="Default select example">
                                <option selected>Select Course</option>
                                <option value="Perencanaan Strategis TI">Perencanaan Strategis TI</option>
                                <option value="Rekayasa kebutuhan Perangkat Lunak">Rekayasa kebutuhan Perangkat Lunak</option>
                                <option value="Sistem Pendukung Keputusan">Sistem Pendukung Keputusan</option>
                                <option value="Keamanan Aset Informasi">Keamanan Aset Informasi</option>
                                <option value="Design & Manajemen Jaringan Komputer">Design & Manajemen Jaringan Komputer</option>
                                <option value="Metode Survey dan Pengolahan Data">Metode Survey dan Pengolahan Data</option>
                                <option value="Interaksi Manusia dan Komputer">Interaksi Manusia dan Komputer</option>
                                <option value="Kapita Selekta">Kapita Selekta</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kehadiran" class="form-label">Attendance details</label>
                            <div class="radio-group">
                                <label class="radio-item">
                                    <input type="radio" name="kehadiran" value="Hadir"> Present
                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="kehadiran" value="Sakit"> Sick
                                </label>
                                <label class="radio-item">
                                    <input type="radio" name="kehadiran" value="Izin"> Excused
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="waktu" class="form-label">Time</label>
                            <input type="text" name="waktu" class="form-control" value="<?= date('l, d-m-Y h:i:s a'); ?>" id="waktu" readonly="">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>