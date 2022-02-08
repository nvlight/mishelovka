<style>
    .t898__wrapper{
        position: fixed;
        bottom: 50px;
        right: 65px;
        height: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 100000;
    }
    .t898__btn_input {
        display: none;
    }
    .t898__btn_label {
        position: relative;
        cursor: pointer;
        z-index: 2;
        width: 60px;
        height: 60px;
        justify-content: center;
        align-items: center;
        background: #08c;
        border-radius: 50%;
        transition: all 0.2s ease-in-out;
        box-shadow: 0 0 20px 0 rgba(0,0,0,.3);
        overflow: hidden;
    }
    .t898__icon {
        transition: all 0.3s ease-in-out;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    #rec299691695 .t898__hint {
        color: #fcf9f9;
    }
    #rec299691695 .t898__hint {
        background: #20a826;
    }
    .t898__hint {
        position: absolute;
        right: 80px;
        white-space: nowrap;
        background: #fff;
        padding: 9px 13px;
        font-size: 15px;
        border-radius: 3px;
        transform: translateX(0%) translateY(-50%);
        top: 50%;
        background: #292929;
        color: #fff;
        opacity: .85;
        transition: all 0.1s linear;
    }
    .t-name_xs {
        font-size: 16px;
        line-height: 1.35;
    }
    .t-name {
        font-family: 'Roboto',Arial,sans-serif;
        font-weight: 600;
        color: #000;
    }
    #allrecords a {
        color: #ff8562;
        text-decoration: none;
    }
    .t-records a {
        color: #ff8562;
        text-decoration: none;
    }
    .t898__icon_link {
        border-radius: 50%;
        box-shadow: 0 0 20px 0 rgba(0,0,0,.3);
        opacity: 0;
        visibility: hidden;
        width: 50px;
        height: 50px;
    }
    .t898__icon {
        transition: all 0.3s ease-in-out;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    .t898__tooltip {
        position: absolute;
        right: 70px;
        white-space: nowrap;
        background: #fff;
        padding: 6px 9px;
        font-size: 13px;
        border-radius: 3px;
        transform: translateX(0%) translateY(-50%);
        top: 50%;
        background: #292929;
        color: #fff;
        opacity: 0;
        transition: all 0.1s linear;
    }
    .t898__wrapper, .t898__tooltip {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .t-name_xs {
        font-size: 16px;
        line-height: 1.35;
    }
    .t-name {
        font-family: 'Roboto',Arial,sans-serif;
        font-weight: 600;
        color: #000;
    }
    #allrecords a {
        color: #ff8562;
    }
    .t-records a {
        color: #ff8562;
    }
    .t898__icon_link {
        visibility: hidden;
    }
    .t898__icon_link {
        border-radius: 50%;
        box-shadow: 0 0 20px 0 rgba(0,0,0,.3);
        opacity: 0;
        visibility: hidden;
        width: 50px;
        height: 50px;
    }
    .t898__icon {
        transition: all 0.3s ease-in-out;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    #allrecords a[href^="tel"] {
        color: inherit;
        text-decoration: none;
    }
    .t898__icon_link {
        border-radius: 50%;
        box-shadow: 0 0 20px 0 rgba(0,0,0,.3);
        opacity: 0;
        visibility: hidden;
        width: 50px;
        height: 50px;
    }
    .t898__icon {
        transition: all 0.3s ease-in-out;
        position: absolute;
        margin: auto;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }
    .t898__btn_input:checked + label {
        background: #fff !important;
        animation: none;
    }
    .t898__btn_input+ label .t898__icon-close{
        display: none;
    }
    .t898__btn_input:checked + label .t898__icon-close{
        display: block;
    }
    .t898__btn_input:checked + label span.t898__hint{
        display: none;
    }
    .t898__btn_label:hover {
        box-shadow: 0 0 20px 0 rgba(0,0,0,.4);
    }
    .t898__btn_label {
        position: relative;
        cursor: pointer;
        z-index: 2;
        width: 60px;
        height: 60px;
        justify-content: center;
        align-items: center;
        background: #08c;
        border-radius: 50%;
        transition: all 0.2s ease-in-out;
        box-shadow: 0 0 20px 0 rgba(0,0,0,.3);
        overflow: hidden;
    }
    #rec299691695 .t898__hint::after {
        border-left-color: #20a826;
    }
    .t898__hint::after {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border: solid transparent;
        border-top-width: medium;
        border-right-width: medium;
        border-bottom-width: medium;
        border-left-color: transparent;
        border-left-width: medium;
        border-width: 10px;
        top: 50%;
        right: -20px;
        transform: translateY(-50%);
        border-left-color: #292929;
    }

    .t898__btn_input:checked ~ a:nth-of-type(1) {
        transition: all 0.2s ease-in-out;
        transform: translate(0,-135%);
    }
    .t898__btn_input:checked ~ .t898__icon_link {
        opacity: 1;
        visibility: visible;
    }
    .t898__btn_input:checked ~ a:nth-of-type(2) {
        transition: all 0.225s ease-in-out;
        transform: translate(0,-255%);
    }
    .t898__btn_input:checked ~ a:nth-of-type(3) {
        transition: all 0.25s ease-in-out;
        transform: translate(0,-375%);
    }
    .t898__btn_input:checked ~ a:nth-of-type(4) {
        transition: all 0.275s ease-in-out;
        transform: translate(0,-495%);
    }

    .t898__btn_input:checked + label .t898__icon-close {
        opacity: 1;
        visibility: visible;
        transform: scale(1);
    }
    .t898__btn_input:checked + label .t898__icon-write {
        opacity: 0;
        visibility: hidden;
        transform: scale(.1);
    }

    .t898__btn_input:checked ~ span:nth-of-type(1) {
        display: none;
    }
    .t-name {
        font-family: 'Roboto',Arial,sans-serif;
        font-weight: 600;
        color: #000;
    }
    .t898__hint {
        position: absolute;
        right: 80px;
        white-space: nowrap;
        background: #fff;
        padding: 9px 13px;
        font-size: 15px;
        border-radius: 3px;
        transform: translateX(0%) translateY(-50%);
        top: 50%;
        background: #292929;
        color: #fff;
        opacity: .85;
        transition: all 0.1s linear;
    }

