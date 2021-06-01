<?php
    require_once('../app/action/Contact/findMessageById.php');
?>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="col-12 grid-margin stretch-card">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <strong>
                                Sender :
                            </strong>
                            <?php echo $contact->getName(); ?>
                        </h5>
                        <h5 class="card-title">
                            <strong>
                                Email :
                            </strong>
                            <?php echo $contact->getEmail(); ?>
                        </h5>
                        <p class="card-text">
                            <p>
                                <strong>
                                    Message
                                </strong>
                            </p>
                            <?php
                                echo $contact->getMessage();
                            ?>
                        </p>
                        <blockquote class="blockquote mb-0">
                            <footer class="blockquote-footer">
                                <strong>
                                    Date of message :
                                </strong>
                                <cite title="Source Title">
                                    <?php
                                        echo $contact->getDate_message();
                                    ?>
                                </cite>
                            </footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>