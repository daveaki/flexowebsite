<!DOCTYPE html>
<html lang="<?= service('request')->getLocale() ?>">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?= esc($title) ?> - <?= SITE_NAME ?></title>
                <meta name="description" content="<?= esc($description) ?>">
                <link rel="stylesheet" href="<?= base_url('assets/css/lib/flexo.min.css') ?>">
                <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
        <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
                <script src="<?= base_url('assets/js/app.js') ?>" defer></script>
        </head>
        <body class="contact-page keep-scrolled">
                <?= view('website/partial/header') ?>

                <section class="contact-section">
                        <div class="container">
                                <div class="row fl-sm-gap-0 fl-sm-justify-center">
                                        <div class="fl-box fl-13 fl-lg-10 fl-sp-8">
                                                <div class="contact-form-box">
                                                        <h3><?= lang('Website.contact_form_title') ?></h3>
                                                        <form class="contact-form" action="#" method="post">
                                                                <?= csrf_field() ?>
                                                                <div class="row fl-sm-gap-24">
                                                                        <div class="fl-box fl-16 fl-lg-8">
                                                                                <div class="form-group">
                                                                                        <label for="contact_name"><?= lang('Website.contact_name') ?></label>
                                                                                        <input type="text" id="contact_name" name="name" placeholder="<?= lang('Website.contact_name_ph') ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-lg-8">
                                                                                <div class="form-group">
                                                                                        <label for="contact_email"><?= lang('Website.contact_email') ?></label>
                                                                                        <input type="email" id="contact_email" name="email" placeholder="<?= lang('Website.contact_email_ph') ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16">
                                                                                <div class="form-group">
                                                                                        <label for="contact_subject"><?= lang('Website.contact_subject') ?></label>
                                                                                        <input type="text" id="contact_subject" name="subject" placeholder="<?= lang('Website.contact_subject_ph') ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16">
                                                                                <div class="form-group">
                                                                                        <label for="contact_message"><?= lang('Website.contact_message') ?></label>
                                                                                        <textarea id="contact_message" name="message" rows="6" placeholder="<?= lang('Website.contact_message_ph') ?>"></textarea>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16">
                                                                                <button type="submit" class="btn on-dark"><?= lang('Website.contact_send') ?></button>
                                                                        </div>
                                                                </div>
                                                        </form>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </section>

                <?= view('website/partial/footer') ?>
        </body>
</html>
