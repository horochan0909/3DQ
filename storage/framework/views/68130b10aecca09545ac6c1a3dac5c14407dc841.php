<div class="card mt-3">
    <div class="card-body d-flex flex-row">
        <a href="<?php echo e(route('users.show', ['name' => $article->user->name])); ?>" class="text-dark">
            <i class="fas fa-user-circle fa-3x mr-1"></i>
        </a>
        <div>
            <div class="font-weight-bold"><?php echo e($article->user->name); ?></div>
            <a href="<?php echo e(route('users.show', ['name' => $article->user->name])); ?>" class="text-dark">
            </a>
            <div class="font-weight-lighter"><?php echo e($article->created_at->format('Y/m/d H:i')); ?></div>
        </div>

        <?php if( Auth::id() === $article->user_id ): ?>
        <!-- dropdown -->
        <div class="ml-auto card-text">
            <div class="dropdown">
                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="<?php echo e(route("articles.edit", ['article' => $article])); ?>">
                        <i class="fas fa-pen mr-1"></i>記事を更新する
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" data-toggle="modal"
                        data-target="#modal-delete-<?php echo e($article->id); ?>">
                        <i class="fas fa-trash-alt mr-1"></i>記事を削除する
                    </a>
                </div>
            </div>
        </div>
        <!-- dropdown -->

        <!-- modal -->
        <div id="modal-delete-<?php echo e($article->id); ?>" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action="<?php echo e(route('articles.destroy', ['article' => $article])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <div class="modal-body">
                            <?php echo e($article->title); ?>を削除します。よろしいですか？
                        </div>
                        <div class="modal-footer justify-content-between">
                            <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                            <button type="submit" class="btn btn-danger">削除する</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal -->
        <?php endif; ?>

    </div>
    <div class="card-body pt-0">
        <h3 class="h4 card-title">
            <a class="text-dark" href="<?php echo e(route('articles.show', ['article' => $article])); ?>">
                <?php echo e($article->title); ?>

            </a>
        </h3>
        <div class="card-text">
            <?php echo e($article->body); ?>

        </div>

        <img src="<?php echo e(asset('/storage/'.$article->image_path)); ?>" class="w-100 mb-3">
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel_ap\resources\views/articles/card.blade.php ENDPATH**/ ?>