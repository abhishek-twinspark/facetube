<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?><script>






</script>

<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
      <h1 style="color:white;">Add Post</h1>
      <div class="form-group">
        <label for="exampleTextarea" class=" label label-success" >Description</label>
        <textarea name="description" class="form-control" id="exampleTextarea" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="exampleTextarea" class=" label label-danger" >Attach</label>
        <textarea name="attach" class="form-control" id="exampleTextarea" rows="3"></textarea>
      </div>
        <!-- <legend><?= __('Add Post') ?></legend>
        <?php
          //  echo $this->Form->control('sender_id', ['options' => $senders]);
            echo $this->Form->control('description', ['id' => 'des']);
            echo $this->Form->control('attach', ['id' => 'att']);
          //  echo $this->Form->control('receiver_id', ['options' => $receivers]);
        ?> -->
        <button  id="but" class="btn btn-primary" >post</button>
    </fieldset>
    <?= $this->Form->end() ?>


</div>
<!-- <script>


  var url2 = '<?= $this->Url->build([
  "controller" => "Posts",
  "action" => "post"
  ]);
  ?>';

  // $(document).ready(function(){
          function post(receiver_id){
            alert(url2);
            post = {
              description: $('#des').val(),
              attach: $('#att').val(),
              receiver_id:receiver_id
            }


               $.ajax({
                  type: 'POST',
                  url: url2,
                  data: post,
                  success: function(data) {
                      alert(data);
                      $("p").text(data);

                  }
              });
     }
  // }); -->
</script>