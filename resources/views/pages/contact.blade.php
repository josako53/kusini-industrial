@extends('layout.index')

@section('content')

    @include('sublayout.pictureHeader')

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>i'm kind of a big deal</p>
                </div>
                <div class="col-md-6">
                    <form action="" autocomplete="off" method="post" class="contactForm">

                        <div class="inputGroup">
                            <input type="text" name="name" class="inputContact" <?php echo isset($fields['name'])? 'value="'.escape($fields['name']).'"' : ''; ?> >
                            <label>Your Name</label>
                        </div>

                        <div class="inputGroup">
                            <input type="email" name="email" class="inputContact" <?php echo isset($fields['email'])? 'value="'.escape($fields['email']).'"' : ''; ?>>
                            <label>Your Email</label>
                        </div>

                        <div>
                            <label>Your Message</label><br>
                            <textarea name="message" cols="25" rows="5"><?php echo isset($fields['message'])? escape($fields['message']) : ''; ?></textarea>
                        </div>

                        <input type="submit" name="submit" value="SEND">
                    </form>
                </div>
            </div>
        </div>
    </section>

    @endsection