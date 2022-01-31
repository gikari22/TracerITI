<!doctype html>
<html lang="en">
  <head>
    <title>Register Tracer</title>
  
  <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />

  </head>
  <body">
  

<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo"
                class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;"
              />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Tracer Registration</h3>

                <form method="post" action="/register/save">
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="nama"/>
                        <label class="form-label" for="form3Example1m">Nama</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="nrp"/>
                        <label class="form-label" for="form3Example1m">NRP</label>
                      </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example8" class="form-control form-control-lg" name="alamat"/>
                    <label class="form-label" for="form3Example8">Address</label>
                  </div>
                  <div class="col-md-6 mb-4">
                     <div class="form-outline mb-4">
                      <input type="number" id="form3Example8" class="form-control form-control-lg" name="zip"/>
                      <label class="form-label" for="form3Example8">Kode Pos</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                     <div class="form-outline mb-4">
                      <input type="number" id="form3Example8" class="form-control form-control-lg" name="year" />
                      <label class="form-label" for="form3Example8">Tahun Akademik</label>
                    </div>
                  </div>

                  <div class="row">
                    <div>

                      <select class="select form-control form-control-lg" name="prodi">
                        <option value="2">Informatika</option>
                        <option value="3">Teknik ELektro</option>
                        <option value="4">Teknik Mesin</option>
                        <option value="4">Teknik Industri</option>
                        <option value="4">Teknik Kimia</option>
                        <option value="4">Teknik Sipil</option>
                        <option value="4">Arsitektur</option>
                        <option value="4">Perencanaan Wilayah dan Kota</option>
                        <option value="4">Manajemen</option>
                        <option value="4">Teknik Mesin Otomotif</option>
                      </select>
                      <label class="form-label" for="form3Example8">Program Studi</label>

                    </div>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example97" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="form3Example97">Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example97" class="form-control form-control-lg" name="pass" />
                    <label class="form-label" for="form3Example97">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example97" class="form-control form-control-lg" name="confpass" />
                    <label class="form-label" for="form3Example97">Konfirmasi Password</label>
                  </div>

                  <div class="d-flex justify-content-end pt-3">
                    <button type="button" class="btn btn-light btn-lg">Reset all</button>
                    <input type="submit" class="btn btn-warning btn-lg ms-2" name="submit" value="Daftar">
                  </div>
                </form>
            

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>

