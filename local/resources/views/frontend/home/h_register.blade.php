<div id="h_register" class="container-fluid">
    <div class="row ">
        <div id="h_register_left" class="col-md-8">
            <div class="col-md-12">
                <div class="row justify-content-end align-items-center">
                    <div class="col-md-4">
                        {{ Html::image('images/temps/home/h_register_book.png','',array('class'=>'h_home_register_image')) }}
                    </div>
                    <div class="col-md-4">
                        <h3 class="title">
                            Be inspired!
                        </h3>
                        <p class="description">
                            Grab your copy of our latest coffee table book and discover:
                        </p>
                        <ul>
                            <li>Marvelous Makeovers</li>
                            <li>Marvelous Makeovers</li>
                            <li>Marvelous Makeovers</li>
                            <li>Marvelous Makeovers</li>
                            <li>Marvelous Makeovers</li>
                            <li>Marvelous Makeovers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="h_register_right" class="col-md-4">
            <div class="row h-100">
                <div class="col-md-8 my-auto">

                    <p class="description">
                        Enter to win a signed copy of Love Your Home during our monthly giveaways.
                    </p>
                    {{Form::text('name','First Name',array())}}
                    {{Form::email('email','Email',array())}}
                    {{Form::text('phone','Phone Number',array())}}
                    <a class="h_register_submit" href="#">Nhận</a>
                </div>
            </div>
        </div>
    </div>
</div>