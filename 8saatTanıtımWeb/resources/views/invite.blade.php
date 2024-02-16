@extends('template.main')
@section('content')
    <section class="generateContact">
        <div class="container">
            <div class="headerContact">İşyeri Kaydı Yap</div>
            <div class="secondContatHeader">Please complete the form below and we will contact you shortly.</div>
            <div class="formSenderCard">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>Adınız Soyadınız</span>
                            <input type="text" placeholder="Adınızı ve Soyadınızı Yazınız">
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
                            <span>GSM</span>
                            <input type="tel" placeholder="Cep Telefon numarasını Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>İl</span>
                            <select name="" id="">
                                <option value="">İl Seçiniz</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>İlçe</span>
                            <select name="" id="">
                                <option value="">İlçe Seçiniz</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>Restaurant İsmi</span>
                            <input type="text" placeholder="Restaurant İsmini Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>Vergi Levhası</span>
                            <input type="number" placeholder="Vergi Levhasını Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="inputAndLabelGenerate">
                            <span>Ruhsat Bilgileri</span>
                            <input type="number" placeholder="Ruhsat Bilgilerini Yazınız">
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="inputAndLabelGenerate">
                            <button onclick="okays()">Başvur</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <x-contact-comp/>
@endsection
