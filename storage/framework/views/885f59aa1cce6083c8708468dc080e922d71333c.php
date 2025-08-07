<div>
    


    
<ul class="list-group w-75 mx-auto mt-3 container-fluid" style="height: 1000px">
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


    <li class="list-group-item list-group-item-action" wire:click='checkconversation(<?php echo e($user->id); ?>)'> <?php echo e($user->name); ?></li>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </ul>

</div>
<?php /**PATH D:\laravel_project\ChatApplication\resources\views/livewire/chat/create-chat.blade.php ENDPATH**/ ?>