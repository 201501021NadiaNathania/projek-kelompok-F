<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Manajemen Proyek</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <script src="js/web3Webpacked.min.js"></script>
    <link href="<?php echo base_url('./assets/css/main.css'); ?>" rel="stylesheet"></head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
<div class='ui-theme-settings'>
        <button type='button' id='TooltipDemo' class='btn-open-options btn btn-warning'></button>
      </div>
      <div class='app-main__outer'>
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper"></div>
    </div>
    <div class="tab-content">
        <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form class="">
                        <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nama Proyek</label>
                            <div class="col-sm-10"><input name="nama_proyek" type="text" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="examplePassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10"><input name="password" id="examplePassword" placeholder="password placeholder" type="password" class="form-control"></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleSelect" class="col-sm-2 col-form-label">Select</label>
                            <div class="col-sm-10"><select name="select" id="exampleSelect" class="form-control"></select></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleSelectMulti" class="col-sm-2 col-form-label">Select Multiple</label>
                            <div class="col-sm-10"><select multiple="" name="selectMulti" id="exampleSelectMulti" class="form-control"></select></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleText" class="col-sm-2 col-form-label">Text Area</label>
                            <div class="col-sm-10"><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                        </div>
                        <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-10"><input name="file" id="exampleFile" type="file" class="form-control-file">
                                <small class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                            </div>
                        </div>
                        <fieldset class="position-relative row form-group">
                            <legend class="col-form-label col-sm-2">Radio Buttons</legend>
                            <div class="col-sm-10">
                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option one is this and that—be sure to include why it's great</label></div>
                                <div class="position-relative form-check"><label class="form-check-label"><input name="radio2" type="radio" class="form-check-input"> Option two can be something else and selecting it will deselect option
                                    one</label></div>
                                <div class="position-relative form-check disabled"><label class="form-check-label"><input name="radio2" disabled="" type="radio" class="form-check-input"> Option three is disabled</label></div>
                            </div>
                        </fieldset>
                        <div class="position-relative row form-group"><label for="checkbox2" class="col-sm-2 col-form-label">Checkbox</label>
                            <div class="col-sm-10">
                                <div class="position-relative form-check"><label class="form-check-label"><input id="checkbox2" type="checkbox" class="form-check-input"> Check me out</label></div>
                            </div>
                        </div>
                        <div class="position-relative row form-check">
                            <div class="col-sm-10 offset-sm-2">
                                <button class="btn btn-secondary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
