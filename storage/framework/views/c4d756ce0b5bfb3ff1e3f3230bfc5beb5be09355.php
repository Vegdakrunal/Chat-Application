<div>
    

    <?php if($selectedConversation): ?>
        <div class="chatbox_header">

            <div class="return">
                <i class="bi bi-arrow-left"></i>
            </div>

            <div class="img_container">
                <img src="https://ui-avatars.com/api/?name=<?php echo e($receiverInstance->name); ?>" alt="">

            </div>


            <div class="name">
                <?php echo e($receiverInstance->name); ?>

            </div>


            <div class="info">

                <div class="info_item">
                    <i class="bi bi-telephone-fill"></i>
                </div>

                <div class="info_item">
                    <i class="bi bi-image"></i>
                </div>

                <div class="info_item">
                    <i class="bi bi-info-circle-fill"></i>
                </div>
            </div>
        </div>

        <div class="chatbox_body">
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="msg_body  <?php echo e(auth()->id() == $message->sender_id ? 'msg_body_me' : 'msg_body_receiver'); ?>"
                    style="width:80%;max-width:80%;max-width:max-content">

                    <?php echo e($message->body); ?>

                    <div class="msg_body_footer">
                        <div class="date">
                            <?php echo e($message->created_at->format('m: i s')); ?>

                        </div>

                        <div class="read">
                            <?php
                                
                          if($message->user->id === auth()->id()){

                
                                    if($message->read == 0){


                                        echo'<i class="bi bi-check2 status_tick "></i> ';
                                    }
                                    else {
                                        echo'<i class="bi bi-check2-all text-primary  "></i> ';
                                    }

                          }


                            ?>
                      

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>


        <script>
            $(".chatbox_body").on('scroll', function() {
                // alert('aahsd');
                var top = $('.chatbox_body').scrollTop();
                //   alert('aasd');
                if (top == 0) {

                    window.livewire.emit('loadmore');
                }

            });
        </script>


        <script>
            window.addEventListener('updatedHeight', event => {

                let old = event.detail.height;
                let newHeight = $('.chatbox_body')[0].scrollHeight;

                let height = $('.chatbox_body').scrollTop(newHeight - old);


                window.livewire.emit('updateHeight', {
                    height: height,
                });


            });
        </script>
    <?php else: ?>
        <div class="fs-4 text-center text-primary mt-5">
            no conversasion selected
        </div>




    <?php endif; ?>


    <script>
        window.addEventListener('rowChatToBottom', event => {

            $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);

        });
    </script>


<script>
    $(document).on('click','.return',function(){


window.livewire.emit('resetComponent');

    });
</script>
 

<script>

window.addEventListener('markMessageAsRead',event=>{
 var value= document.querySelectorAll('.status_tick');

 value.array.forEach(element, index => {
     

    element.classList.remove('bi bi-check2');
    element.classList.add('bi bi-check2-all','text-primary');
 });

});

</script>
</div>
<?php /**PATH D:\laravel_project\ChatApplication\resources\views/livewire/chat/chatbox.blade.php ENDPATH**/ ?>