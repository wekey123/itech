<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <?php include 'elements/header_include.php'; ?>
    <link rel="stylesheet" href="css/mailform.css"/>
</head>
<body>
<div class="page">
   <!--========================================================
                              HEADER
    =========================================================-->
     <?php include 'elements/header.php'; ?>
    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section class="well-4 well-4__off divider-xs well-xs-1">
            <div class="container">
                <h3><strong>Contact</strong> us</h3>

                <div class="row row__off-2">
                    <div class="col-md-4 col-sm-4 col-xs-12" style="font-family:Arial, Helvetica, sans-serif">
                        <h4>Address</h4>
                        <address class="addr"><p class="h5">4676 Lakeview Ave, <br>
                                                            Suite 107 Yorba Linda CA-92886</p>
                            <dl>
                                <dt>Freephone:</dt>
                                <dd>
                                    <a href="callto:#">+1 714-646-3709</a>
                                </dd>
                                <dt>Telephone:</dt>
                                <dd>
                                    <a href="callto:#">+1 800 592 5139</a>
                                </dd>
                                <dt>FAX:</dt>
                                <dd>
                                    <a href="callto:#">+1 888 334 8436</a>
                                </dd>
                            </dl>
                        </address>
                        <p class="mail-secondary">E-mail:
                            <a href="mailto:#" class="">contact@itechmatics.com</a>
                        </p>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <h4>Contact form</h4>

                        <form class='mailform' method="post" action="bat/rd-mailform.php">
                            <input type="hidden" name="form-type" value="contact"/>
                            <fieldset>
                                <div class="mail-wrap">


                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="name"
                                               placeholder="Name*:"
                                               data-constraints="@LettersOnly @NotEmpty"/>
                                    </label>
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="email"
                                               placeholder="E-mail*:"
                                               data-constraints="@Email @NotEmpty"/>
                                    </label>
                                    <label data-add-placeholder>
                                        <input type="text"
                                               name="phone"
                                               placeholder="Phone*:"
                                               data-constraints="@Phone @NotEmpty"/>
                                    </label>
                                </div>

                                <label data-add-placeholder>
                                    <textarea name="message" placeholder="Comment*:"
                                              data-constraints="@NotEmpty"></textarea>
                                </label>

                                <div class="mfControls">
                                    <button class="btn-primary" type="submit">Submit</button>
                                </div>
                                <p>*required fields</p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
       <?php //include 'elements/map.php'; ?>


    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
 <?php include 'elements/footer.php'; ?>
</div>

<script src="js/script.js"></script>
</body>
</html>