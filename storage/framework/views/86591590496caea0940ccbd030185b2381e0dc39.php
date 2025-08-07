<div>


    <div class="chat_container">

        <div class="chat_list_container">

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.chat-list')->html();
} elseif ($_instance->childHasBeenRendered('l3749685992-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3749685992-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3749685992-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3749685992-0');
} else {
    $response = \Livewire\Livewire::mount('chat.chat-list');
    $html = $response->html();
    $_instance->logRenderedChild('l3749685992-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

        </div>

        <div class="chat_box_container">

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.chatbox')->html();
} elseif ($_instance->childHasBeenRendered('l3749685992-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3749685992-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3749685992-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3749685992-1');
} else {
    $response = \Livewire\Livewire::mount('chat.chatbox');
    $html = $response->html();
    $_instance->logRenderedChild('l3749685992-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('chat.send-message')->html();
} elseif ($_instance->childHasBeenRendered('l3749685992-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3749685992-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3749685992-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3749685992-2');
} else {
    $response = \Livewire\Livewire::mount('chat.send-message');
    $html = $response->html();
    $_instance->logRenderedChild('l3749685992-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </div>


    <script>
        window.addEventListener('chatSelected', event => {

            if (window.innerWidth < 768) {

                $('.chat_list_container').hide();
                $('.chat_box_container').show();

            }

            $('.chatbox_body').scrollTop($('.chatbox_body')[0].scrollHeight);
        let height= $('.chatbox_body')[0].scrollHeight; 
    //alert(height);
    window.livewire.emit('updateHeight',{
       
height:height,


    });
        });


        $(window).resize(function() {

            if (window.innerWidth > 768) {
                $('.chat_list_container').show();
                $('.chat_box_container').show();

            }

        });


        $(document).on('click', '.return', function() {

            $('.chat_list_container').show();
            $('.chat_box_container').hide();


        });
    </script>

<script>
    // //let el= $('#chatBody');
    // let el = document.querySelector('#chatBody');
    // window.addEventListener('scroll', (event) => {
    //     // handle the scroll event 
    //     alert('aasd');
    
    // });
    $(document).on('scroll','#chatBody',function() {
        alert('aasd');
    
        var top = $('.chatbox_body').scrollTop();
        if (top == 0) {
            
            window.livewire.emit('loadmore');
        }
    
    
    });
    
    </script>
</div>
<?php /**PATH D:\laravel_project\ChatApplication\resources\views/livewire/chat/main.blade.php ENDPATH**/ ?>