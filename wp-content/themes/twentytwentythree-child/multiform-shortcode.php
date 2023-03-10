<?php
function multi_step_form( $atts = array(), $content = null ) {
  extract(shortcode_atts(array('title' => ''), $atts));
  return  ('<div class="container">
              <div class="form-wrapper">
                <!-- PROGRESS BAR -->
                <div class="progress-step">
                  <ul class="step-list">
                    <li id="home" class="step">
                      <img src="'.get_stylesheet_directory_uri().'/img/home.svg" alt="">
                    </li>
                    <li id="info" class="step current">Contact Info</li>
                    <li id="quantity" class="step">Quantity</li>
                    <li id="price" class="step">Price</li>
                    <li id="done" class="step">Done</li>
                  </ul>
                </div>

  
                <div class="form-outer">
                  <form action="" class="form needs-validation" novalidate>


                    <div class="page">
                      <fieldset>
                        <legend>Contact Info</legend>
                        <div class="form-group row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <label
                            for="inputUsername"
                            class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-form-label">
                              Name
                          </label>
                          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input
                              type="text"
                              class="form-control"
                              id="inputUsername"
                              name="name"
                            />
                          </div>
                        </div>
                        <div class="form-group row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <label
                            for="inputEmail"
                            class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-form-label">
                              Email<span class="sup">required</span>
                          </label>
                          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input
                              type="email"
                              class="email form-control"
                              id="inputEmail"
                              name="email"
                              required
                              />
                          </div>
                        </div>
                        <div class="form-group row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <label
                            for="inputPhone"
                            class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-form-label">
                            Phone
                          </label>
                          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input
                              type="tel"
                              class="form-control"
                              id="inputPhone"
                              name="phone"
                            />
                          </div>
                        </div>
                      </fieldset>
  
                      <div class="btn-container">
                        <button
                          type="button"
                          class="btn btn-primary btn-lg btn-custom continue-1">
                          Continue
                        </button>
                      </div>
                    </div>
                    
    
                    <div class="page">
                      <fieldset>
                        <legend>Quantity</legend>
                        <div class="form-group row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <label
                            for="inputQuantity"
                            class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-form-label">
                            Quantity<span class="sup">required</span>
                          </label>
                          <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <input
                              type="number"
                              class="quantity form-control"
                              id="inputQuantity"
                              name="quantity"
                              min="1"
                              max="1000"
                              required
                            />
                          </div>
                        </div>
                      </fieldset>
                        
    
                      <div class="btn-container">
                        <button
                          type="button"
                          class="btn btn-primary btn-lg btn-custom continue-2">
                          Continue
                        </button>
                        <button type="button" class="btn btn-light btn-lg btn-back back-2">
                          &#8592; Back
                        </button>
                      </div>
                    </div>
                    
    
                    <div class="page">
                      <fieldset>
                        <legend>Price</legend>
                        <div class="form-group row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <input
                            id="calculate"
                            type="text"
                            readonly
                            class="calculate form-control-plaintext"
                            name="calculate"
                            value=""
                          />
                        </div>
                      </fieldset>

                      <div class="btn-container">
                        <button
                          type="submit"
                          class="btn btn-primary btn-lg btn-custom continue-3">
                          Send to Email
                        </button>
                        <button type="button" class="btn btn-light btn-lg btn-back back-3">
                          &#8592; Back
                        </button>
                      </div>
                    </div>
                    
    
                    <div class="page">
                      <fieldset>
                        <legend>Done</legend>
                        <div class="form-group row col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                          <div class="done"></div>
                        </div>
                      </fieldset>
                      
                      <!-- buttons -->
                      <div class="btn-container">
                        <button type="button" class="btn btn-primary btn-lg btn-custom start">
                          Start again &#8594;
                        </button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>

              <h2 class="form-title">'.$title.'</h2>
              <p class="form-description">'.$content.'</p>
            </div>');

}
   

add_shortcode('r_test', 'multi_step_form');