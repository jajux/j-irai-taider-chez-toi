@props(['style' => session('flash.bannerStyle', 'success'), 'message' => session('flash.banner')])

<div x-data="{{ json_encode(['show' => true, 'style' => $style, 'message' => $message]) }}"
    :class="{ 'bg-indigo': style == 'success', 'bg-danger': style == 'danger' }" x-show="show && message" x-init="
                document.addEventListener('banner-message', event => {
                    style = event.detail.style;
                    message = event.detail.message;
                    show = true;
                });
            ">
    <div class="container mx-auto py-2 px-md-2 px-sm-3">
        <div class="d-flex align-items-center justify-content-between flex-wrap">
            <div class="d-flex align-items-center flex-1">
                <span class="d-flex p-2 rounded-lg"
                    :class="{ 'bg-indigo': style == 'success', 'bg-danger': style == 'danger' }">
                    <img class="text-white h-5 w-5" src="images\J-irai_t-aider_chez_toi_logo.png" alt="logo application">
                </span>
                <p class="m-0 ml-3 font-weight-normal text-white" x-text="message"></p>
            </div>
            <div class="flex-shrink-0">
                <button type="button" class="btn btn-link d-flex p-2 rounded-md" aria-label="Dismiss"
                    x-on:click="show = false">
                    <img class="text-white h-5 w-5" src="images\J-irai_t-aider_chez_toi_logo.png"
                        alt="logo application">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </button>
            </div>
        </div>
    </div>
</div>
