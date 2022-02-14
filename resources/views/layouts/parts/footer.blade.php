<style>
    .footer_span{
        color: gray;
        font-weight: lighter;
        font-size: 15px;
    }
    .footer_tag_a{
        text-decoration: none;
        color: gray;
    }
    .footer_tag_a:hover span{
        color: #fff;
    }
</style>
<footer class="mainFooter p-3 bg-dark text-center">
    <a href="https://mgdev.ru" class="footer_tag_a">
        <span class="footer_span">Made on @include('layouts.parts.footer_logo') MG Dev &copy;
            @include('layouts.parts.footer_current_year')
        </span>
    </a>
</footer>