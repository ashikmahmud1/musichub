<!-- Courses -->
<section id="course_all" class="padding-bottom-half padding-top">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 course_detail wow fadeIn" data-wow-delay="400ms">
                <?php foreach ($album->result() as $row) { ?>
                    <?php $changeimageurl = base_url() . "albumfiles/" . $row->imageurl;
                    echo "<img src='$changeimageurl' alt='eventss' class='border_radius img-responsive bottom15' >";
                    ?>
                    <!--                <img src="images/course-detail.jpg" alt="Course" class=" border_radius img-responsive bottom15">-->
                    <div class="detail_course">
                        <div class="info_label">
                            <span class="icony"><i class="icon-users3"></i></span>
                            <p>Teacher</p>
                            <h5>JOHN PARKER</h5>
                        </div>
                        <div class="info_label">
                            <span class="icony"><i class="icon-users3"></i></span>
                            <p>Category</p>
                            <h5>Software Training / Web Coures</h5>
                        </div>
                        <div class="info_label hidden-xs"></div>
                        <div class="info_label">
                            <form class="star_rating bottom5">
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-01"/>
                                    <label class="star-1" for="star-01">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-02"/>
                                    <label class="star-2" for="star-02">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-03"/>
                                    <label class="star-3" for="star-03">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-04" checked/>
                                    <label class="star-4" for="star-04">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-05"/>
                                    <label class="star-5" for="star-05">5</label>
                                    <span></span>
                                </div>
                                <p class="no_bottom text-right">4 Rating</p>
                            </form>

                        </div>
                    </div>

                <h3 class="top30 bottom20">About This Album</h3>
                <p class="bottom25"><?php echo $row->description; ?>
                </p>
                <?php } ?>
                <div class="bottom15"></div>
                <div class="profile_bg heading_space">
                    <h3 class="bottom20">Album Songs</h3>
                    <div class="profile">
                        <div class="profile_text">
                            <ul>
                                <?php foreach ($songs->result() as $row) { ?>

                                    <li>
                                        <audio controls>
                                            <?php
                                            $audiofile = base_url() . "albumfiles/" . $row->filename;
                                            echo "<source src='$audiofile' type=\"audio/ogg\">"
                                            ?>
                                        </audio>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="reviews">
                    <h3 class="bottom20">Review</h3>
                    <div class="row">
                        <div class="col-sm-4 heading_space">
                            <p>Average Rating</p>
                            <div class="review_left text-center">
                                <strong class="bottom5">4.2</strong>
                                <form class="star_rating bottom5">
                                    <div class="stars">
                                        <input type="radio" name="star" class="star-1" id="star-11"/>
                                        <label class="star-1" for="star-11">1</label>
                                        <input type="radio" name="star" class="star-2" id="star-12"/>
                                        <label class="star-2" for="star-12">2</label>
                                        <input type="radio" name="star" class="star-3" id="star-13"/>
                                        <label class="star-3" for="star-13">3</label>
                                        <input type="radio" name="star" class="star-4" id="star-14" checked/>
                                        <label class="star-4" for="star-14">4</label>
                                        <input type="radio" name="star" class="star-5" id="star-15"/>
                                        <label class="star-5" for="star-15">5</label>
                                        <span></span>
                                    </div>
                                </form>
                                <p class="no_bottom">4 Rating</p>
                            </div>
                        </div>
                        <div class="col-sm-8 heading_space">
                            <div class="rating_progress">
                                <span>Stars 5</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                         aria-valuemax="100" style="width:80%;"></div>
                                </div>
                                <span>8</span>
                                <div class="clearfix"></div>
                                <span>Stars 4</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                         aria-valuemax="100" style="width:60%;"></div>
                                </div>
                                <span> 6</span>
                                <div class="clearfix"></div>
                                <span>Stars 3</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                         aria-valuemax="100" style="width:40%;"></div>
                                </div>
                                <span> 3</span>
                                <div class="clearfix"></div>
                                <span>Stars 2</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0"
                                         aria-valuemax="100" style="width:30%;"></div>
                                </div>
                                <span>1</span>
                                <div class="clearfix"></div>
                                <span>Stars 1</span>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                         aria-valuemax="100" style="width:0%;"></div>
                                </div>
                                <span> 0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Add a Review </h3>
                <form class="star_rating bottom5">
                    <?php if (!$this->session->userdata('logged_in')): ?>
                        <p class="heading_space">You must be <a href="#." class="logged">logged</a> in to post a
                            comment.
                        </p>
                    <?php else: ?>
                        <div class="col-md-12">
                            <div class="stars">
                                <input type="radio" name="star" class="star-1" id="star-01"/>
                                <label class="star-1" for="star-01">1</label>
                                <input type="radio" name="star" class="star-2" id="star-02"/>
                                <label class="star-2" for="star-02">2</label>
                                <input type="radio" name="star" class="star-3" id="star-03"/>
                                <label class="star-3" for="star-03">3</label>
                                <input type="radio" name="star" class="star-4" id="star-04" checked/>
                                <label class="star-4" for="star-04">4</label>
                                <input type="radio" name="star" class="star-5" id="star-05"/>
                                <label class="star-5" for="star-05">5</label>
                                <span></span>
                            </div>
                            <br>
                            <textarea placeholder="Comment" name="message" id="message"></textarea> <br>
                            <button class="btn_common yellow border_radius" id="btn_submit">Submit</button>
                        </div>
                    <?php endif; ?>
                </form>
            </div>
            <aside class="col-sm-4 wow fadeIn" data-wow-delay="400ms">
                <div class="widget heading_space">
                    <h3 class="bottom20">Popular Albums</h3>
                    <div class="media">
                        <div class="media-body">
                            <h5 class="bottom5">Jago Bangla</h5>
                            <a href="#." class="btn-primary border_radius bottom5">free</a>
                            <form class="star_rating">
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-51"/>
                                    <label class="star-1" for="star-51">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-52"/>
                                    <label class="star-2" for="star-52">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-53"/>
                                    <label class="star-3" for="star-53">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-54"/>
                                    <label class="star-4" for="star-54">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-55" checked/>
                                    <label class="star-5" for="star-55">5</label>
                                    <span></span>
                                </div>
                            </form>
                            <span class="name">Ashik Mahmud</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h5 class="bottom5">Sei Tumi</h5>
                            <a href="#." class="btn-primary border_radius bottom5">free</a>
                            <form class="star_rating">
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-61"/>
                                    <label class="star-1" for="star-61">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-62"/>
                                    <label class="star-2" for="star-62">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-63"/>
                                    <label class="star-3" for="star-63">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-64" checked/>
                                    <label class="star-4" for="star-64">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-65"/>
                                    <label class="star-5" for="star-65">5</label>
                                    <span></span>
                                </div>
                            </form>
                            <span class="name">Atish Sarker</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-body">
                            <h5 class="bottom5">Sweety Tumi Ar Kedo Na</h5>
                            <a href="#." class="btn-primary border_radius bottom5">free</a>
                            <form class="star_rating">
                                <div class="stars">
                                    <input type="radio" name="star" class="star-1" id="star-71"/>
                                    <label class="star-1" for="star-71">1</label>
                                    <input type="radio" name="star" class="star-2" id="star-72"/>
                                    <label class="star-2" for="star-72">2</label>
                                    <input type="radio" name="star" class="star-3" id="star-73"/>
                                    <label class="star-3" for="star-73">3</label>
                                    <input type="radio" name="star" class="star-4" id="star-74"/>
                                    <label class="star-4" for="star-74">4</label>
                                    <input type="radio" name="star" class="star-5" id="star-75" checked/>
                                    <label class="star-5" for="star-75">5</label>
                                    <span></span>
                                </div>
                            </form>
                            <span class="name">ARK</span>
                        </div>
                    </div>
                </div>
                <div class="widget heading_space">
                    <h3 class="bottom20">Top Tags</h3>
                    <ul class="tags">
                        <li><a href="#.">Folk</a></li>
                        <li><a href="#.">Classical </a></li>
                        <li><a href="#.">Hip Hop</a></li>
                        <li><a href="#.">Pop</a></li>
                        <li><a href="#.">Rapping</a></li>
                        <li><a href="#.">Rock</a></li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- Courses -->