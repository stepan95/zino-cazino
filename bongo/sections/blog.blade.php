@php
    $blogContent = getContent('blog.content',true);
    
    if (request()->route()->getName() == 'home' || request()->route()->getName() == 'tournament'){
        $blogElements = getContent('blog.element',false,4);
    } else {
        $blogElements = \App\Models\Frontend::where('data_keys', 'blog.element')->latest('id')->paginate(getPaginate());
    }
@endphp
@push('style')
    <link rel="stylesheet" href="/assets/templates/bongo/css/components/Blog/blog.css">
@endpush
      <!-- Section Blog -->
      <section class="blog">
        <div class="blog__container">
          <div class="blog_wrapper">
            <div class="blog_top section_title_wrapper">
              <div class="blog_title title_h2">
                {{ __($blogContent->data_values->heading) }}
              </div>
              <div class="blog_text text_after">
                {{ __($blogContent->data_values->sub_heading) }}
              </div>
            </div>
            <div class="blog_grid">
                @foreach($blogElements as $blogElement)
              <div class="blog_grid_item">
                <div class="blog_grid_img">
                  <img src="{{ getImage('assets/images/frontend/blog/'.@$blogElement->data_values->blog_image,'670x375') }}" alt="{{ __($blogElement->data_values->title) }}" loading="lazy">
                </div>
                <div class="blog_grid_body">
                  <time class="blog_grid_date">{{ $blogElement->created_at->format('d M, Y') }}</time>
                  <div class="blog_grid_descr">
                    {{ __($blogElement->data_values->title) }}
                  </div>
                  <a href="{{ route('blog.details',[$blogElement->id,slug($blogElement->data_values->title)]) }}" class="blog_btn main_btn_green">@lang('Read More')</a>
                </div>
              </div>
              @endforeach
            </div>
            @if(request()->route()->getName() != 'home' && request()->route()->getName() != 'tournament')
                {{ $blogElements->links() }}
            @endif
          </div>
        </div>
      </section>
      <!-- Section Blog END-->


