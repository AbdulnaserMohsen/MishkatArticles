
            <div id="container-article">
              <div class="row row-cols-md-3 row-cols-sm-2 row-cols-1 gy-5">

                @foreach($articles as $article)
                  <div class="col">
                    @include('layouts.article_card')
                  </div>
                @endforeach
              </div>
              <div class="d-flex my-3 justify-content-center">
                {{ $articles->links() }}
              </div>
            </div>
