<div>
    

    <div class="chatlist_header">

        <div class="title">
            Chat
        </div>

        <div class="img_container">
            <img src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=<?php echo e(auth()->user()->name); ?>" alt="">
        </div>
    </div>

    <div class="chatlist_body">

        <?php if(count($conversations) > 0): ?>
            <?php $__currentLoopData = $conversations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="chatlist_item " wire:key='<?php echo e($conversation->id); ?>' wire:click="$emit('chatUserSelected', <?php echo e($conversation); ?>,<?php echo e($this->getChatUserInstance($conversation, $name = 'id')); ?>)">
                    <div class="chatlist_img_container">

                        <img src="https://ui-avatars.com/api/?name=<?php echo e($this->getChatUserInstance($conversation, $name = 'name')); ?>"
                            alt="">
                    </div>

                    <div class="chatlist_info">
                        <div class="top_row">
                            <div class="list_username"><?php echo e($this->getChatUserInstance($conversation, $name = 'name')); ?>

                            </div>
                            <span class="date">
                                <?php echo e($conversation->messages->last()?->created_at->shortAbsoluteDiffForHumans()); ?></span>
                        </div>

                        <div class="bottom_row">

                            <div class="message_body text-truncate">
                                <?php echo e($conversation->messages->last()->body); ?>

                            </div>
                 
                            <?php
                                if(count($conversation->messages->where('read',0)->where('receiver_id',Auth()->user()->id))){

                             echo ' <div class="unread_count badge rounded-pill text-light bg-danger">  '
                                 . count($conversation->messages->where('read',0)->where('receiver_id',Auth()->user()->id)) .'</div> ';

                                }

                            ?>

                        </div>
                    </div>
                </div>



            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        <?php else: ?>
            you have no conversations
        <?php endif; ?>

    </div>
</div>
<?php /**PATH D:\laravel_project\ChatApplication\resources\views/livewire/chat/chat-list.blade.php ENDPATH**/ ?>