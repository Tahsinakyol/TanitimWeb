@extends('template.main')
@section('content')
    <section class="generateContact">
        <div class="container">
            <div class="headerContact">İletişime Geç</div>
            <div class="secondContatHeader">Please complete the form below and we will contact you shortly.</div>
            <div action="" class="formSenderCard">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>Adınız Soyadınız</span>
                            <input type="text" placeholder="Adınızı ve Soyadınızı Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>Şirket Adı</span>
                            <input type="text" placeholder="Şirketinizin Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>E Posta</span>
                            <input type="email" placeholder="E Posta adresinizi Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>Telefon</span>
                            <input type="tel" placeholder="Telefon Numarasınızı Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="inputAndLabelGenerate">
                            <span>Mesajınız</span>
                            <textarea placeholder="Mesajınızı Yazınız"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="inputAndLabelGenerate">
                            <button onclick="sender()">Gönder</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <x-contact-comp/>
@endsection
