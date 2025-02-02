



        <section class="header-title section-padding">
            <div class="container text-center">
                <h2 class="title">Contact</h2>
                <span class="sub-title">Home > Contact </span>
            </div>
        </section> <!-- header-title -->

        <section class="contact-section section-padding">
            <div class="container">
                <div class="contact-wrapper">
                    <div class="section-title text-center">
                        <h2>Drop us a line</h2>
                        <p>Please contact us using the information below. For additional <br> information please visit the appropriate page on our site.</p>
                    </div> <!-- section-title -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-section">
                            <form id="contact-form" class="contact-form" action="<?= base_url('submit-contact') ?>" method="post">
                                <div class="form-group">
                                    <input id="name" name="name" type="text" class="form-control" required placeholder="Full Name">
                                </div>

                                <div class="form-group">
                                    <input class="domainSearchBar form-control" id="email" name="email" type="email" required placeholder="Email">
                                </div>

                                <div class="form-group">
                                    <input id="location" name="location" type="text" class="form-control" required placeholder="Location">
                                </div>

                                <div class="form-group">
                                    <textarea id="message" name="message" class="form-control form-message" rows="4" required placeholder="Write.."></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                            </div> <!-- mail-section -->
                        </div>

                        <div class="col-md-6">
                            <ul class="location">
                                <li>
                                    <i class="fa fa-road" aria-hidden="true"></i>

                                    <div class="text">Doha <br> Qatar <br> </div>
                                </li>

                                <li>
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>

                                    <div class="text">+974 30779555</div>
                                </li>

                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>

                                    <div class="text">santronqatar@gmail.com</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- contact-section -->
        <style>
            .contact-section::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 0%;
    background-color: #f3f3f3;
}
        </style>



        <section class="map-section">
            <h2 class="hidden">title</h2>
            
            <div id="googleMap"></div>
        </section>

            <!-- Include SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script to show SweetAlert2 popups based on flashdata -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '<?= session()->getFlashdata('success') ?>',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            Swal.fire({
                icon: 'error',
                title: 'Error!',
                text: '<?= session()->getFlashdata('error') ?>',
                confirmButtonText: 'OK'
            });
        <?php endif; ?>
    });
</script>



       



       