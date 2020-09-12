<div class="buttons-social-media-share">
    <ul class="share-buttons">
    <li>
        <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}" 
            title="Compartir en Facebook" target="_blank">
            <img alt="Share on Facebook" src="/zendero/img/flat_web_icon_set/Facebook.png">
        </a>
    </li>
    <li>
        <a href="https://twitter.com/intent/tweet?text=Les invito a ver este post&via=Majime&url={{ request()->fullUrl() }}" target="_blank" 
            title="Tweet"><img alt="Tweet" src="/zendero/img/flat_web_icon_set/Twitter.png">
        </a>
    </li>
    <li>
        <a href="http://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ $description }}" target="_blank" 
            title="Pin it"><img alt="Pin it" src="/zendero/img/flat_web_icon_set/Pinterest.png">
        </a>
    </li>
    </ul>
</div>