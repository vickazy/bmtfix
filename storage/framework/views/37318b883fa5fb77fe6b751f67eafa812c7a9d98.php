<?php $__env->startSection('title', 'Edit Visi & Misi'); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::to('ckeditor/ckeditor.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('navigation'); ?>

<h1>
Edit Visi & Misi
</h1>
<ol class="breadcrumb">
  <li><a href="<?php echo e(route('home')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="<?php echo e(route('dashboard')); ?>">Dashboard</a></li>
  <li class="active">Edit Visi & Misi</li>
</ol>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="box">
<div class="box-header with-border">
  <h3 class="box-title">Selamat Datang Admin</h3>
  <div class="box-tools pull-right">
    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
    <i class="fa fa-minus"></i></button>
    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
    <i class="fa fa-times"></i></button>
  </div>
</div>
<div class="box-body">
  <form method="post" action="<?php echo e(route('visi-misi.edit')); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <input type="hidden" name="id" value="<?php echo e($visimisi->id); ?>">
    <div class="box-body">
      <div class="form-group">
        <label for="judul">Judul</label>
        <input class="form-control" id="title" type="text" name="title" value="<?php echo e($visimisi->title); ?>">
      </div>
      <div class="form-group">
        <label for="desk">Deskripsi</label>
        <textarea class="form-control ckeditor" name="desk" id="editor"><?php echo $visimisi->desk; ?></textarea>
      </div>
      <div class="form-group">
        <label for="desk">Visi</label>
        <textarea class="form-control ckeditor" name="visi" id="editor"><?php echo $visimisi->visi; ?></textarea>
      </div>
      <div class="form-group">
        <label for="desk">Misi</label>
        <textarea class="form-control ckeditor" name="misi" id="editor"><?php echo $visimisi->misi; ?></textarea>
      </div>
      <div class="form-group">
        <label for="foto">Gambar</label>
        <div class="row">
            <div class="col-xs-6 col-md-3">
              <a href="#" class="thumbnail">
                <img src="<?php echo e(Image::url(URL::to($imagePath . '' .$visimisi->image), 171,180,array('crop'))); ?>" alt="<?php echo e($visimisi->title); ?>">
              </a>
            </div>
          </div>
        <input type="file" name="image">
        <p class="help-block">Maksimal Ukuran foto 3 MB</p>
      </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>
<!-- /.box-body -->
<div class="box-footer">
  Keep Calm
</div>
<!-- /.box-footer-->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom-script'); ?>
<script type="text/javascript">
  CKEDITOR.editorConfig = function( config ) {
    config.height = 200;
};
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>