</style>
<div id="rec299691695" class="r t-rec" style=" " data-animationappear="off" data-record-type="898">
    <div class="t898 " style="">
        <div class="t898__wrapper" style=" "><input type="checkbox" class="t898__btn_input"
                                                    id="t898__btn_input_299691695"/> <label
                    for="t898__btn_input_299691695" class="t898__btn_label" style="background:#20a826; ">
                <svg class="t898__icon t898__icon-write" width="35" height="32" viewBox="0 0 35 32"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.2667 12.6981H23.3667M11.2667 16.4717H23.3667M4.8104 23.5777C2.4311 21.1909 1 18.1215 1 14.7736C1 7.16679 8.38723 1 17.5 1C26.6128 1 34 7.16679 34 14.7736C34 22.3804 26.6128 28.5472 17.5 28.5472C15.6278 28.5472 13.8286 28.2868 12.1511 27.8072L12 27.7925L5.03333 31V23.8219L4.8104 23.5777Z"
                          stroke="#ffffff" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                          stroke-linejoin="round" fill="none"/>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="t898__icon t898__icon-close"
                     viewBox="0 0 23 23">
                    <g fillRule="evenodd">
                        <path d="M10.314 -3.686H12.314V26.314H10.314z" transform="rotate(-45 11.314 11.314)"/>
                        <path d="M10.314 -3.686H12.314V26.314H10.314z" transform="rotate(45 11.314 11.314)"/>
                    </g>
                </svg>
            </label>
            <span class="t898__hint t-name t-name_xs"> Я Лиза, пишите мне по всем вопросам)) </span> <a
                    class="t898__icon t898__icon-telegram_wrapper t898__icon_link"
                    href="https://t.me/sekond07"
                    data-messenger-telegram-link="https://t.me/sekond07" target="_blank"
                    rel="nofollow noopener noreferrer"> <span class="t898__tooltip t-name t-name_xs"> Telegram </span>
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 50C38.8071 50 50 38.8071 50 25C50 11.1929 38.8071 0 25 0C11.1929 0 0 11.1929 0 25C0 38.8071 11.1929 50 25 50Z"
                          fill="#0087D0"/>
                    <path d="M36.11 13.0399L9.40999 22.7999C8.86999 22.9999 8.85999 23.7999 9.38999 24.0299L16.23 26.7199L18.78 34.4099C18.93 34.8199 19.47 34.9599 19.81 34.6799L23.73 31.1899L31.17 35.9099C31.55 36.1499 32.06 35.9399 32.15 35.5099L36.99 13.7599C37.09 13.2799 36.59 12.8699 36.11 13.0599V13.0399ZM20.03 28.1599L19.6 32.1199L17.53 26.0299L32.1 16.8699L20.03 28.1699V28.1599Z"
                          fill="white"/>
                </svg>
            </a> <a class="t898__icon t898__icon-whatsapp_wrapper t898__icon_link" href="https://wa.me/79995551111"
                    target="_blank" rel="nofollow noopener noreferrer"> <span class="t898__tooltip t-name t-name_xs"> WhatsApp </span>
                <svg width="50" height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 50a25 25 0 100-50 25 25 0 000 50z" fill="#fff"/>
                    <path d="M26.1 12a12.1 12.1 0 00-10.25 18.53l.29.46-1.22 4.46 4.57-1.2.45.27a12.1 12.1 0 106.16-22.51V12zm6.79 17.22c-.3.85-1.72 1.62-2.41 1.72-.62.1-1.4.14-2.25-.14-.7-.22-1.37-.47-2.03-.77-3.59-1.57-5.93-5.24-6.1-5.48-.19-.24-1.47-1.97-1.47-3.76 0-1.79.93-2.67 1.25-3.03.33-.37.72-.46.96-.46.23 0 .47 0 .68.02.22 0 .52-.09.8.62l1.1 2.7c.1.18.16.4.04.64s-.18.39-.36.6c-.18.21-.38.47-.54.64-.18.18-.36.38-.15.74.2.36.92 1.55 1.98 2.52 1.37 1.23 2.52 1.62 2.88 1.8.35.18.56.15.77-.1.2-.23.9-1.05 1.13-1.42.24-.36.48-.3.8-.18.33.12 2.09 1 2.44 1.18.36.19.6.28.69.43.09.15.09.88-.21 1.73z"
                          fill="#27D061"/>
                    <path d="M25 0a25 25 0 100 50 25 25 0 000-50zm1.03 38.37c-2.42 0-4.8-.6-6.9-1.76l-7.67 2 2.05-7.45a14.3 14.3 0 01-1.93-7.2c0-7.92 6.49-14.38 14.45-14.38a14.4 14.4 0 110 28.79z"
                          fill="#27D061"/>
                </svg>
            </a> <a class="t898__icon t898__icon-viber_wrapper t898__icon_link"
                    href="viber://chat?number=79995551111" target="_blank" rel="nofollow noopener noreferrer"> <span
                        class="t898__tooltip t-name t-name_xs"> Viber </span>
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 43C34.9411 43 43 34.9411 43 25C43 15.0589 34.9411 7 25 7C15.0589 7 7 15.0589 7 25C7 34.9411 15.0589 43 25 43Z"
                          fill="white"/>
                    <path d="M25 0C11.194 0 0 11.194 0 25C0 38.806 11.194 50 25 50C38.806 50 50 38.806 50 25C50 11.194 38.806 0 25 0ZM24.063 12.977C24.247 12.973 24.439 13.002 24.604 13.002C24.671 13.002 24.734 12.996 24.787 12.982C30.735 13.198 35.924 18.605 35.817 24.552C35.817 25.092 36.033 25.958 35.167 25.958C34.302 25.958 34.519 25.093 34.519 24.444C34.4326 23.7048 34.3034 22.9712 34.132 22.247C33.9787 21.5995 33.7772 20.9644 33.529 20.347C33.1967 19.5117 32.7468 18.7281 32.193 18.02C30.586 15.991 28.146 14.827 24.679 14.28C24.139 14.173 23.381 14.28 23.381 13.632C23.381 13.069 23.705 12.977 24.063 12.977V12.977ZM32.248 24.768C31.275 24.877 31.49 24.011 31.383 23.471C30.733 19.686 29.436 18.281 25.544 17.415C25.004 17.307 24.139 17.415 24.246 16.551C24.355 15.686 25.219 16.011 25.761 16.119C29.653 16.551 32.789 19.794 32.789 23.471C32.681 23.903 33.005 24.661 32.249 24.769L32.248 24.768ZM29.869 22.823C29.869 23.255 29.869 23.795 29.22 23.903C28.788 23.903 28.571 23.579 28.463 23.147C28.355 21.525 27.489 20.66 25.868 20.443C25.436 20.335 24.895 20.227 25.11 19.577C25.22 19.145 25.65 19.145 26.085 19.145C27.923 19.038 29.869 20.984 29.869 22.823ZM35.924 34.718C35.275 36.556 33.004 38.394 31.058 38.394C30.842 38.286 30.301 38.286 29.761 38.069C21.327 34.393 15.055 28.445 11.594 19.795C10.404 16.983 11.702 14.497 14.623 13.523C14.8797 13.4163 15.155 13.3613 15.433 13.3613C15.711 13.3613 15.9863 13.4163 16.243 13.523C17.542 13.956 20.677 18.39 20.786 19.687C20.893 20.767 20.136 21.308 19.488 21.741C18.19 22.607 18.19 23.796 18.731 24.985C20.029 27.797 22.191 29.635 24.894 30.933C25.868 31.365 26.841 31.365 27.49 30.283C28.679 28.445 30.193 28.445 31.815 29.635C32.572 30.175 33.436 30.716 34.193 31.365C35.276 32.23 36.573 32.986 35.924 34.717V34.718Z"
                          fill="#935BBE"/>
                </svg>
            </a> <a class="t898__icon t898__icon-phone_wrapper t898__icon_link" href="tel:+79995551111" target="_blank"
                    rel="nofollow noopener noreferrer"> <span class="t898__tooltip t-name t-name_xs"> Phone </span>
                <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25 0C11.2 0 0 11.2 0 25C0 38.8 11.2 50 25 50C38.8 50 50 38.8 50 25C50 11.2 38.84 0 25 0Z"
                          fill="#004D73"/>
                    <path d="M38.66 34.1001L32.44 27.7801C32.3435 27.6746 32.226 27.5904 32.0952 27.5327C31.9643 27.4751 31.8229 27.4453 31.68 27.4453C31.537 27.4453 31.3956 27.4751 31.2647 27.5327C31.1339 27.5904 31.0165 27.6746 30.92 27.7801L27.5 31.2001C26.81 31.8801 25.79 31.8801 25.1 31.2001L18.74 24.8301C18.5778 24.6751 18.4488 24.4889 18.3606 24.2826C18.2724 24.0764 18.227 23.8544 18.227 23.6301C18.227 23.4058 18.2724 23.1838 18.3606 22.9776C18.4488 22.7713 18.5778 22.5851 18.74 22.4301L22.16 19.0001C22.61 18.5601 22.61 17.9201 22.16 17.4801L15.9 11.3101C15.7943 11.209 15.6695 11.13 15.5329 11.0776C15.3963 11.0253 15.2506 11.0008 15.1045 11.0054C14.9583 11.0101 14.8145 11.0439 14.6815 11.1048C14.5485 11.1657 14.429 11.2525 14.33 11.3601C12.33 13.8101 8.65996 20.6201 18.73 30.9101L18.89 31.0601L19.03 31.2101C29.36 41.3501 36.16 37.6801 38.61 35.6701C39.1 35.2701 39.15 34.5401 38.66 34.1001Z"
                          fill="white"/>
                </svg>
            </a></div>
    </div>

</div>