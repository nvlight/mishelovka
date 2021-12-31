<div class="actions mt-3 mb-3 d-flex align-items-center">
    <div class="mx-2">
        @include('catalog.buttons.show', ['id' => $catalog->id])
    </div>
    <div class="mx-2">
        @include('catalog.buttons.delete', ['id' => $catalog->id])
    </div>
</div>