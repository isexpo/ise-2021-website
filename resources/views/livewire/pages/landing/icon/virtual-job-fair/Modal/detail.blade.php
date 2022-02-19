      <!-- modal company section start -->
      <div class="modal fade" id="company-desc" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="container">
                <div class="row d-flex justify-content-center mb-md-5 mb-2">
                  <div class="col-md-6 col-12 text-md-start text-center my-2">
                    <img class="img-fluid" src="/img/dicoding.png" alt="logo-perusahaan">
                  </div>
                  <div class="col-lg-5 col-md-4 col-12 text-md-start text-center my-2">
                    <h1 id="job-title">{{ $lowongans['name']}}</h1>
                    <a class="btn" href="#" id="website-modal-btn">Kunjungi website</a>
                  </div>
                  <div class="col-md-1 col-sm-2 col-12 text-md-start text-center my-2">
                    <label class="checkbox mx-4">
                      <input type="checkbox" checked="checked">
                      <span class="bookmarked" id="modal-bookmarked"></span>
                    </label>
                  </div>
                </div>
                <div class="row">
                  <ul class="nav nav-pills mb-3 justify-content-around" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#tab-profil" type="button" role="tab" >Profil</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#tab-syarat" type="button" role="tab">Syarat & Ketentuan</button>
                    </li>
                  </ul>
                </div>
                <div class="row">
                      <div class="tab-content" id="tabContent">
                        <div class="tab-pane fade show active text-center" id="tab-profil" role="tabpanel">
                          <div class="video-player mx-auto my-3 ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/KGQNrzqrGqw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                          <div class="profile-text lh-sm">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae ut minima aliquid necessitatibus enim perferendis pariatur atque neque sint fugit?</p>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="tab-syarat" role="tabpanel">
                          <div class="d-flex align-items-start m-2">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                              <button class="nav-link active my-2" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-internship" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Internship</button>
                              <button class="nav-link my-2" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-part-time" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Part-time</button>
                              <button class="nav-link my-2" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-full-time" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Full-time</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-internship" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <ul>
                                  <li>Pendidikan S1 dengan jurusan informatika, sistem informasi, dsb</li>
                                  <li>ipk >= 3.2</li>
                                  <li> menguasai blablabla</li>
                                </ul>
                              </div>
                              <div class="tab-pane fade" id="v-pills-part-time" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <ul>
                                  <li>Pendidikan S1 dengan jurusan informatika, sistem informasi, dsb</li>
                                  <li>ipk >= 3.2</li>
                                  <li> menguasai blablabla</li>
                                </ul>
                              </div>
                              <div class="tab-pane fade" id="v-pills-full-time" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <ul>
                                  <li>Pendidikan S1 dengan jurusan informatika, sistem informasi, dsb</li>
                                  <li>ipk >= 3.2</li>
                                  <li> menguasai blablabla</li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn apply-btn" data-bs-target="#apply-page" data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
            </div>
          </div>
        </div>
      </div>

      <!-- modal apply page section start -->
            <div class="modal fade" id="apply-page" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row d-flex justify-content-center mb-md-5 mb-2">
                        <div class="col-md-6 col-12 text-md-start text-center my-2">
                          <img class="img-fluid" src="/img/dicoding.png" alt="logo-perusahaan">
                        </div>
                        <div class="col-lg-5 col-md-4 col-12 text-md-start text-center my-2">
                          <h1 id="job-title">Tutor Kimia</h1>
                          <a class="btn" href="#" id="website-modal-btn">Kunjungi website</a>
                        </div>
                        <div class="col-md-1 col-sm-2 col-12 text-md-start text-center my-2">
                          <label class="checkbox mx-4">
                            <input type="checkbox" checked="checked">
                            <span class="bookmarked" id="modal-bookmarked"></span>
                          </label>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="apply-desc">
                          <h3 class="py-3">Deskripsi</h3>
                          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim asperiores eligendi quis qui odit exercitationem quia, officiis nam. Mollitia, dolores.</p>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="apply-syarat">
                          <h3 class="py-3">Syarat dan Ketentuan</h3>
                          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam nisi sint libero repellat omnis explicabo provident repudiandae sit tempora natus.</p>
                        </div>
                      </div>
                      <div class="row apply-doc my-4">
                        <div class="container-fluid">
                          <h3 class="py-3">Dokumen Pendaftaran</h3>
                          <div class="row my-2">
                            <div class="col-md-8 col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="cv-cek" checked onclick="return false;">
                                <label class="form-check-label" for="cv-cek">
                                  CV
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4 col-12">
                              <div>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                              </div>
                            </div>
                          </div>
                          <div class="row my-2">
                            <div class="col-md-8 col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="personal-letter-cek" checked onclick="return false;">
                                <label class="form-check-label" for="personal-letter-cek">
                                  Personal Letter
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4 col-12">
                              <div>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                              </div>
                            </div>
                          </div>
                          <div class="row my-2">
                            <div class="col-md-8 col-12">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Portfolio-cek" checked onclick="return false;">
                                <label class="form-check-label" for="Portfolio-cek">
                                  Portfolio
                                </label>
                              </div>
                            </div>
                            <div class="col-md-4 col-12">
                              <div>
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-4 col-12 text-start">
                          <button type="button" class="btn back-btn" data-bs-target="#company-desc" data-bs-toggle="modal" data-bs-dismiss="modal">&#8249; Kembali</button>
                        </div>
                        <div class="col-md-8 col-12 text-end">
                          <button type="button" class="btn apply-btn" data-bs-target="#privacyPolicy-page" data-bs-toggle="modal" data-bs-dismiss="modal">Lanjut</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


      <!-- modal privacy and policy section start -->
            <div class="modal fade" id="privacyPolicy-page" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="row privacyPolicy-page">
                        <h3 class="py-3">Privacy and Policy</h3>
                        <div class="container">
                          <ul>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, harum.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, harum.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, harum.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, harum.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, harum.</li>
                            <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, harum.</li>
                          </ul>
                          <div class="form-check py-3">
                            <input class="form-check-input" type="checkbox" id="setuju-cek">
                            <label class="form-check-label" for="setuju-cek">
                              Saya menyetujui...
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-4 col-12 text-start">
                          <button type="button" class="btn back-btn" data-bs-target="#apply-page" data-bs-toggle="modal" data-bs-dismiss="modal">&#8249; Kembali</button>
                        </div>
                        <div class="col-md-8 col-12 text-end">
                          <button type="submit" class="btn apply-btn">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

