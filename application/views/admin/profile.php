<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-body">
        <form method="post">
          <h3>Edit Profil</h3>
          <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Masukan username " value="<?php echo $this->session->userdata['username']; ?>" required>
              </div>
            </div>
            <div class="col-md-6 pl-1">
              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukan password baru" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="fullname" class="form-control" placeholder="Masukan nama lengkap anda" value="<?php echo $this->session->userdata['fullname']; ?>" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan email anda" value="<?php echo $this->session->userdata['email']; ?>" required>
              </div>
            </div>
          </div>

          <div class="button-container">
            <button type="submit" name="updateAccount" value="updateAccount" class="btn btn-primary">Simpan Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card card-user">
      <div class="image">
        <img src="<?php echo base_url('./assets/upload/'.$this->session->userdata['display_picture'])?>" style="width: auto !important;height: auto !important;max-width: 100%;">
      </div>
      <div class="card-body">
        <center>
          <div class="author">
          </div>
          <p class="description text-center"><?php echo $this->session->userdata['email']?></p>
          <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Foto Profil</button>
        </center>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form  method="post" enctype="multipart/form-data">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Foto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Silahkan upload foto anda dengan ukuran file maksimal 200kb</p>
          <div class="md-form">
            <div class="file-field">
              <div class="btn btn-primary btn-sm float-left">
                <span>Choose file</span>
                <input type="file" name="fileUpload">
              </div>
            </div>
          </div>
        </div>

        <div class="modal-footer modal-danger">
          <button type="submit" class="btn btn-warning" name="uploadFile" value="uploadFile">Upload</button>
          <button type="submit" class="btn btn-danger" name="deleteFile" value="deleteFile">Hapus Foto</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
        </div>
      </div>
    </form>
  </div>
</div>
