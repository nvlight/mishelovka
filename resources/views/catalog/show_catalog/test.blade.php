@extends('layouts.show_catalog__lightGalleryTest')

@section('content')

    <div class="container">
        <h3>test Light gallery is started!</h3>

        <div class="catalog_items">
            <div id="gallery-videos-demo">
                <!-- HTML5 Video --->
                <a
                    data-lg-size="1280-720"
                    data-video='{"source": [{"src":"/videos/video1.mp4", "type":"video/mp4"}], "tracks": [{"src": "{/videos/title.txt", "kind":"captions", "srclang": "en", "label": "English", "default": "true"}], "attributes": {"preload": false, "playsinline": true, "controls": true}}'
                    data-poster="/images/demo/youtube-video-poster.jpg"
                    data-sub-html="<h4>'Peck Pocketed' by Kevin Herron | Disney Favorite</h4>"
                >
                    <img
                        width="300"
                        height="100"
                        class="img-responsive"
                        src="/images/demo/youtube-video-poster.jpg"
                    />
                </a>
            </div>
        </div>

        @include('catalog.parts.socials')

    </div>
    <script>
        lightGallery(document.getElementById('gallery-videos-demo'), {
            plugins: [lgZoom, lgThumbnail, lgVideo],
            speed: 500,
            //licenseKey: 'your_license_key',
        });
    </script>

@endsection