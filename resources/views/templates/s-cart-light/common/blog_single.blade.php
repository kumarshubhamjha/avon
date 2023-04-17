


                <div class="item">
                    <div class="inner-content">
                        <div class="img-wrapper">
                            <img src="{{ sc_file($blog->getThumb()) }}" class="img-fluid" alt="">
                            <span class="label">{{ $blog->created_at }}</span>
                        </div>
                        <p class="small">5 Min Read</p>
                        <div class="name">
                            {{ $blog->title }}
                        </div>
                        <p class="large">{{ $blog->description }}</p>
                        <a class="readmore-btn" href="{{ $blog->getUrl() }}">Read</a>
                    </div>
                </div>
              
              
       