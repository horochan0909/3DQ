<?php echo csrf_field(); ?>
<div class="md-form">
    <label>タイトル</label>
    <input type="text" name="title" class="form-control" required value="<?php echo e($article->title ?? old('title')); ?>">

</div>
<div class="form-group">
    <label></label>
    <textarea name="body" required class="form-control" rows="16"
        placeholder="本文"><?php echo e($article->body ?? old('body')); ?></textarea>
</div>
<div class="form-group">
    <label for="image">画像登録</label>
    <input type="file" class="form-control-file" name='image' id='image'>
</div><?php /**PATH C:\xampp\htdocs\laravel_ap\resources\views/articles/form.blade.php ENDPATH**/ ?>