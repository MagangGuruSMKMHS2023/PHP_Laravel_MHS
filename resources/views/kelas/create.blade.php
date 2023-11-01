<!DOCTYPE html>
<html>
<head>
    <title>Test Data Tambah Guru</title>
</head>
<body>
    <h1>Test Data Tambah Guru</h1>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Kelas</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/kelas/create">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="namakelas" class="col-md-4 control-label">Nama Kelas</label>

                            <div class="col-md-6">
                                <input id="namakelas" type="text" class="form-control" name="namakelas" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="walikelas" class="col-md-4 control-label">Wali Kelas</label>

                            <div class="col-md-6">
                                <input id="walikelas" type="text" class="form-control" name="walikelas" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ketuakelas" class="col-md-4 control-label">Ketua Kelas</label>

                            <div class="col-md-6">
                                <input id="ketuakelas" type="text" class="form-control" name="ketuakelas" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kursi" class="col-md-4 control-label">Jumlah Kursi</label>

                            <div class="col-md-6">
                                <input id="kursi" type="number" class="form-control" name="kursi" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="merja" class="col-md-4 control-label">Merkas</label>

                            <div class="col-md-6">
                                <input id="merja" type="text" class="form-control" name="merja" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
