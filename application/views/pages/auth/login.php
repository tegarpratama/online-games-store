<div class="container">
      <div class="row justify-content-center mt-5">
         <div class="col-5">
            <div class="card">
               <div class="card-body mb-4">
                  <div class="row justify-content-center">
                     <div class="col-10">
                        <form action="<?= base_url('login/login') ?>" method="post" class="form-signin text-center">
									<img class="mb-4" src="<?= base_url() ?>/images/logo/logo.png" width="210" height="72">
									
									<?php  $this->load->view('layouts/_alert') ?>
									
                           <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Your email" required>
                           </div>

                           <div class="form-group">
                              <input type="password" class="form-control" name="password" placeholder="Your password" required>
                           </div>
            
                           <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

