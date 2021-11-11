<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hi-Fidelity</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <style>
      .submit {
        background-color: #3d43e1;
        color: white;
        border-color: #3d43e1;
      }
      .reset {
        background-color: #2aff17;
        border-color: #2aff17;
      }
    </style>
  </head>
  <body>
    <div class="container-sm">
      <div class="border border-secondary justify-content-center m-5 py-3 px-5">
        <p>Muhammad Naufal Kusumajaya</p>
        <p>Jaya</p>
        <p>5026201121</p>
        <h1 class="h4 text-center mb-5">Form Input Peminjaman Buku</h1>
        <div class="container">
          <form
            onsubmit="return validate()"
            action="https://i.pinimg.com/originals/b5/fc/ac/b5fcac730fe7eb00f2d7aebe63525d07.png"
            id="form"
          >
            <div class="row mb-4">
              <div class="col-5">
                <label for="jb" class="form-label h4">Judul Buku</label>
              </div>
              <div class="col">
                <p class="h4">:</p>
              </div>
              <div class="col-5">
                <input type="text" class="form-control" id="jb" />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-5">
                <label for="nb" class="form-label h4">No Buku</label>
              </div>
              <div class="col">
                <p class="h4">:</p>
              </div>
              <div class="col-5">
                <input type="number" class="form-control" id="nb" />
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-5">
                <label for="jp" class="form-label h4">Jenis Peminjaman</label>
              </div>
              <div class="col">
                <p class="h4">:</p>
              </div>
              <div class="col-5">
                <select
                  class="form-select"
                  aria-label="Default select example"
                  id="jp"
                >
                  <option selected>Select</option>
                  <option value="biasa">Biasa</option>
                  <option value="kilat">Kilat</option>
                  <option value="lama">lama</option>
                </select>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-5">
                <label for="tp" class="form-label h4">Tanggal Peminjaman</label>
              </div>
              <div class="col">
                <p class="h4">:</p>
              </div>
              <div class="col-5">
                <input type="date" class="form-control" id="tp" />
              </div>
            </div>
            <div class="row my-5">
              <div class="col text-center">
                <button type="submit" class="submit px-5 h5">Simpan</button>
              </div>
              <div class="col text-center">
                <button type="reset" class="reset px-5 h5">Reset</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
      integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
      crossorigin="anonymous"
    ></script>
    <script>
      function validate() {
        const jb = document.getElementById("jb");
        const nb = document.getElementById("nb");
        const jp = document.getElementById("jp");
        const tp = document.getElementById("tp");

        if (
          jb.value.trim() == "" ||
          jb.value.trim().length < 10 ||
          nb.value.trim().length != 5 ||
          nb.value.trim() == "" ||
          tp.value.trim() == "" ||
          jp.value == "Select"
        ) {
          alert("Isian salah");
          return false;
        } else {
          return true;
        }
      }
    </script>
  </body>
</html>
