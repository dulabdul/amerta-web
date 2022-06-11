<x-layout>
    <x-slot name="title">Home</x-slot>
    <section id="explore">
        <div class="container explore mt-5">
            <div class="row">
                <div class="col-12 col-lg-6 title_explore">
                    <h1>Explore our fashion</h1>
                    <hr>
                </div>
                <div class="col-12 col-lg-6 img-explore">
                    <img src="{{asset('/img/4.jpg')}}" class="img-fluid" alt="Image Boutique">
                    <h2>The Fashion</h2>
                </div>
            </div>
                <div class="row">
                    <div class="col-12 col-lg-6 img-explore">
                        <img src="{{asset('/img/6.jpg')}}" class="img-fluid" alt="Image Boutique">
                        <h2>Instagramable Place</h2>
                    </div>          
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        
                    </div>      
                    <div class="col-12 col-lg-6 img-explore">
                        <img src="{{asset('/img/3.jpg')}}" class="img-fluid" alt="Image Boutique">
                        <h2>Take your selfie and post on your story</h2>
                        </div>     
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 img-explore">
                        <img src="{{asset('/img/7.jpg')}}" class="img-fluid" alt="Image Boutique">
                        <h2>More Outfit More Style</h2>
                    </div>          
                </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8d6f51" fill-opacity="1" d="M0,192L30,197.3C60,203,120,213,180,213.3C240,213,300,203,360,181.3C420,160,480,128,540,106.7C600,85,660,75,720,64C780,53,840,43,900,64C960,85,1020,139,1080,181.3C1140,224,1200,256,1260,224C1320,192,1380,96,1410,48L1440,0L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <section id="about">
        <div class="container about">
            <div class="row">
                <div class="col-12 col-lg-6 heading_about">
                    <h1>About Us</h1>
                    <hr>
                </div>
                <div class="col-12 col-lg-6 paragraf_about">
                    <h3>Amerta is a company engaged in fashion and boutique, we make products for lifestyle.</h3>
                </div>
            </div>
        </div>
    </section>
    <section id="service">
        <div class="container services mt-5">
            <div class="service-heading mb-5">
                <h1 class="text-center">Our Services</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col">            
                    <div class="card">
                    <div class="title">
                        <h2>Design Idea</h2>
                    </div>
                    <div class="content">
                        <p>We build your customized fashion with our profesional and made your fashion look stylish</p>
                        <hr class="divider_content">
                    </div>
                    <div class="circle"></div>
                </div></div>
                <div class="col">
                    <div class="card">
                        <div class="title">
                            <h2>Rent Wedding Fashion</h2>
                        </div>
                        <div class="content">
                            <p>Make your wedding day a memory with memorable clothes.</p>
                            <hr class="divider_content">
                        </div>
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="title">
                            <h2>Rent Fashion for all activity</h2>
                        </div>
                        <div class="content">
                            <p>have a special day but not with the fashion? We serve clothes rental and make your day memorable.</p>
                            <hr class="divider_content">
                        </div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery">
        <div class="container gallery-img">
            <div class="gallery-heading mb-4 mt-5">
                <h1 class="text-center">Our Gallery</h1>
                <hr>
            </div>
            <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <img src="{{asset('/img/7.jpg')}}"  class="img-fluid">
    <img src="{{asset('/img/5.jpg')}}"  class="img-fluid">
    <img src="{{asset('/img/10.jpg')}}"  class="img-fluid">
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <img src="{{asset('/img/8.jpg')}}"  class="img-fluid">
    <img src="{{asset('/img/6.jpg')}}"  class="img-fluid">
    <img src="{{asset('/img/9.jpeg')}}"  class="img-fluid">
  </div>  
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
      <img src="{{asset('/img/7.jpg')}}"  class="img-fluid">
      <img src="{{asset('/img/5.jpg')}}"  class="img-fluid">
      <img src="{{asset('/img/10.jpg')}}"  class="img-fluid">
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
    <img src="{{asset('/img/8.jpg')}}"  class="img-fluid">
    <img src="{{asset('/img/6.jpg')}}"  class="img-fluid">
    <img src="{{asset('/img/9.jpeg')}}"  class="img-fluid">
    </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#8d6f51" fill-opacity="1" d="M0,96L40,128C80,160,160,224,240,256C320,288,400,288,480,245.3C560,203,640,117,720,69.3C800,21,880,11,960,48C1040,85,1120,171,1200,192C1280,213,1360,171,1400,149.3L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
</x-layout>