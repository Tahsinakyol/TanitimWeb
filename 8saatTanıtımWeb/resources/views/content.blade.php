@extends('template.main')
@section('content')
    <section class="linetextAllsText">
        <div class="container">
            <div class="contentIndroduce">
                <div class="textCenterLines">{{$title}}</div>
                @for($i=1;$i<=15;$i++)
                <p class="contentIndroducePtItem">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec hendrerit velit. Suspendisse id convallis sapien. In iaculis malesuada neque, eget mattis felis volutpat in. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam dapibus magna ac arcu ultricies, non elementum elit sagittis. Vivamus non malesuada erat. Curabitur in egestas turpis. Nullam vitae ipsum aliquam, vulputate nulla vel, sodales urna. Nulla nec consequat sem. Suspendisse fringilla non dolor quis ornare. Suspendisse potenti. Integer interdum risus at magna dictum, non aliquet eros egestas.
                </p>
                @endfor
            </div>
        </div>
    </section>
@endsection
