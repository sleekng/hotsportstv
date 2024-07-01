<!-- resources/views/components/article.blade.php -->
<article class="padding-top-40 grid-item-50-50-100 js-isotope-grid-item ">
    <div class="column-l-r-margin-10-999 hover-box pos-rel">
        <a href="{{ $href }}" class="d-block hidden-box js-pointer-large js-animsition-link">
            <img class="img-hover-scale img-hover-opacity" src="{{ asset($imgSrc) }}" alt="About Image">
            <h2 class="headline-sm text-center hidden-box pos-abs pos-left-top">
                <span class="anim-slide js-scrollanim text-color-white margin-bottom-60">{{ $title }}</span>
            </h2>
        </a>
        <ul class="pos-abs pos-left-top margin-top-60">
            <li class="list__item">
                <a href="#" class="subhead-mm hover-text-fill js-pointer-small" data-text="{{ $date }}">{{ $date }}</a>
            </li>
        </ul>
    </div>
</article>
