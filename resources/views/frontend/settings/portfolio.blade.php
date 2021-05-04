@extends('layouts.frontend.setting') @section('title','Profile') {{-- head start --}} @section('extra-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/dashboard.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/register.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/login_register_common.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<style type="text/css">
    .dropdown-toggle::after {
        display: none;
    }

    body {
        background-image: none;
    }

    .nav-pills .nav-link.active {
        background-color: #3ac574 !important;
    }

    /* Start Gallery CSS */
    .thumb {
        margin-bottom: 15px;
    }

    .thumb:last-child {
        margin-bottom: 0;
    }

    /* CSS Image Hover Effects: https://www.nxworld.net/tips/css-image-hover-effects.html */
    /* .thumb figure img {
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        -webkit-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
    } */
    .thumb figure:hover img {
        -webkit-filter: grayscale(0);
        filter: grayscale(0);
    }

    .ui-sortable-placeholder {
        border: 1px dashed black !important;
        visibility: visible !important;
        background: #eeeeee78 !important;
    }

    .ui-sortable-placeholder * {
        visibility: hidden;
    }

    .RearangeBox.dragElemThumbnail {
        opacity: 0.6;
    }

    .RearangeBox {
        width: 180px;
        height: 240px;
        padding: 10px 5px;
        cursor: all-scroll;
        float: left;
        display: inline-block;
        margin: 5px !important;
        text-align: center;
    }

    .IMGthumbnail {
        max-width: 168px;
        height: 80%;
        margin: auto;
        background-color: #ececec;
        padding: 2px;
        border: none;
    }

    .IMGthumbnail img {
        width: 100%;
        height: 100%;
    }

    .imgThumbContainer {
        margin: 4px;
        border: solid;
        display: inline-block;
        justify-content: center;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.14);
        -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.2);
    }

    .imgThumbContainer>.imgName {
        text-align: center;
        padding: 2px 6px;
        margin-top: 4px;
        font-size: 13px;
        height: 20%;
        overflow: hidden;
    }

    .imgThumbContainer>.imgRemoveBtn {
        position: absolute;
        right: 2px;
        top: 2px;
        cursor: pointer;
        display: none;
    }

    .RearangeBox:hover>.imgRemoveBtn {
        display: block;
    }

    .img-thumbnail {
        height: 225px !important;
    }

    .px-50 {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }

    .select2-container--default .select2-selection--single {
        border: none !important;
    }

    .select2-container--open .select2-dropdown--below{ border-top: 1px solid #aaaaaa !important; }
    .select2-container--open .select2-dropdown--above{ border-bottom: 1px solid #aaaaaa !important; }

    fieldset,
    label {
        margin: 0;
        padding: 0;
    }

    h1 {
        font-size: 1.5em;
        margin: 10px;
    }

    /****** Style Star Rating Widget *****/

    .rating {
        border: none;
        float: left;
    }

    .rating>input {
        display: none;
    }

    .rating>label:before {
        margin: 5px;
        font-size: 1.25em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    /***** CSS Magic to Highlight Stars on Hover *****/

    .rating>input:checked~label,
    /* show gold star when clicked */
    .rating:not(:checked)>label:hover,
    /* hover current star */
    .rating:not(:checked)>label:hover~label {
        color: #3ac574;
    }

    /* hover previous stars in list */

    .rating>input:checked+label:hover,
    /* hover current star when changing rating */
    .rating>input:checked~label:hover,
    .rating>label:hover~input:checked~label,
    /* lighten current selection */
    .rating>input:checked~label:hover~label {
        color: #3ac574;
    }

</style>
@endsection {{-- head end --}} {{-- content section start --}}
@section('navbar')

<section class="px-5 pt-2 pb-2 nav-bg-img robotoRegular">@include('includes.frontend.navbar')</section>
@include('includes.frontend.navigations')
@endsection
@section('content')


<p class="border-bottom pl-3 f-21 cl-616161">Portfolio/Images</p>


<section class="container">
    <div class="row gallery">
        @foreach ($portfolio_images as $image)

        <div class="col-lg-3 col-md-4 col-xs-6 thumb" id="target_{{ $image->id }}">
            <i class="material-icons imgRemoveBtn btn-danger position-relative float-right delete_portfolio_image Cursor"
               
                style="top: 23px; z-index: 1; cursor: pointer; border-radius: 5px;" data-portfolioID="{{ $image->id }}">
                delete
            </i>
            <a href="{{ $image->image }}">
                <figure>
                    <img class="img-fluid img-thumbnail" src="{{ $image->image }}" alt="Random Image" />
                </figure>
            </a>
        </div>

        @endforeach
    </div>
    <form action="{{ route('portfolio_images') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center align-items-end">
            <div style="form-group col-md-6">
                <label for="files">Upload Portfolio's Images </label>
                <input id="files" type="file" name="images[]" class="form-control border-0" multiple />
            </div>
            <div class="form-group col-md-6 m-0">
                <button type="submit" class="btn btn-md bg-3AC574 text-white">Upload Photos</button>
            </div>
        </div>
    </form>
    <div style="padding: 14px; margin: auto;" ;>
        <div id="sortableImgThumbnailPreview"></div>
    </div>
</section>


@endsection
{{-- footer section start --}} @section('extra-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>



    $(document).ready(function () {
        $(".gallery").magnificPopup({
            delegate: "a",
            type: "image",
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-img-mobile",
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
            },
        });
    });
    $(function () {
        $("#sortableImgThumbnailPreview").sortable({
            connectWith: ".RearangeBox",
            start: function (event, ui) {
                $(ui.item).addClass("dragElemThumbnail");
                ui.placeholder.height(ui.item.height());
            },
            stop: function (event, ui) {
                $(ui.item).removeClass("dragElemThumbnail");
            },
        });
        $("#sortableImgThumbnailPreview").disableSelection();
    });
    document.getElementById("files").addEventListener("change", handleFileSelect, false);

    function handleFileSelect(evt) {
        var files = evt.target.files;
        var output = document.getElementById("sortableImgThumbnailPreview");
        // Loop through the FileList and render image files as thumbnails.
        for (var i = 0, f;
            (f = files[i]); i++) {
            // Only process image files.
            if (!f.type.match("image.*")) {
                continue;
            }
            var reader = new FileReader();
            // Closure to capture the file information.
            reader.onload = (function (theFile) {
                return function (e) {
                    // Render thumbnail.
                    var imgThumbnailElem =
                        "<div class='RearangeBox imgThumbContainer'><i class='material-icons imgRemoveBtn' onclick='removeThumbnailIMG(this)'>cancel</i><div class='IMGthumbnail' ><img  src='" +
                        e.target.result +
                        "'" +
                        "title='" +
                        theFile.name +
                        "'/></div><div class='imgName'>" +
                        theFile.name +
                        "</div></div>";
                    output.innerHTML = output.innerHTML + imgThumbnailElem;
                };
            })(f);
            // Read in the image file as a data URL.
            reader.readAsDataURL(f);
        }
    }

    function removeThumbnailIMG(elm) {
        elm.parentNode.outerHTML = "";
    }

</script>

@endsection {{-- footer section end --}}
