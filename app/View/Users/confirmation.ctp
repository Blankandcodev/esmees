<div class="inset">
<div class="row grid">
    <div class="ten columns">
        <h2>Congratulations! You're almost done. </h2>
        <p class="job-info"><h3>We have Emailed you a link with a code, just click on it and you're done.</h3></p>
            <div class="three">
                <?php
                    echo $this->Form->create('User').
                        $this->Form->input('id', array('type'=>'hidden', 'value'=>$user_id)).
                        $this->Form->input('return', array('type'=>'hidden', 'value'=>$return)).
                        $this->Form->submit('Click to get a new code').$this->Form->end();
                ?>
            </div>
            <p style="color:red; font-size:11px;">These emails can end up in your Spam folder, so don't forget to check that as well.</p>
    </div>
</div>
</div>