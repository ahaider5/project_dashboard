<footer class="app-footer">
    <div class="site-footer-right">
        @if (rand(1,100) == 100)
            <i class="voyager-rum-1"></i> {{ __('voyager::theme.footer_copyright2') }}
        @else
        Made with ❤️ <!--{!! __('voyager::theme.footer_copyright') !!}  <a href="http://thecontrolgroup.com" target="_blank">The Control Group</a> -->
        @endif
        @if (!empty($version))
            - {{ $version }}
        @endif
    </div>
</footer>
