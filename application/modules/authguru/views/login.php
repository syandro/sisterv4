<!-- Login Baru -->
<div class="login-box">
  <div class="login-logo">
    <a href="<?= base_url(); ?>"><b>Welcome</b> Back!</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Please user your NIP and Password</p>

    <?= $this->session->flashdata('message'); ?>

    <form class="user" method="post" action="<?= base_url('authguru'); ?>">
      <div class="form-group has-feedback <?= form_error('nip') ? 'has-error' : '' ?>">
        <input type="nip" name="nip" value="<?= set_value('nip'); ?>" class="form-control" placeholder="nip">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?= form_error('nip', '<div class="text-danger">', '</div>') ?>
      </div>
      <div class="form-group has-feedback <?= form_error('password') ? 'has-error' : '' ?>">
        <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password', '<div class="text-danger">', '</div>') ?>
      </div>
      <div class="row">
      <div class="col-xs-8">
      Forgot Password?<br>
      Please contact our School
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->