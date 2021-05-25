<!DOCTYPE html>
<html>
    <?php
        require_once('template/head.php');
    ?>
    <body>
        <?php
            require_once('template/navbar.php');
            activePage('Contact');
        ?>
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">E-COMMERCE CONTACT</h1>
                <p class="lead text-muted mb-0">Dear visitor if you have any question or sugestion you may contact us </p>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-primary text-white">
                            <i class="fa fa-envelope"></i>
                            Contact us.
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea class="form-control" id="message" rows="6" required></textarea>
                                </div>
                                <div class="mx-auto">
                                    <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-success text-white text-uppercase">
                            <i class="fa fa-home"></i>
                            Address
                        </div>
                        <div class="card-body">
                            <p>3 rue des Champs Elysées</p>
                            <p>75008 PARIS</p>
                            <p>France</p>
                            <p>Email : email@example.com</p>
                            <p>Tel. +33 12 56 11 51 84</p>
                            <p>Map : </p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d12790.512006191411!2d10.237066024782068!3d36.73149443520938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sG%C3%A9ant%20Tunis%20city!5e0!3m2!1sfr!2stn!4v1620426739359!5m2!1sfr!2stn" style="border:0;" allowfullscreen="" loading="lazy">    
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>