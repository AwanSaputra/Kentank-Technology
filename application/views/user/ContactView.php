<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.298822307253!2d107.62834001448911!3d-6.974027994961758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5b7da517%3A0x864485f26a388f95!2sTelkom%20University!5e0!3m2!1sid!2sid!4v1607568168922!5m2!1sid!2sid" width="2000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mb-5" data-aos="fade">
                <form method="POST" action="addContacts" class="p-5 bg-white" style="margin-top: -150px;">
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">First Name</label>
                            <input type="text" id="fname" name="fname" class="form-control" placeholder="Write Your First name" required>
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Last Name</label>
                            <input type="text" id="lname" name="lname" class="form-control" placeholder="Write Your Last name" required>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">Your Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="EmailAddress@mail.com" required>
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Your Subject</label>
                            <input type="subject" id="subject" name="subject" class="form-control" placeholder="Write Here" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Your Message</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write Here" required></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-pill btn-primary btn-md text-white">
                        </div>
                    </div>

                </form>
            </div>
            <div class="col-md-5" data-aos="fade" data-aos-delay="100">

                <div class="p-4 mb-3 bg-white">
                    <p class="mb-0 font-weight-bold">Address</p>
                    <p class="mb-4"> Some City, Some Street, Indonesia</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">+62 12345678</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">kentanktech@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>