@extends('layouts.app')
@section('content')
    <!-- Contact STarts -->
    <section>
        <div class="container my-5 py-5">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card mx-auto" style="max-width: 800px;">
                        <div class="card-body">
                            <h4 class="text-center card-title mb-4">Get In Touch With us</h4>

                            <form action="{{route('contact.send')}}" method="POST" class="row">
                                @csrf

                                <div class="col-md-6 mb-3">
                                    <label for="">Full Name</label>
                                    <input type="text" name="name" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Email</label>
                                    <input type="email" name="email" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Subject</label>
                                    <input type="text" name="subject" class="form-control">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="">Branch</label>
                                    <select name="branch" class="form-select" id="">
                                        <option value="kubwa">Kubwa Abuja Branch</option>
                                        <option value="lekki">Lekki Lagos Branch</option>
                                        <option value="bristol">Bristol UK Branch</option>
                                    </select>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="">Message</label>
                                    <textarea name="message" class="form-control" rows="10"></textarea>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-primary btn-lg">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.0493284138565!2d7.327569574558075!3d9.150017787083861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104dd9f58204702b%3A0x666c4080fc20e6e2!2searly%20code!5e0!3m2!1sen!2sng!4v1732204848934!5m2!1sen!2sng"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Ends -->
@endsection
