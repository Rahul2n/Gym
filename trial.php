<?php include'head.php';?>

<div class="container-fluid  py-5"style="background-color:#fd3c3d;">
                         <div class="container text-light">
                            <h2 class="text-center">3 DAY FREE TRIAL</h2>
                                <div class="row py-3">
                                    <div class="col-sm-12 text-uppercase">
                                        <form id="my_form" onSubmit="submitForm(); return false;">
                                            <div class="row">
                                                <div class="form-group col-lg-4">
                                                    <label for="Name">Name:</label>
                                                     <input id="n" class="form-control"   type="text" required 
                          autocomplete="off" style="border-radius:0;font-size: 14px;">
                                                </div>
                                            <div class="form-group col-lg-4">
                                                  <label for="email">Email:</label>
                                                  <input id="e" class="form-control"   type="email" required 
                          autocomplete="off" style="border-radius:0;font-size: 14px;">
                                            </div>
                                            <div class="form-group col-lg-4">
                                                  <label for="email">Contact:</label>
                                                  <input id="c" class="form-control"   type="number" required 
                          autocomplete="off" style="border-radius:0;font-size: 14px;">
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                  <label for="pwd">Nearest Branch:</label>
                                                 <textarea id="m" class="form-control" rows="4" required 
                         autocomplete="off" style="border-radius:0;font-size: 14px;"></textarea>
                                            </div>
                                            <div class="form-group">
                       <div id="recaptcha" class="g-recaptcha" data-sitekey="6LdF0KIUAAAAAAc42aozG1XiqxgYviujBT12eHy_"></div>
                  <span id="msg-error"></span>
                        </div>
                          <button id="mybtn" type="submit" class="btn btn-primary float-right"style="border-radius: 0; border: none;">JOIN TODAY</button>
                          <span id="status"></span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>