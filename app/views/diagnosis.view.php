<?php $this->view("includes/d-header",$data) ?>
<style>
    body{
        font-size: 20px;
        color: black;
        z-index: 200;
        font-weight: bolder;
    }
</style>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Eye Conjunctivtis Diagnosis</h2>
          <ol>
            <li><a href="<?=ROOT?>">Home</a></li>
            <li><?=$title?></li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="contianer-fluid p-5 m-auto shadow-lg rounded-5 js-diagnosis-result">

        <?php if($diagnosis == 1): ?>
        <div class="col-md-12 text-center mb-4 bg-dark text-white m-auto p-4" style="max-width: 500px;">
          <?= 'Diagnosis: ' . "Conjunctivitis" ?>
          <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
              Click to see more
          </button>
        </div>
        
        <?php elseif($diagnosis == 0):?>
          <div class="col-md-12 text-center mb-4 bg-dark text-white m-auto p-4" style="max-width: 500px;">
          <?= 'Diagnosis: ' . "No Conjunctivitis" ?>
          <button type="button" class="btn btn-sm btn-outline-info" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
              Click to see more
          </button>
        </div>
        <?php endif;?>



        <form class="row g-3"  method="post">

                <div class="col-md-6">
                  <div class="">
                    <label for="">Name</label>
                    <input type="text" class="form-control rounded-5" value="<?=old_value('name')?>" name="name" placeholder="Your Name" required>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="">
                    <label for="">Gender</label>
                    <select name="gender" id="" class="form-select">
                      <option <?=old_select('gender', '')?>></option>
                      <option value="male" <?=old_select('gender', 'male')?>>Male</option>
                      <option value="female" <?=old_select('gender','female')?>>Female</option>
                    </select>
                  </div>
                </div>

                <p>Symptoms</p>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="itching">Itching  </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('itching', 1)?> id="itching" name="itching">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0" <?=old_checked('itching', 0)?> id="itching" name="itching">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="redness">Redness  </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('redness', 1)?>  id="redness" name="redness">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0" id="redness"  <?=old_checked('redness', 0)?> name="redness">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="watery">watery  </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('watery', 1)?>  id="watery" name="watery">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0" <?=old_checked('watery', 0)?>  id="watery" name="watery">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="discharge">Discharge  </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('discharge', 1)?>  id="discharge" name="discharge">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0" <?=old_checked('discharge', 0)?>  id="discharge" name="discharge">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="gritty">Gritty  </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('gritty', 1)?>  id="gritty" name="gritty">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0"  <?=old_checked('gritty', 0)?> id="gritty" name="gritty">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="burning">Burning  </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('burning', 1)?>  id="burning" name="burning">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0" <?=old_checked('burning', 0)?>  id="burning" name="burning">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="sensitive">Sensitive to light </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('sensitive', 1)?> id="sensitive" name="sensitive">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0"  <?=old_checked('sensitive', 0)?> id="sensitive" name="sensitive">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label class="form-check-label" for="blurred">Blurred  </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1"  <?=old_checked('blurred', 1)?>  id="blurred" name="blurred">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0"  <?=old_checked('blurred', 0)?> id="blurred" name="blurred">NO
                  </div>
                </div>

                <div class="col-md-6 my-3">
                  <label>Duration of Symptoms (in days):</label>
                  <input type="number" class="form-control" id="duration" value="<?=old_value('duration')?>" placeholder="not more than 8 days" name="duration" required>
                </div>


                <div class="col-md-6 my-3">
                  <div class="form-group">
                  <label class="form-check-label" for="medical--history">Medical History </label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('medicalhistory', 1)?> id="blurred" name="medicalhistory">Allergies
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0" <?=old_checked('medicalhistory', 0)?> id="blurred" name="medicalhistory">None
                  </div>
                </div>
                </div>

                <div class="col-md-6 my-3">
                <label for="painLevel">Pain Level:</label>
                <select name="painlevel" class="form-control"  id="painLevel" required>
                    <option  value="0" <?=old_select('painlevel', 0)?>>None</option>
                    <option value="1" <?=old_select('painlevel', 1)?>>Low</option>
                    <option value="2" <?=old_select('painlevel', 2)?>>Medium</option>
                    <option value="3" <?=old_select('painlevel', 3)?>>High</option>
                </select>
                </div>


                <div class="col-md-6 my-3">
                  <div class="form-group">
                  <label class="form-check-label" for="medical--history">Trauma</label>
                  <div class="form-check  form-check-inline">
                      <input type="radio" true class="form-check-input" value="1" <?=old_checked('trauma', 1)?>  name="trauma">YES
                  </div>
                  <div class="form-check form-check-inline">
                      <input type="radio" class="form-check-input" value="0" <?=old_checked('trauma', 0)?>  name="trauma">NO
                  </div>
                </div>
                </div>

                <div class="text-center">
                  <button type="submit"   class="btn btn-outline-dark js-submit">Diagnose</button>
                  <!-- <button type="reset" class="btn btn-secondary">Reset</button> -->
                </div>
              </form>
            </div>
        </form>
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        </div>
      </div>
    </section>

                    <!-- Fullscreen Modal -->
                    <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content">

                      <div class="modal-header">
                        <h5 class="modal-title" id="fullscreenModalLabel">Full Detials Of Your Diagnosis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <?php if($diagnosis !== ""): ?>
                      <div class="modal-body g-3">
                      <!-- Modal content goes here -->

                      <p>
                        <div class="accordion" id="accordionExample">

                        <?php if($diagnosis == 1): ?>
                          <!-- Accordion Item 1 -->
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="symptom">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Symptoms
                              </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="symptom" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <?= 'Diagnosis: ' . "Conjunctivitis" ?>
                                  <p class="text-muted text-white">
                                    <i class="fa fa-warning"></i>
                                    If you are experiencing new, severe, or persistent symptoms, contact a health care provider.
                                  </p>
                              </div>
                            </div>
                          </div>

                          <!-- Accordion Item 2-->
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="causes">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                  Causes
                              </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="causes" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  Causes include:
                                  <ul class="text-muted">
                                    <li>Bacterial infection: Caused by bacteria such as Staphylococcus aureus, Streptococcus pneumonia and Haemophilus influenza</li>
                                    <li>Viral infection: Generally caused by adenoviruses</li>
                                    <li>Allergic reaction to substances such as pollen, household dust, and pet dander</li>
                                    <li>Irritants such as pollutants, smoke, chlorine in swimming pools etc</li>
                                  </ul>
                                  Risk factors include:
                                  <ul class="text-muted">
                                    <li>Contact with secretions from eye of an infected person - conjunctivitis is highly contagious</li>
                                    <li>Exposure to irritants</li>
                                    <li>Exposure to allergens</li>
                                  </ul>
                              </div>
                            </div>
                          </div>

                          <!-- Accordion Item 3-->
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="prevention">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                  Prevention
                              </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="prevention" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <ul class="text-muted">
                                    <li>Do not touch your eyes after touching any other objects or surfaces without washing the hands.</li>
                                    <li>Do not share items such as makeup, pillows, or towels used by an infected person. -Avoid sharing eye makeup and contact lenses with anyone.</li>
                                  </ul>
                              </div>
                            </div>
                          </div>

                        <?php elseif($diagnosis == 0): ?>
                          <!-- Accordion Item 1 -->
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="symptom">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Symptoms
                              </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="symptom" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <?= 'Diagnosis: ' . "No Conjunctivitis" ?>
                                  <p class="text-muted text-white">
                                    <i class="fa fa-warning"></i>
                                    If you are experiencing new, severe, or persistent symptoms, contact a health care provider.
                                  </p>
                              </div>
                            </div>
                          </div>                          
                        <?php endif; ?>

                        </div>
                      </p>

                      </div>
                    <?php endif; ?>
                    </div>
                  </div>
                </div>


  </main>
  <!-- End #main -->

  <?php $this->view("includes/footer",$data) ?>


