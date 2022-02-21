<div wire:loading.delay>
    <div
        style="display: flex; justify-content:center; align-items:center; background-color:black; position: fixed; top:0px; left:0px; z-index:9999; width:100%; height:100%; opacity:.75;">
        <div class="la-ball-triangle-path la-2x">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    @push('wire-loading')
        <style>
            /*!
     * Load Awesome v1.1.0 (http://github.danielcardoso.net/load-awesome/)
     * Copyright 2015 Daniel Cardoso <@DanielCardoso>
     * Licensed under MIT
     */
            .la-ball-triangle-path,
            .la-ball-triangle-path>div {
                position: relative;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .la-ball-triangle-path {
                display: block;
                font-size: 0;
                color: #fff;
            }

            .la-ball-triangle-path.la-dark {
                color: #333;
            }

            .la-ball-triangle-path>div {
                display: inline-block;
                float: none;
                background-color: currentColor;
                border: 0 solid currentColor;
            }

            .la-ball-triangle-path {
                width: 32px;
                height: 32px;
            }

            .la-ball-triangle-path>div {
                position: absolute;
                top: 0;
                left: 0;
                width: 10px;
                height: 10px;
                border-radius: 100%;
            }

            .la-ball-triangle-path>div:nth-child(1) {
                -webkit-animation: ball-triangle-path-ball-one 2s 0s ease-in-out infinite;
                -moz-animation: ball-triangle-path-ball-one 2s 0s ease-in-out infinite;
                -o-animation: ball-triangle-path-ball-one 2s 0s ease-in-out infinite;
                animation: ball-triangle-path-ball-one 2s 0s ease-in-out infinite;
            }

            .la-ball-triangle-path>div:nth-child(2) {
                -webkit-animation: ball-triangle-path-ball-two 2s 0s ease-in-out infinite;
                -moz-animation: ball-triangle-path-ball-two 2s 0s ease-in-out infinite;
                -o-animation: ball-triangle-path-ball-two 2s 0s ease-in-out infinite;
                animation: ball-triangle-path-ball-two 2s 0s ease-in-out infinite;
            }

            .la-ball-triangle-path>div:nth-child(3) {
                -webkit-animation: ball-triangle-path-ball-tree 2s 0s ease-in-out infinite;
                -moz-animation: ball-triangle-path-ball-tree 2s 0s ease-in-out infinite;
                -o-animation: ball-triangle-path-ball-tree 2s 0s ease-in-out infinite;
                animation: ball-triangle-path-ball-tree 2s 0s ease-in-out infinite;
            }

            .la-ball-triangle-path.la-sm {
                width: 16px;
                height: 16px;
            }

            .la-ball-triangle-path.la-sm>div {
                width: 4px;
                height: 4px;
            }

            .la-ball-triangle-path.la-2x {
                width: 64px;
                height: 64px;
            }

            .la-ball-triangle-path.la-2x>div {
                width: 20px;
                height: 20px;
            }

            .la-ball-triangle-path.la-3x {
                width: 96px;
                height: 96px;
            }

            .la-ball-triangle-path.la-3x>div {
                width: 30px;
                height: 30px;
            }

            /*
      * Animations
      */
            @-webkit-keyframes ball-triangle-path-ball-one {
                0% {
                    -webkit-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -webkit-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -webkit-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }
            }

            @-moz-keyframes ball-triangle-path-ball-one {
                0% {
                    -moz-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -moz-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -moz-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -moz-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }
            }

            @-o-keyframes ball-triangle-path-ball-one {
                0% {
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }
            }

            @keyframes ball-triangle-path-ball-one {
                0% {
                    -webkit-transform: translate(0, 220%);
                    -moz-transform: translate(0, 220%);
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -webkit-transform: translate(110%, 0);
                    -moz-transform: translate(110%, 0);
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -webkit-transform: translate(220%, 220%);
                    -moz-transform: translate(220%, 220%);
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translate(0, 220%);
                    -moz-transform: translate(0, 220%);
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }
            }

            @-webkit-keyframes ball-triangle-path-ball-two {
                0% {
                    -webkit-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -webkit-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -webkit-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }
            }

            @-moz-keyframes ball-triangle-path-ball-two {
                0% {
                    -moz-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -moz-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -moz-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -moz-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }
            }

            @-o-keyframes ball-triangle-path-ball-two {
                0% {
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }
            }

            @keyframes ball-triangle-path-ball-two {
                0% {
                    -webkit-transform: translate(110%, 0);
                    -moz-transform: translate(110%, 0);
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -webkit-transform: translate(220%, 220%);
                    -moz-transform: translate(220%, 220%);
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -webkit-transform: translate(0, 220%);
                    -moz-transform: translate(0, 220%);
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translate(110%, 0);
                    -moz-transform: translate(110%, 0);
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }
            }

            @-webkit-keyframes ball-triangle-path-ball-tree {
                0% {
                    -webkit-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -webkit-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -webkit-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }
            }

            @-moz-keyframes ball-triangle-path-ball-tree {
                0% {
                    -moz-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -moz-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -moz-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -moz-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }
            }

            @-o-keyframes ball-triangle-path-ball-tree {
                0% {
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }
            }

            @keyframes ball-triangle-path-ball-tree {
                0% {
                    -webkit-transform: translate(220%, 220%);
                    -moz-transform: translate(220%, 220%);
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }

                17% {
                    opacity: .25;
                }

                33% {
                    opacity: 1;
                    -webkit-transform: translate(0, 220%);
                    -moz-transform: translate(0, 220%);
                    -o-transform: translate(0, 220%);
                    transform: translate(0, 220%);
                }

                50% {
                    opacity: .25;
                }

                66% {
                    opacity: 1;
                    -webkit-transform: translate(110%, 0);
                    -moz-transform: translate(110%, 0);
                    -o-transform: translate(110%, 0);
                    transform: translate(110%, 0);
                }

                83% {
                    opacity: .25;
                }

                100% {
                    opacity: 1;
                    -webkit-transform: translate(220%, 220%);
                    -moz-transform: translate(220%, 220%);
                    -o-transform: translate(220%, 220%);
                    transform: translate(220%, 220%);
                }
            }

        </style>
    @endpush
</div>